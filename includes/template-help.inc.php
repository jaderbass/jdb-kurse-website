<main id="pageMain">
  <div id="hero" class="text-white">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse justify-content-center align-items-center g-5 py-5">
        <div class="col-6 col-sm-4 col-lg-3">
          <?php if (isset($pageLogo)) : ?>
            <img src="<?= $pageLogo; ?>" class="page-logo d-block mx-lg-auto img-fluid" alt="">
          <?php endif; ?>
        </div>
        <div class="col-lg-9">
          <h1 class="display-5 fw-bold lh-1 mb-3">
            <?= $pageTitle; ?>
          </h1>
          <p class="lead"><?= isset($pageSlogan) ? $pageSlogan : ''; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-5">

    <h2 id="winps">Windows / Powershell</h2>

    <section class="my-4">
      <h2 class="h4">Node/npm unter PowerShell</h2>

      <div class="alert alert-warning" role="alert">
        <h3 class="h5">Problem</h3>
        <p class="mb-2">
          <code>node -v</code> funktioniert, aber <code>npm -v</code> meldet z. B.:
        </p>

        <pre class="mb-0"><code class="language-powershell text-danger bg-dark">npm.ps1 kann nicht geladen werden,
da die Ausführung von Skripts auf diesem System deaktiviert ist.</code></pre>
      </div>

      <p>
        Die Ursache ist in der Regel die PowerShell
        <strong>Execution Policy</strong>. Sie verhindert die Ausführung von
        <code>npm.ps1</code>.
      </p>

      <h3 class="h5">Lösung 1: Eingabeaufforderung verwenden</h3>

      <p>
        Im VS-Code-Terminal statt PowerShell die
        <strong>Eingabeaufforderung / Command Prompt</strong> auswählen.
        Danach sollte npm normal funktionieren:
      </p>

      <?php
      $code = 'npm -v';
      $htmlOutput = printCopyToClipboardButton($code, '', 'powershell');
      echo $htmlOutput;
      ?>

      <h3 class="h5">Lösung 2: PowerShell für den aktuellen Benutzer freigeben</h3>

      <p>Prüfe zunächst die aktuell gesetzten Richtlinien:</p>

      <?php
      $code = 'Get-ExecutionPolicy -List';
      $htmlOutput = printCopyToClipboardButton($code, '', 'powershell');
      echo $htmlOutput;
      ?>

      <p>Die Ausgabe sollte in etwa so aussehen:</p>

      <?php
      $code = 'Scope ExecutionPolicy
        ----- ---------------
MachinePolicy       Undefined
   UserPolicy       Undefined
      Process       Undefined
  CurrentUser       Undefined
 LocalMachine       Undefined';
      $htmlOutput = printCopyToClipboardButton($code, '', 'plaintext');
      echo $htmlOutput;
      ?>

      <p>
        Wenn PowerShell verwendet werden soll, kann die Execution Policy
        für den aktuellen Benutzer angepasst werden:
      </p>

      <?php
      $code = 'Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser';
      $htmlOutput = printCopyToClipboardButton($code, '', 'powershell');
      echo $htmlOutput;
      ?>

      <p>Bestätige die Rückfrage mit <code>J</code>.</p>

      <p>Danach noch einmal</p>

      <?php
      $code = 'Get-ExecutionPolicy -List';
      $htmlOutput = printCopyToClipboardButton($code, '', 'powershell');
      echo $htmlOutput;
      ?>

      <p>Dann sollte die Ausgabe jetzt so aussehen:</p>

      <?php
      $code = 'Scope ExecutionPolicy
        ----- ---------------
MachinePolicy       Undefined
   UserPolicy       Undefined
      Process       Undefined
  CurrentUser    RemoteSigned
 LocalMachine       Undefined';
      $htmlOutput = printCopyToClipboardButton($code, '', 'plaintext');
      echo $htmlOutput;
      ?>

      <p>
        Danach VS Code bzw. das Terminal neu starten und prüfen:
      </p>

      <?php
      $code = 'npm -v';
      $htmlOutput = printCopyToClipboardButton($code, '', 'powershell');
      echo $htmlOutput;
      ?>

      <h3 class="h5">Alternative zum Testen</h3>

      <p>
        Ohne Änderung der Execution Policy kann npm auch direkt über
        <code>npm.cmd</code> aufgerufen werden:
      </p>

      <?php
      $code = 'npm.cmd -v';
      $htmlOutput = printCopyToClipboardButton($code, '', 'powershell');
      echo $htmlOutput;
      ?>

    </section>

  </div>


</main>