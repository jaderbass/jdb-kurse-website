<?php
$snOutput = '';
$snNameOutput = '';
$idx = 0;
foreach ($snippets as $snName => $snFile) {
  $snOutput .= '<code><a href="snippets/' . $snippets[$snName] . '" download>' . $snippets[$snName] . '</a></code>';
  $snNameOutput .= '<code>' . $snippets[$snName] . '</code>';
  $idx++;
  if ($idx < count($snippets)) {
    $snOutput .= ' und ';
    $snNameOutput .= ' bzw. ';
  }
}
$webserverText = '<p>Bisher habe ich, um lokal wie mit einem "echten" Webserver arbeiten zu können XAMPP benutzt. Ein Packet, welches einen komplett aufgesetzten Apache-Webserver mit PHP- und MariaDB-Unterstützung etc. beinhaltet. Leider ist es momentan so, dass die letzte PHP-Version, welche XAMPP unterstützt, nicht mehr aktiv supportet wird.</p><p>Aus diesem Grund nutze ich jetzt <a href="https://laragon.org/" target="_blank">Laragon</a>. Dieses Paket beinhaltet ebenfalls alle wichtigen Tools (u.a. PHP und einen MariaDB-Server) um lokal einen funktionierenden Webserver (Apache) für die Arbeit als Webentwickler durchführen zu können. Das Paket kann unter <a href="https://laragon.org/download/" target="_blank">https://laragon.org/download/</a> heruntergeladen und installiert werden.</p>';


