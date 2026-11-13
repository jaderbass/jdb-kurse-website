<?php
$filePrefix = substr(basename(__FILE__), 0, -8);
$pageTitle = 'XML';
$pageSlogan = 'Die Struktur';
$pageLogo = 'images/xml.svg';
$extensionImage = 'images/html-erweiterungen.webp';
$extensions = array(
  'XML' => array(
    'act' => array(
      'name' => 'Auto Close Tag',
      'autor' => 'Jun Han',
      'desc' => 'Bewirkt, dass bei der Eingabe eines Tags das dazugehörige schließende Tag gleich mit angegeben wird',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag',
      'list-icon' => 'images/act-logo.png'
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
    ),
  ),
);
$snippets = array(
  'XML' => 'jdb-xml.code-snippets'
);
$courseFiles = '<p class="mb-5">Das Kursmaterial bitte von Github herunterladen (grüner Button <kbd class="text-bg-success">&lt;&gt; Code</kbd> <code>&minus;&gt; Download ZIP</code>)!<br><a href="https://github.com/jaderbass/course-xml-template.git" target="_blank">https://github.com/jaderbass/course-xml-template.git</a></p>';

include_once 'template.inc.php';
