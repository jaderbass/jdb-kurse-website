<?php
if (!empty($_POST)) {
  require_once $snippetsManualIncludePath . 'ReadSnippetFile.php';
  require_once $snippetsManualIncludePath . 'ProcessSnippetFileContent.php';
  require_once $snippetsManualIncludePath . 'SaveFile.php';
  require_once $snippetsManualIncludePath . 'MakeFileContent.php';
  $fileLoader       = new ReadSnippetFile();
  $fileContent      = $fileLoader->getFile($_FILES['snippet']);
  $jsonErrorMsg = '';
  if (is_null($fileContent)) {
    switch (json_last_error()) {
      case JSON_ERROR_NONE:
        $jsonErrorMsg = ' - Keine Fehler';
        break;
      case JSON_ERROR_DEPTH:
        $jsonErrorMsg = ' - Maximale Stacktiefe überschritten';
        break;
      case JSON_ERROR_STATE_MISMATCH:
        $jsonErrorMsg = ' - Unterlauf oder Nichtübereinstimmung der Modi';
        break;
      case JSON_ERROR_CTRL_CHAR:
        $jsonErrorMsg = ' - Unerwartetes Steuerzeichen gefunden';
        break;
      case JSON_ERROR_SYNTAX:
        $jsonErrorMsg = ' - Syntaxfehler, ungültiges JSON';
        break;
      case JSON_ERROR_UTF8:
        $jsonErrorMsg = ' - Missgestaltete UTF-8 Zeichen, möglicherweise fehlerhaft kodiert';
        break;
      default:
        $jsonErrorMsg = ' - Unbekannter Fehler';
        break;
    } ?>
    <div class="alert-danger">Ein Fehler ist aufgetreten:<br><code><?= $jsonErrorMsg ?></code></div>
    <?php
    exit;
  }
  $processedContent = new ProcessSnippetFileContent($fileContent);
  $fileObject       = new MakeFileContent($processedContent->getProcessedFile(), $_FILES['snippet']['name']);
  $fileType = 'md';
  if (isset($_POST['getPdf'])) {
    $fileType = 'pdf';
    require_once $snippetsManualIncludePath . 'fpdf.php';
    require_once $snippetsManualIncludePath . 'pdf.php';
    $fileName = strstr($_FILES['snippet']['name'], '.', true);
    $fileName = strstr($fileName, '-',);
    $fileName = substr($fileName, 1);
    $savePath = "manuals/{$fileName}-snippet-manual.{$fileType}";
    $pdf = new PDF('L');
    $header = array('Abkürzung', 'Typ', 'Kurzbeschreibung', 'Beschreibung');
    $pdf->AddPage();
    $pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
    $pdf->SetFont('DejaVu', '', 24);
    $pdf->Cell(40, 20, 'Snippet für ' . strtoupper($fileName));
    $pdf->SetFont('', '', 11);
    $pdf->Ln(40);
    $pdf->FancyTable($header, $processedContent->getProcessedFile());
    $pdf->Output('F', $savePath);

    if (file_exists($savePath)): ?>
      <div class="alert-success">
        Die Datei <b><?= $savePath ?></b> wurde erfolgreich gespeichert.
      </div>
      Zum Download hier klicken: <a href="<?= $savePath ?>" download><?= $savePath ?></a>.
      <?php endif;
  }
  try {
    if ('md' === $fileType) {
      $saveFile = new SaveFile($fileObject->getMdFileContent(), $fileObject->getFileHeader());
      if ($saveFile): ?>
        <div class="alert-success">
          Die Datei <b><?= $saveFile->getFileName() ?></b> wurde erfolgreich gespeichert.
        </div>
        Zum Download hier klicken: <a href="<?= $saveFile->getFile() ?>" download><?= $saveFile->getFile() ?></a>.
    <?php else :
        throw new Exception('Die Datei konnte nicht gespeichert werden. Bitte versuche es noch einmal!');
      endif;
    }
  } catch (Exception $e) {
    ?>
    <div class="alert-danger">
      <?= $e->getMessage() ?>
    </div>
<?php
  }
}
