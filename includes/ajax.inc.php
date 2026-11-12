<?php
$filePrefix = substr(basename(__FILE__), 0, -8);
$pageTitle = 'AJAX';
$pageSlogan = 'Der Schnelle';
$pageLogo = 'images/AJAX-logo.png';
$extensionImage = 'images/html-erweiterungen.webp';
$extensions = array(
  'HTML' => array(
    'jdbhtml' => array(
      'name' => 'HTML Extension Pack',
      'autor' => 'JAderBass',
      'desc' => 'Extension Pack für die JAderBass web\'n\'more HTML/CSS-Kurse',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=jaderbass.jdb-html-extension-pack',
      'list-icon' => 'images/jdb-html-icon.png'
    )
  ),
);
$includedExtensions = array(
  'HTML' => array(
    'act' => array(
      'name' => 'Auto Close Tag',
      'autor' => 'Jun Han',
      'desc' => 'Bewirkt, dass bei der Eingabe eines Tags das dazugehörige schließende Tag gleich mit angegeben wird',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag',
      'list-icon' => 'images/act-logo.png'
    ),
    'ap' => array(
      'name' => 'Autoprefixer',
      'autor' => 'mrmlnc',
      'desc' => 'Fügt automatisch die eingestellten Vendor-Prefixe für CSS-Regeln hinzu',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=mrmlnc.vscode-autoprefixer',
      'list-icon' => 'images/ap-logo.png'
    ),
    'bc' => array(
      'name' => 'Better Comments',
      'autor' => 'Aaron Bond',
      'desc' => 'Macht verschiedenfarbige Kommentare möglich',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=aaron-bond.better-comments',
      'list-icon' => 'images/bc-icon.png'
    ),
    'hcs' => array(
      'name' => 'HTML CSS Support',
      'autor' => 'ecmel',
      'desc' => 'Bewirkt HTML-<code>class</code> und -<code>id</code> Attribut-Vervollständigung',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=ecmel.vscode-html-css',
      'list-icon' => 'images/css3.png'
    ),
    'hl' => array(
      'name' => 'HTML End Tag Labels',
      'autor' => 'Ante Primorac',
      'desc' => 'Blendet an End-Tags die ID- und Klassenbezeichnungen ein, um den Code übersichtlicher zu gestalten',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=anteprimorac.html-end-tag-labels',
      'list-icon' => 'images/hl-logo.png'
    )
  ),
);
$snippets = array(
  'HTML / CSS' => 'jdb-html.code-snippets',
  'JavaScript' => 'jdb-js.code-snippets',
  'AJAX' => 'jdb-ajax.code-snippets'
);
$courseFiles = 'Das Kursmaterial bitte von Github klonen: <a href="https://github.com/jaderbass/ajax-jquery-course-start" target_"_blank">https://github.com/jaderbass/ajax-jquery-course-start</a>';

include_once 'template.inc.php';
