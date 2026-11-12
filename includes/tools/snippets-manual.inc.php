<div class="container mb-3">
  <h2 id="snippets">PHP Snippets Manual</h2>
  <p>Erzeuge eine tabellarische Übersicht über die Abkürzungen, den Scope und die Beschreibung einer Visual Studio Code Snippets-Datei als MD-Datei oder PDF-Dokument.</p>
  <form action="<?= $_SERVER['SCRIPT_NAME'] . '?page=tools#snippets' ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000">
    <div class="row mb-3 flex-column flex-lg-row">
      <div class="col-lg-6">
        <div class="mb-1">
          <label for="snippet">Wähle ein Snippet</label>
          <input class="form-control" type="file" name="snippet" id="snippet">
        </div>
      <!-- </div>
      <div class="col-lg-6 mt-4"> -->
        <div class="form-check form-switch">
          <input type="checkbox" name="getPdf" id="getPdf" class="form-check-input" role="switch">
          <label for="getPdf" class="form-check-label">als PDF-Dokument speichern</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div>
        <button class="btn btn-success" type="submit">Speichern</button>
      </div>
    </div>
  </form>
  <?php
  $snippetsManualIncludePath = 'includes/tools/snippets-manual/';
  require_once $snippetsManualIncludePath . 'check-file-type.inc.php';
  ?>
</div>