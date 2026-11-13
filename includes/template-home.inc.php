<main id="pageMain" class="mb-5">

  <div id="hero" class="text-center text-white">
    <div class="container px-4 py-5">
      <div class="row pt-5">
        <h1 class="display-5 fw-bold"><?= $pageTitle; ?></h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Für meine Web-Developer-Kurse findet Ihr hier Kurs&minus;Material <br>und das Visual Studio Setup.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col col-md-10">
        <h2 id="vscodesetup" class="mt-5">Grundlegendes VSCode-Setup</h2>
        <p>Ich nutze zum Coden den <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code Editor von Microsoft</a>. <br>Mit seinen vielen Erweiterungen und Hilfen ein excellenter Code-Editor für das Web-Development.</p>
        <p>Falls Du den Visual Studio Code Editor nicht installieren willst oder kannst,<br>dann gibt es noch die Möglichkeit, diesen "on the Web" unter der URL <a href="https://vscode.dev/" target="_blank">https://vscode.dev/</a> zu nutzen.</p>
      </div>
    </div>

    <div class="row justify-content-center mb-5 g-5">
      <div class="col col-md-10">
        <h3 id="themes">
          <img src="images/color-designs.svg" alt="">
          Meine genutzten Editor-Themes
        </h3>
        <p>Für die Coding-Aufgaben auf meinem Entwicklungsrechner nutze ich das Theme <strong>"Andromeda"</strong> von Eliver Lara. </p>
        <p>Für meine Präsenz-Kurse nutze ich das Theme <strong>"Light&nbsp;2026"</strong> von VS Code. Ich nutze dieses Light-Theme, da es auf dem Beamer für die Teilnehmer besser funktioniert als ein Dark-Theme.</p>
        <p>Für den XML-Kurs nutze ich das Theme <strong>"Atom-One-Light"</strong> von Mahmoud Ali, da hier die XML-Syntax ein wenig besser hervorgehoben wird.</p>

        <div class="row g-4 mb-5">
          <div class="col-12 col-md-6 col-xl-4">
            <article class="card h-100 extension-card">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <img src="../images/andromeda-icon.png" alt="" class="extension-icon" loading="lazy">
                  <div>
                    <h3 class="card-title h6 mb-1"><a href="https://marketplace.visualstudio.com/items?itemName=EliverLara.andromeda" target="_blank" rel="noopener noreferrer">Andromeda</a></h3>

                    <small class="d-block text-muted"> von Eliver Lara</small>
                  </div>

                </div>

                <!-- Beschreibung -->
                <div class="card-text">auf meinem Entwicklungs-Rechner für das eigene Coding</div>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <article class="card h-100 extension-card">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <img src="../vc-fav/favicon.ico" alt="" class="extension-icon" loading="lazy">
                  <div>
                    <h3 class="card-title h6 mb-1">Light 2026</h3>

                    <small class="d-block text-muted"> von Microsoft</small>
                  </div>
                </div>

                <!-- Beschreibung -->
                <div class="card-text">für meine Präsenz-Kurse</div>
              </div>
            </article>
          </div>
          <div class="col-12 col-md-6 col-xl-4">
            <article class="card h-100 extension-card">
              <div class="card-body">
                <div class="d-flex align-items-start gap-3 mb-3">
                  <img src="../images/atom-one-light-icon.png" alt="" class="extension-icon" loading="lazy">
                  <div>
                    <h3 class="card-title h6 mb-1"><a href="https://marketplace.visualstudio.com/items?itemName=akamud.vscode-theme-onelight" target="_blank" rel="noopener noreferrer">Atom One Light</a></h3>

                    <small class="d-block text-muted"> von Mahmoud Ali</small>
                  </div>

                </div>

                <!-- Beschreibung -->
                <div class="card-text">für meine XML-Präsenz-Kurse</div>
              </div>
            </article>
          </div>
        </div>

      </div>

      <div class="col col-md-10">
        <h3 id="ext">
          <img src="images/extensions.svg" alt="">
          Liste der Erweiterungen
        </h3>
        <p>Meine Standard-Erweiterungen für alle Kurse. Die speziellen Erweiterungen für die einzelnen Kurse findet ihr auf der entsprechenden Kurs-Seite.</p>

        <div class="row g-4 mb-5">

        <?php foreach ($extensions as $extLang => $extList) : ?>
            <?php foreach ($extList as $extId => $properties) : ?>
              <div class="col-12 col-md-6 col-xl-4">
                <article class="card h-100 extension-card">
                  <div class="card-body">
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
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
        <?php endforeach; ?>

        </div>
        <h4>Erweiterungen installieren</h4>
        <ul>
          <li>Klicke in der linken Navigationsleiste auf das Erweiterungen-Icon. Es ist das Icon mit den 4&nbsp;Quadraten, wie oben an der Überschrift "Liste der Erweiterungen", oder nutze die Tastenkombination <kbd>STRG</kbd> + <kbd>Shift</kbd> + <kbd>X</kbd> um das Erweiterungen-Tab zu öffnen.</li>
          <li>Schreibe in das Suchfeld den Namen der Erweiterung. Meistens reichen die ersten Buchstaben, um die Liste so zu filtern, dass die entsprechende Erweiterung schnell zu finden ist.</li>
          <li>Klicke auf "Installieren"</li>
          <li>Fertig</li>
        </ul>
      </div>
    </div>

    <div class="row justify-content-center g-5">
      <div class="col col-md-10">
        <h3 id="emmetvariablen">
          <img src="images/emmet-logo-sw-fill.svg" alt="">
          Emmet-Variablen einstellen
        </h3>
        <p>VS Code nutzt Emmet, um das Schreiben von HTML-, XML- und CSS-Code zu erleichtern. Wenn man damit über das Tastaturkürzel <kbd>!</kbd> das HTML5-Grundgerüst erstellen lässt, stellt Emmet das <code>lang</code>-Attribut des <code>html</code>-Tags auf englisch (<code>"en"</code>) ein. Um Emmet anzuweisen bei diesem Attribut <code>"de"</code> als Wert einzustellen sind folgende Schritte durchzuführen:</p>
        <ol>
          <li>über <code><kbd>STRG</kbd> + <kbd>,</kbd></code> die Settings öffnen</li>
          <li>oben rechts auf das kleine Datei-Icon klicken <img src="images/settings-icon.png" alt="settings icon"></li>
          <li>es öffnet sich die Datei <code>settings.json</code></li>
          <li>folgenden Code zwischen die beiden existierenden geschweiften Klammern schreiben:<br><strong>Hinweis:<br>Die kopierten geschweiften Klammern müssen mit in die bereits vorhandenen geschweiften Klammern eingesetzt werden!<br>Sollten dort bereits Einträge gemacht worden sein muss hinter dem letzten Eintrag ein <code><kbd>,</kbd></code> gesetzt und darunter der Code geschrieben werden</strong></li>
        </ol>

        <?php
        $code = '"emmet.variables": {
  "lang": "de"
}';
        $htmlOutput = printCopyToClipboardButton($code, 'emmet', 'json');
        echo $htmlOutput;
        ?>

      </div>

      <div class="col col-md-10">
        <h3 id="editorfont">
          <img src="images/settings-gear.svg" alt="">
          Fira Code als Editor-Schriftart
        </h3>
        <p>Als Editor-Schriftart benutze ich <code>Fira Code</code>. Diese Schriftart wurde mit sog. Ligaturen angelegt, die bestimmte Zeichen etwas "schöner" darstellen.</p>
        <ol>
          <li>Die Schriftart Fira Code unter <a href="https://github.com/tonsky/FiraCode" download>GitHub</a> herunterladen, das ZIP-Archiv entpacken und die TTF-Schriftarten (alle) installieren (Rechts-Klick auf die ausgewählten Schriftarten und auf "installieren" klicken).</li>
          <li>Visual Studio Code öffnen.</li>
          <li>über <code><kbd>STRG</kbd> + <kbd>,</kbd></code> die Settings öffnen</li>
          <li>im Suchfeld "font" eingeben (ohne Anführungszeichen)</li>
          <li>sicherstellen, dass das Register "Benutzer" aktiv ist</li>
          <li>unter der Einstellung <code><span class="text-muted">Editor:</span> Font Family</code> in das Formularfeld "Fira Code" (ohne Anführungszeichen) eingeben.</li>
          <li>dann oben rechts auf das kleine Datei-Icon klicken <img src="images/settings-icon.png" alt="settings icon"></li>
          <li>folgenden Code zwischen die beiden existierenden geschweiften Klammern schreiben:<br>
            <strong>Hinweis: <br>
              Sollten dort bereits Einträge gemacht worden sein muss hinter dem letzten Eintrag ein <code><kbd>,</kbd></code> gesetzt und darunter der Code geschrieben werden</strong>
          </li>
        </ol>

        <?php
        $code = '"editor.fontFamily": "Fira Code",
