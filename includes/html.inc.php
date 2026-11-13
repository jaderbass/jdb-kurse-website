<?php
$filePrefix = substr(basename(__FILE__), 0, -8);
$pageTitle = 'HTML5 / CSS3';
$pageSlogan = 'Das Fundament';
$pageLogo = 'images/html-css-logos.png';
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
  'HTML / CSS' => 'jdb-html.code-snippets'
);
// $courseFiles = getCourseFiles($filePrefix);
$courseFiles = '<p>Das Kursmaterial bitte von Github herunterladen (grüner Button <kbd class="text-bg-success">&lt;&gt; Code</kbd> <code>&minus;&gt; Download ZIP</code>)!</p>
  <ol class="mb-5">
    <li>HTML <a href="https://github.com/jaderbass/typescript-course-2027.git" target="_blank">https://github.com/jaderbass/course-html-template.git</a></li>
    <li>Flexbox <a href="https://github.com/jaderbass/typescript-course-2027.git" target="_blank">https://github.com/jaderbass/course-flexbox-template.git</a></li>
    <li>Grid <a href="https://github.com/jaderbass/typescript-course-2027.git" target="_blank">https://github.com/jaderbass/course-grid-template.git</a></li>
    <li>Sass <a href="https://github.com/jaderbass/typescript-course-2027.git" target="_blank">https://github.com/jaderbass/course-sass-template.git</a></li>
    <li>Bootstrap <a href="https://github.com/jaderbass/typescript-course-2027.git" target="_blank">https://github.com/jaderbass/course-bootstrap-template.git</a></li>
  </ol>';

include_once 'template.inc.php';