?>
<main id="pageMain">
  <div id="hero" class="text-white">
    <div class="container col-xxl-8 px-4 pt-5">
      <div class="row flex-lg-row-reverse justify-content-center align-items-center g-5 py-5">
        <div class="col-6 col-sm-4 col-lg-3">
          <?php if (isset($pageLogo)) : ?>
            <img src="<?= $pageLogo; ?>" class="page-logo d-block mx-auto img-fluid" alt="<?= $pageTitle; ?> Logo" loading="lazy">
          <?php endif; ?>
        </div>
        <div class="col-lg-9 text-center text-lg-start">
          <h1 class="display-5 fw-bold lh-1 mb-3">
            <?= $pageTitle; ?>
          </h1>
          <p class="lead"><?= isset($pageSlogan) ? $pageSlogan : ''; ?></p>
        </div>
      </div>
    </div>
  </div>


  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-6">

        <h2 id="kursdateien">
          <!-- <img src="images/files-24.png" alt="Icon Kursdateien"> -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" aria-hidden="true" focusable="false" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16h48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16h48v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm48 112c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H128c-8.8 0-16 7.2-16 16zm0 64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H128c-8.8 0-16 7.2-16 16zm-6.3 71.8L82.1 335.9c-1.4 5.4-2.1 10.9-2.1 16.4c0 35.2 28.8 63.7 64 63.7s64-28.5 64-63.7c0-5.5-.7-11.1-2.1-16.4l-23.5-88.2c-3.7-14-16.4-23.8-30.9-23.8H136.6c-14.5 0-27.2 9.7-30.9 23.8zM128 336h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H128c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
          </svg>
          Kursdateien
        </h2>
        <?php if (isset($courseFiles) && is_array($courseFiles) && (!is_null($courseFiles["downloads/$filePrefix"]))) : ?>
          <ul>
            <?php foreach ($courseFiles as $coursePath => $materialInfos) : ?>
              <?php foreach ($materialInfos as $materialInfo) : ?>
                <li>
                  <a href="<?= $coursePath . '/' . $materialInfo['file']; ?>" download>
                    <?= $materialInfo['file']; ?>
                  </a>
                  <small>(<?= $materialInfo['fileSize']; ?> / <?= $materialInfo['changeTime'] ?>)</small>
                </li>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </ul>
        <?php elseif (isset($courseFiles) && is_string($courseFiles)): ?>
          <p><?= $courseFiles ?></p>
        <?php else : ?>
          <p>Für diesen Kurs werden momentan keine zusätzlichen Kursdateien benötigt.</p>
        <?php endif; ?>

        <h2 id="erweiterungen">
          <img src="images/extensions.svg" alt="Icon Erweiterungen">
          Liste der Erweiterungen
        </h2>
        <?php if (isset($extensions)) : ?>
          <?php foreach ($extensions as $extLang => $extList) : ?>
            <h3><?= $extLang; ?></h3>
            <ul style="list-style-type:none;">
              <?php foreach ($extList as $extId => $properties) : ?>
                <li style="background:url(<?= $properties['list-icon'] ?>) no-repeat left top;background-size:65px;padding:0 0 25px 75px;margin-left:-35px;margin-bottom:10px">
                  <a href="<?= $properties['url'] ?>" target="_blank"><?= $properties['name']; ?></a> <small class="text-muted"><i>von <?= $properties['autor']; ?></i></small>
                  <?= $properties['desc']; ?>
                  <?php if (isset($includedExtensions) && array_key_first($includedExtensions) === $extLang): ?>
                    <h6 style="margin-top: 1rem;">In diesem Extension Pack sind enthalten:</h6>
                    <?php foreach ($includedExtensions as $extLang => $extList): ?>
                      <ul style="list-style-type:none;margin-top:10px;">
                        <?php foreach ($extList as $extId => $properties) : ?>
                          <li style="background:url(<?= $properties['list-icon'] ?>) no-repeat left top;background-size:35px;padding:0 0 5px 45px;margin-left:-15px;margin-bottom:5px;font-size:0.75rem;">
                            <a href="<?= $properties['url'] ?>" target="_blank"><?= $properties['name']; ?></a> <small class="text-muted"><i>von <?= $properties['autor']; ?></i></small>
                            <?= $properties['desc']; ?>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="container">
            <?php readfile($content); ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="col-lg-6">
        <?php if ($filePrefix === 'php') : ?>
          <h2 id="notice">
            <img src="images/info.svg" alt="">
            Hinweis
          </h2>
          <p>PHP ist eine serverbasierte Skriptsprache. Um mit PHP entwickeln zu können benötigen wir einen Webserver. Welchen Webserver wir benutzen ist im Grunde egal. Hauptsache ist, dass PHP auf diesem Webserver installiert ist.</p>
          <?= $webserverText; ?>
          <h2 id="executablepath">
            <img src="images/settings-gear.svg" alt="">
            PHP Executable Path einstellen
          </h2>
          <ol>
            <li>über <code><kbd>STRG</kbd> + <kbd>,</kbd></code> die Settings öffnen</li>
            <li>oben rechts auf das kleine Datei-Icon klicken <img src="images/settings-icon.png" alt="settings icon"></li>
            <li>es öffnet sich die Datei <code>settings.json</code></li>
            <li>
              der Eintrag <code class="language-json">"php.validate.executablePath": ""</code> wird ans Ende der Datei <code>settings.json</code> geschrieben. Diesen Eintrag mit dem Pfad der PHP-Erweiterung ergänzen.<br>solltest Du noch <b>XAMPP</b> mit der Standard-Installation nutzen, sieht der komplette Eintrag folgendermaßen aus:

              <?php
              $htmlOutput = printCopyToClipboardButton('"php.validate.executablePath": "c:/xampp/php/php.exe"', 'php', 'json');
              echo $htmlOutput;
              ?>

              Wenn Du <b>Laragon</b> mit der Standard-Installation nutzt, nimmst Du folgenden Eintrag:

              <?php
              $htmlOutput = printCopyToClipboardButton('"php.validate.executablePath": "c:/laragon/bin/php.exe"', 'laragon', 'json');
              echo $htmlOutput;
              ?>

            </li>
          </ol>
        <?php endif; ?>
        <?php if ($filePrefix === 'laravel') : ?>
          <h2 id="notice">
            <img src="images/info.svg" alt="">
            Hinweis
          </h2>
          <p>Laravel ist ein weit verbreitetes PHP-Framework. Für die Entwicklung bringt Laravel einen eigenen Webserver mit.</p>
          <p>Da wir allerdings mit Datenbanken arbeiten und geringe administrative Aufgaben erledigen müssen, sollte ein Datenbank-Server installiert sein.</p>
          <?= $webserverText; ?>
          <h2 id="executablepath">
            <img src="images/settings-gear.svg" alt="">
            PHP Executable Path einstellen
          </h2>
          <ol>
            <li>über <code><kbd>STRG</kbd> + <kbd>,</kbd></code> die Settings öffnen</li>
            <li>oben rechts auf das kleine Datei-Icon klicken <img src="images/settings-icon.png" alt="settings icon"></li>
            <li>
              der Eintrag <code class="language-json">"php.validate.executablePath": ""</code> wird ans Ende der Datei <code>settings.json</code> geschrieben. Diesen Eintrag mit dem Pfad der PHP-Erweiterung ergänzen.<br>solltest Du noch <b>XAMPP</b> mit der Standard-Installation nutzen, sieht der komplette Eintrag folgendermaßen aus:

              <?php
              $htmlOutput = printCopyToClipboardButton('"php.validate.executablePath": "c:/xampp/php/php.exe"', 'php', 'json');
              echo $htmlOutput;
              ?>

              Wenn Du <b>Laragon</b> mit der Standard-Installation nutzt, nimmst Du folgenden Eintrag:

              <?php
              $htmlOutput = printCopyToClipboardButton('"php.validate.executablePath": "c:/laragon/bin/php.exe"', 'laragon', 'json');
              echo $htmlOutput;
              ?>

            </li>
          </ol>
        <?php endif; ?>
        <?php if ($filePrefix === 'react') : ?>
          <h2 id="notice">
            <img src="images/info.svg" alt="">
            Hinweis
          </h2>
          <ul>
            <li>React-Projekte werden mit <strong>Node.js</strong> / <strong>npm</strong> und <strong>Parcel</strong> gestartet.</li>
            <li><strong>Live Server wird für die React-Projekte nicht verwendet.</strong></li>
            <li><code class="language-react">package.json</code> darf bei Parcel-Projekten keinen unnötigen "<code class="language-html">main</code>"-Eintrag enthalten, wenn dieser den Serve-Modus stört.</li>
            <li>Bei Problemen mit <code class="language-plaintext">npm</code> in PowerShell kann unter Windows die <a href="?page=help#winps">Execution Policy</a> eine Rolle spielen.</li>
            <li>Bei einer leeren/starren Anzeige trotz laufendem Parcel kann ein <strong>manuelles Neuladen im Browser</strong> helfen.</li>
            <li><code class="language-plaintext">node_modules</code> gehört <strong>nicht ins Git-Repository</strong>.</li>
          </ul>
        <?php endif; ?>
        <h2 id="snippets">
          <img src="images/settings-gear.svg" alt="">
          Eigene Code-Snippets nutzen
        </h2>
        <p>Ich habe für meine Kurse eigene Code-Snippet-Dateien erstellt, die das Coding erheblich erleichtern. Mit den folgenden Schritten kannst du diese Snippets selbst nutzen:</p>
        <ol>
          <li>Download-Verzeichnis des Browsers ändern:

            <details>
              <summary><img src="../images/firefox.svg" alt="Mozilla Firefox Logo" style="width: 1em;"> Mozilla Firefox</summary>
              <ol>
                <li>Klicken Sie oben rechts auf die drei Linien (Menü).</li>
                <li>Wählen Sie Einstellungen.</li>
                <li>Scrollen Sie im Bereich Allgemein nach unten bis zum Abschnitt Downloads.</li>
                <li>Wählen Sie die Option „Jedes Mal fragen, wo eine Datei gespeichert werden soll“ aus.</li>
              </ol>
            </details>

            <details>
              <summary><img src="../images/chrome.svg" alt="Google Chrome Logo" style="width: 1em;"> Google Chrome</summary>
              <ol>
                <li>Klicken Sie oben rechts auf die drei Punkte (Menü).</li>
                <li>Wählen Sie Einstellungen.</li>
                <li>Klicken Sie in der linken Leiste auf Downloads.</li>
                <li>Aktivieren Sie den Schalter bei „Vor dem Download von Dateien fragen, wo diese gespeichert werden sollen“.</li>
              </ol>
            </details>

            <details>
              <summary><img src="../images/edge.svg" alt="Microsoft Edge Logo" style="width: 1em;"> Microsoft Edge</summary>
              <ol>
                <li>Klicken Sie oben rechts auf die drei Punkte (Menü).</li>
                <li>Wählen Sie Einstellungen.</li>
                <li>Klicken Sie in der linken Leiste auf Downloads.</li>
                <li>Aktivieren Sie den Schalter bei „Vor dem Download fragen, was mit der Datei geschehen soll“.</li>
              </ol>
            </details>

            <details>
              <summary><img src="../images/safari.svg" alt="Apple Safari Logo" style="width: 1em;"> Apple Safari (Mac)</summary>
              <ol>
                <li>Klicken Sie ganz oben links in der Menüleiste auf Safari.</li>
                <li>Wählen Sie Einstellungen (oder Voreinstellungen).</li>
                <li>Bleiben Sie im Reiter Allgemein.</li>
                <li>Suchen Sie den Punkt „Download-Ordner“.</li>
                <li>Klicken Sie auf das Dropdown-Menü und wählen Sie „Jedes Mal fragen“.</li>
              </ol>
            </details>
          </li>

          </li>
          <li>Variante 1 (empfohlen):
            <ul>
              <li>Den folgenden Pfad je nach OS in die Zwischenablage kopieren:
                <ul>
                  <li>
                    <strong>Windows:</strong><br><code>%APPDATA%\Code\User\snippets</code>
                  </li>
                  <li>
                    <strong>Mac:</strong><br><code>~/Library/Application Support/Code/User/snippets/</code>
                  </li>
                  <li>
                    <strong>Linux:</strong><br><code>$HOME/.config/Code/User/snippets/</code> bzw.<br><code>~/.config/Code/User/snippets</code>
                  </li>
                </ul>
              </li>
              <li>Diesen Link klicken um die Snippets-Datei(en) herunterzuladen: <?= $snOutput; ?>.</li>
              <li>In die Adresszeile des Öffnen-Dialogs den kopierten Pfad einfügen und die Snippet-Datei dort speichern.</li>
              <li>Sollte bereits eine Datei <?= $snNameOutput; ?> existieren: diese ersetzen oder:</li>
            </ul>
          </li>
          <li>Variante 2:
            <ul>
              <li>Die Datei(en) in einem Editor öffnen, bzw.</li>
              <li>eine Text-Datei anlegen und unter dem Namen <?= $snNameOutput; ?> im oben genannten Verzeichnis speichern und</li>
              <li>unten stehenden Code in die neue(n) Datei(en) kopieren, bzw. die bestehende(n) Datei(en) nach dem unten stehenden Muster ändern oder:</li>
            </ul>
          </li>
          <li>Variante 3:
            <ul>
              <li>Im VSCode unter <strong>Datei &gt; Einstellungen &gt; Benutzercodeschnipsel konfigurieren</strong> (Windows) bzw. <strong>Code &gt; Einstellungen &gt; Benutzercodeschnipsel konfigurieren</strong> (Mac) eine "Neue globale Codeschnipseldatei..." erstellen und diese z.B. <?= $snNameOutput; ?> benennen.</li>
              <li>Den unten stehenden Code in diese Datei kopieren und speichern.</li>
            </ul>
          </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="container mb-5">
    <h3>Snippets für <?= $pageTitle; ?></h3>
    <?php foreach ($snippets as $snippetLang => $snippetFile) : ?>
      <div class="accordion" id="snippetAccordion<?= substr($snippetLang, 0, 3); ?>">
        <div class="accordion-item">
          <h4 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= substr($snippetLang, 0, 3); ?>" aria-expanded="false" aria-controls="flush-collapse<?= substr($snippetLang, 0, 3); ?>">
              Snippet-Code für <?= $snippetLang; ?>
            </button>
          </h4>
          <div id="flush-collapse<?= substr($snippetLang, 0, 3); ?>" class="accordion-collapse collapse" data-bs-parent="#snippetAccordion<?= substr($snippetLang, 0, 3); ?>">
            <div class="accordion-body">
              <div class="bd-code-snippet">
                <div class="bd-clipboard">
                  <button id="btn_snippets_<?= substr($snippetLang, 0, 3); ?>" class="btn-clipboard">
                    <svg class="bi">
                      <use xlink:href="#clipboard"></use>
                    </svg>
                  </button>
                </div>
                <div class="highlite">
                  <pre><code id="snippets_<?= substr($snippetLang, 0, 3); ?>" class="language-json"><?= loadSnippetsFile(CURRENTDIR . '/snippets/' . $snippetFile); ?></code></pre>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</main>