"editor.fontLigatures": true';
        $htmlOutput = printCopyToClipboardButton($code, 'fira', 'json');
        echo $htmlOutput;
        ?>

      </div>
    </div>
      

    <div class="row justify-content-center g-5">
        <div class="col col-md-10">
          <h3 id="mySettings">
            <img src="images/settings-gear.svg" alt="">
            Meine bevorzugten Einstellungen
          </h3>
          <p>Es gibt im VSCode einige Einstellungen, die ich sinnvoll finde.</p>
          <p>Wenn ihr ebenfalls diese Einstellungen nutzen möchtet geht folgendermaßen vor:</p>
          <ul>
            <li>Öffnet mit <code><kbd>STRG</kbd> + <kbd>,</kbd></code> die Einstellungen</li>
            <li>Sucht im Suchfeld oben nach der angegebenen Einstellung und stellt sie entsprechend ein.</li>
          </ul>
          <h4>Schriftgröße ändern</h4>
          <p>Wie die Schriftart geändert wird, habe ich bereits im vorigen Kapitel beschrieben. Dort kann man auch die Schriftgröße festlegen. Meiner Meinung nach ist die Standardgröße von 14px für die Fehlersuche zu klein. Ich stelle die Schrift im der Regel auf <b>18px</b> um. Dann sind Fehler, besonders bei kleinen Zeichen wie Punkt, Komma etc. besser zu erkennen.</p>
          <p>Im Folgenden nun weitere Einstellungen:</p>
          <h4>Auto Save</h4>
          <p>Dazu habe ich bei mir die Einstellung <b>"<span class="text-secondary">Editor:</span> Auto Save"</b> auf <code>"afterDelay"</code> eingestellt, so dass ich nicht ständig <code><kbd>STRG</kbd> + <kbd>S</kbd></code> drücken muss um meine Änderungen zu speichern.</p>
          <p>Alternativ kann man hier auch den Wert <code>"onFocusChange"</code> nutzen. Dann wird gespeichert, wenn die Datei den Fokus verliert.</p>
          <h4>Zeilenumbruch</h4>
          <p>Die Code-Zeilen im Editor machen keinen automatischen Zeilenumbruch. Das ist unter Umständen hinderlich. Hier hilft einmal die Tastenkombination <code><kbd>ALT</kbd> + <kbd>Z</kbd></code>, welche die Zeilenumbruch aktiviert bzw. deaktiviert. Allerdings muss das bei jeder Datei einzeln eingestellt werden. Man kann dies über die Einstellungen allerdings auch global festlegen. Dazu müsst ihr die Einstellung <b>"<span class="text-secondary">Editor:</span> Word Wrap"</b> (bitte nicht die Einstellung "<b>Diff</b> <span class="text-secondary">Editor:</span> Word Wrap"!) auf <code>"on"</code> stellen.</p>
          <h4>Format On Save</h4>
          <p>Ebenfalls sehr hilfreich finde ich die Einstellung <b>"<span class="text-secondary">Editor:</span> Format On Save"</b>. Hierzu müsst ihr die Checkbox dort aktivieren. Bitte nicht verwechseln mit "<span class="text-secondary">Editor:</span> Format On Save <b>Mode</b>"!</p>
          <h4>Auto Rename Tag</h4>
          <p>Diese Einstellung sorgt dafür, dass bei einer Änderung der Tag-Bezeichnung im Start-Tag das End-Tag automatisch mit geändert wird. Für diese Einstellung gab es früher die gleichnamige Erweiterung.</p>
          <p>Seit Kurzem ist dies in VSCode installiert. Man kann diese Einstellung unter dem Suchwort <b><span class="text-secondary">Editor:</span> Linked Editing</b> in den Einstellungen finden und muss dort die Checkbox aktivieren.</p>

        </div>
        <div class="col col-md-10">
          <h3 id="shortcodes">
            <img src="images/settings-gear.svg" alt="">
            Eigene Tastenkombinationen erstellen
          </h3>
          <p>VSCode bringt jede Menge Tastenkombinationen mit. Sehr hilfreich finde ich z.B. die Tastenkombinationen <code><kbd>ALT</kbd> + <kbd>Shift</kbd> + <kbd>&uarr;</kbd></code> bzw. <code><kbd>&darr;</kbd></code>. Hiermit lässt sich die Zeile, in welcher der Cursor steht bzw. eine komplette Auswahl mehrerer Zeilen ganz einfach duplizieren.</p>
          <p>Ebenfalls dazu gehören die Tastenkombinationen <code><kbd>ALT</kbd> + <kbd>&uarr;</kbd></code> bzw. <code><kbd>&darr;</kbd></code>. Mit diesen kann man Zeilen bzw. ganze Auswahlen vertauschen.</p>
          <p>Aber VSCode stellt in Zusammenspiel mit dem Emmet-Plugin, welches standardmäßig in VSCode eingebaut ist, einen meiner Meinung nach sehr mächtigen Befehl zur Verfügung: "Mit Abkürzung umschließen". Dieser ist allerdings aktuell weder im Menü zu finden noch gibt es ihn als Tastenkombination. Gut nur, dass man eigene Tastenkombinationen hinzufügen kann.</p>
          <p>Was macht aber diese Einstellung? Man kann damit Worte, Wortgruppen oder ganze HTML-Element-Strukturen markieren und dann um diese Markierung ein umschließendes HTML-Tag oder sogar verschachtelte HTML-Tags herumlegen. Ich möchte dies bei meiner täglichen Arbeit nicht mehr missen.</p>
          <p>Wie erzeugt ihr nun eine eigene Tastenkombination? Hier die Anleitung:</p>
          <ul>
            <li>Öffnet über <b>Einstellungen > Tastenkombinationen</b> bzw. <b>Zahnrad > Tastenkombinationen</b> oder <code><kbd>STRG</kbd> + <kbd>K</kbd> <kbd>STRG</kbd> + <kbd>S</kbd></code> die Tabelle der Tastenkombinationen.</li>
            <li>Gebt in der Suchleiste oben z.B. den Begriff <code>"Wrap"</code> ein und findet in der gefilterten Ansicht die Zeile <b>"Emmet: Mit Abkürzung umschließen"</b> bzw. <b>"Wrap with Abbreviation"</b>.</li>
            <li>Klickt mit der Maus auf das <code><span style="font-size:1.5em;">+</span></code>-Symbol links neben der Bezeichnung. Daraufhin öffnet sich in der Mitte der Tabelle ein Textfeld.</li>
            <li>Drückt nun auf der Tastatur die gewünschte Tastenkombination. Diese wird in dem Textfeld angezeigt. Sollte sie bereits belegt sein gibt VSCode einen Hinweis aus. Bei mir war die Kombination <code><kbd>STRG</kbd> + <kbd>ALT</kbd> + <kbd>T</kbd></code> (wie Tag) noch frei und gut zu merken.</li>
            <li>Nun alles mit <code><kbd>ENTER</kbd></code> bestätigen, fertig.</li>
          </ul>
          <p>Probiert es mal aus, es ist echt easy.</p>
          <p>Übrigens habe ich hier diese ganzen Textauszeichnungen mit dieser Tastenkombination geschrieben. Ohne diese hätte das Ganze sicher die doppelte Zeit in Anspruch genommen und wäre viel fehleranfälliger gewesen.</p>
          <p>Auch die benutzerdefinierten Tastenkombinationen werden bei VSCode in einer JSON-Datei gespeichert. Hiermit kann man seine eigenen Tastenkombinationen komfortabel sichern. Diese Datei könnt ihr direkt in VSCode öffnen, indem Ihr die Tastenkombi STRG + P drückt und in das geöffnete Suchfeld "keybindings.json" eingebt.</p>
          <p>Alternativ könnt ihr hier meine <code><a href="keybindings/keybindings.json" download>keybindings.json</a></code> herunterladen und in das Verzeichnis <code>%APPDATA%\Code\User</code> speichern. Sollte in diesem Verzeichnis bereits eine solche Datei existieren, dann öffnet sie in VSCode, setzt ein Komma hinter die bestehende geschweifte Klammer und fügt den folgenden Code (ohne die eckigen Klammern) dort ein:</p>

          <?php
          $code = '[
  {
    "key": "ctrl+alt+t",
    "command": "editor.emmet.action.wrapWithAbbreviation"
  }
]';
          $htmlOutput = printCopyToClipboardButton($code, 'keybindings', 'json');
          echo $htmlOutput;
          ?>

      </div>
    </div>

</main>