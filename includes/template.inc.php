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
      <section class="row flex-lg-row-reverse justify-content-center align-items-center g-5 py-5">
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
      </section>
    </div>
  </div>


  <div class="container pt-5">
    <div class="row justify-content-center">
      <section class="col-12">
        
        <!-- ? Kursdateien
        ? ============================================================================================= -->
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

      </section>

      <?php if (in_array($filePrefix, ['php', 'laravel'], true)) : ?>
      <section class="col-12 col-lg-10">

        <div class="alert alert-info" role="alert">
          
          <div>
            
            <h4 class="alert-heading mt-0 text-dark" id="notice">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" class="bi me-2 mt-2 text-dark" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              Hinweis
            </h2>
          <!-- ? Hinweis PHP
          ? ============================================================================================= -->
          <?php if ($filePrefix === 'php') : ?>
            <p>PHP ist eine serverbasierte Skriptsprache. Um mit PHP entwickeln zu können benötigen wir einen Webserver. Welchen Webserver wir benutzen ist im Grunde egal. Hauptsache ist, dass PHP auf diesem Webserver installiert ist.</p>     
          <?php endif; ?>

          <!-- ? Hinweis Laravel
          ? ============================================================================================= -->
          <?php if ($filePrefix === 'laravel') : ?>
            <p>Laravel ist ein weit verbreitetes PHP-Framework. Für die Entwicklung bringt Laravel einen eigenen Webserver mit.</p>
            <p>Da wir allerdings mit Datenbanken arbeiten und geringe administrative Aufgaben erledigen müssen, sollte zusätzlich ein Datenbank-Server installiert sein.</p>
          <?php endif; ?>

          <hr>
            
          <div><?= $webserverText; ?></div>
        </div>
        </div>

      </section>
      <?php endif; ?>

      
      <!-- ? Executable Path
      ? ============================================================================================= -->
      <section class="col-12">
        <?php if (in_array($filePrefix, ['php', 'laravel'], true)) : ?>
          <h2 id="executablepath">
            <img src="images/settings-gear.svg" alt="">
            PHP Executable Path einstellen
          </h2>
          <ol>
            <li>über <code><kbd>STRG</kbd> + <kbd>,</kbd></code> die Settings öffnen</li>
            <li>
              <ul>
                <li>im Suchfeld nach <code>PHP executable path</code> suchen und unter <code><span class="text-muted">PHP > Validate:</span> Executable Path</code> auf den Link <code>Edit in settings.json</code> klicken<br><strong>ODER</strong><br>oben rechts auf das kleine Datei-Icon klicken <img src="images/settings-icon.png" alt="settings icon"></li>
                <li>der Eintrag <code class="language-json">"php.validate.executablePath": ""</code> wird ans Ende der Datei <code>settings.json</code> geschrieben.</li>
              </ul>
            </li>
            <li>Diesen Eintrag mit dem Pfad der PHP-Erweiterung ergänzen.</li>
            
          </ol>
              
            <div class="row justify-content-center">
              <div class="col-md-6">
                Wenn Du <b>Laragon</b> mit der Standard-Installation nutzt, nimmst Du folgenden Eintrag:
                <?php
                $htmlOutput = printCopyToClipboardButton('"php.validate.executablePath": "c:/laragon/bin/php.exe"', 'laragon', 'json');
                echo $htmlOutput;
                ?>
              </div>
              <div class="col-md-6">
                Solltest Du noch <b>XAMPP</b> mit der Standard-Installation nutzen, sieht der komplette Eintrag folgendermaßen aus:
                <?php
                $htmlOutput = printCopyToClipboardButton('"php.validate.executablePath": "c:/xampp/php/php.exe"', 'php', 'json');
                echo $htmlOutput;
                ?>
              </div>
            </div>

        <?php endif; ?>          

        <!-- ? Hinweis React
        ? ============================================================================================= -->
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

      </section>

      <section class="col-12">

        <!-- ? Erweiterungen
        ? ============================================================================================= -->
        <h2 id="erweiterungen">
            <img src="images/extensions.svg" alt="">
            Liste der Erweiterungen
        </h2>

        <?php if (isset($extensions)) : ?>

          <div class="row g-4 mb-5">

            <?php foreach ($extensions as $extLang => $extList) : ?>

            <?php $extListCount = count($extensions[$extLang]); ?>

            <?php
            $categoryClasses = [
              'HTML' => 'extension-html',
              'CSS' => 'extension-css',
              'JavaScript' => 'extension-js',
              'PHP' => 'extension-php',
              'Laravel' => 'extension-laravel',
              'XML' => 'extension-xml',
            ];

            $categoryClass = $categoryClasses[$extLang] ?? 'extension-default';
            ?>

            <?php foreach ($extList as $extId => $properties) : ?>

              <?php
              #echo '<pre>', key_exists('HTML', $extensions), '</pre>';

              $isHtmlPack = $properties['name'] === 'HTML Extension Pack';

              $columnClass = 'col-12 col-md-6 col-xl-4';

              if ($isHtmlPack) {
                  $columnClass = 'col-12 col-md-6 col-xl-6';
              } elseif (array_key_exists('HTML', $extensions) && count($extensions) >= 3) {
                  $columnClass = 'col-12 col-md-6 col-xl-3';
              }
              ?>

              <div class="<?= $columnClass ?>">
                <article class="card h-100 extension-card">

                  <div class="card-header <?= $categoryClass; ?>">
                    <h3 class="h4 mb-0"><?= htmlspecialchars($extLang); ?></h3>
                  </div>
                  <div class="card-body">

                    <!-- Erweiterung: Logo, Name, Autor und Kategorie -->
                    <div class="d-flex align-items-start gap-3 mb-3">

                      <img
                          src="<?= htmlspecialchars($properties['list-icon']); ?>"
                          class="extension-icon"
                          alt=""
                          loading="lazy"
                      >

                      <div>
                        <h3 class="card-title h6 mb-1">
                          <a
                              href="<?= htmlspecialchars($properties['url']); ?>"
                              target="_blank"
                              rel="noopener noreferrer"
                          >
                            <?= htmlspecialchars($properties['name']); ?>
                          </a>
                        </h3>

                        <small class="d-block text-muted">
                          von <?= htmlspecialchars($properties['autor']); ?>
                        </small>
                      </div>

                    </div>

                    <!-- Beschreibung -->
                    <div class="card-text">
                      <?= $properties['desc']; ?>
                    </div>

                    <!-- Enthaltene Erweiterungen eines Extension Packs -->
                    <?php if (
                        isset($includedExtensions)
                        && array_key_first($includedExtensions) === $extLang
                    ) : ?>

                    <details class="extension-included mt-3 pt-3 border-top">

                      <summary>
                        Enthaltene Erweiterungen anzeigen
                      </summary>

                      <div class="mt-3">

                        <?php foreach ($includedExtensions as $includedLang => $includedList) : ?>

                          <?php foreach ($includedList as $includedId => $includedProperties) : ?>

                            <div class="d-flex align-items-start gap-2 mb-3">

                              <img
                                src="<?= htmlspecialchars($includedProperties['list-icon']); ?>"
                                class="extension-icon-small"
                                alt=""
                                loading="lazy"
                              >

                              <div>
                                <a
                                  href="<?= htmlspecialchars($includedProperties['url']); ?>"
                                  target="_blank"
                                  rel="noopener noreferrer"
                                >
                                  <?= htmlspecialchars($includedProperties['name']); ?>
                                </a>

                                <small class="d-block text-muted">
                                  von <?= htmlspecialchars($includedProperties['autor']); ?>
                                </small>

                                <div class="extension-description-small">
                                  <?= $includedProperties['desc']; ?>
                                </div>
                              </div>

                            </div>

                          <?php endforeach; ?>

                        <?php endforeach; ?>

                      </div>

                    </details>

                    <?php endif; ?>

                  </div>

                </article>
              </div>

              <?php endforeach; ?>

            <?php endforeach; ?>

          </div>

        <?php else : ?>

            <div class="container">
                <?php readfile($content); ?>
            </div>

        <?php endif; ?>
      
 
      </section>
    </div>

    <div class="row">
      <div class="col-12">
      

        <!-- ? Code-Snippets Erläuterung
        ? ============================================================================================= -->
        <h2 id="snippets">
          <img src="images/settings-gear.svg" alt="">
          Eigene Code-Snippets nutzen
        </h2>
        <p>Ich habe für meine Kurse eigene Code-Snippet-Dateien erstellt, die das Coding erheblich erleichtern. Mit den folgenden Schritten kannst du diese Snippets selbst nutzen:</p>
        <ol class="first-level">

          <li><strong>Variante (empfohlen):</strong>
            <ul>
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
              <li>Den folgenden Pfad je nach OS in die Zwischenablage kopieren:
                <ul>
                  <li>
                    <strong>Windows:</strong> <code>%APPDATA%\Code\User\snippets</code>
                  </li>
                  <li>
                    <strong>Mac:</strong> <code>~/Library/Application Support/Code/User/snippets/</code>
                  </li>
                  <li>
                    <strong>Linux:</strong> <code>$HOME/.config/Code/User/snippets/</code> bzw. <code>~/.config/Code/User/snippets</code>
                  </li>
                </ul>
              </li>
              <li>Diesen Link klicken um die Snippets-Datei(en) herunterzuladen: <?= $snOutput; ?>.</li>
              <li>In die Adresszeile des Öffnen-Dialogs den kopierten Pfad einfügen und die Snippet-Datei dort speichern.</li>
              <li>Sollte bereits eine Datei <?= $snNameOutput; ?> existieren; diese ersetzen.</li>
            </ul>
          </li>
          <li><strong>Variante:</strong>
            <ul>
              <li>Die Datei(en) in einem Editor öffnen, bzw.</li>
              <li>eine Text-Datei anlegen und unter dem Namen <?= $snNameOutput; ?> im oben genannten Verzeichnis speichern und</li>
              <li>unten stehenden Code in die neue(n) Datei(en) kopieren, bzw. die bestehende(n) Datei(en) nach dem unten stehenden Muster ändern oder:</li>
            </ul>
          </li>
          <li><strong>Variante:</strong>
            <ul>
              <li>Im VSCode unter <code>Datei &gt; Einstellungen &gt; Benutzercodeschnipsel konfigurieren</code> (Windows/Linux) bzw. <code>Code &gt; Einstellungen &gt; Benutzercodeschnipsel konfigurieren</code> (Mac) eine "Neue globale Codeschnipseldatei..." erstellen und diese z.B. <?= $snNameOutput; ?> benennen.<br>
              In der englischen Version: <code>File &gt; Preferences &gt; Configure User Snippets</code> (Windows/Linux) bzw. <code>Code &gt; Settings &gt; Configure User Snippets</code> (Mac).</li>
              <li>Den unten stehenden Code in diese Datei kopieren und speichern.</li>
            </ul>
          </li>
          <li><strong>Variante:</strong>
            <ul>
              <li>Die Tastenkombination <kbd>Strg / Cmd</kbd> + <kbd>Shift</kbd> + <kbd>P</kbd> drücken um die Befehlspalette zu öffnen.</li>
              <li>Im Suchfeld <code>Snippets</code> eingeben.</li>
              <li>Den Befehl <code>Einstellungen: Benutzersnippets konfigurieren</code> bzw. auf Englisch <code>Preferences: Configure User Snippets</code> auswählen.</li>
            </ul>
          </li>
        </ol>
      </div>
    </div>
  </div>

  <!-- ? Snippets-Codes
  ? ============================================================================================= -->
  <section class="container my-5">
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
  </section>

</main>