<?php
$filePrefix = substr(basename(__FILE__), 0, -8);
$pageTitle = 'TypeScript';
$pageSlogan = 'Der Strenge';
$pageLogo = 'images/ts-logo-128.svg';
// $extensionImage = 'images/html-erweiterungen.webp';
$extensions = array(
  'TS' => array(
    'coding' => array(
      'name' => 'Coding Tools Extension Pack',
      'autor' => 'Franneck94',
      'desc' => 'Allgemeines Coding-Package',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=franneck94.vscode-coding-tools-extension-pack',
      'list-icon' => 'images/act-logo.png'
    ),
    'tse' => array(
      'name' => 'TypeScript Extension Pack',
      'autor' => 'Franneck94',
      'desc' => 'Package für das Coding mit TypeScript',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=franneck94.vscode-typescript-extension-pack',
      'list-icon' => 'images/ap-logo.png'
    ),
  ),
);
$snippets = array(
  'HTML / CSS' => 'jdb-html.code-snippets',
  'JavaScript' => 'jdb-js.code-snippets'
);
$courseFiles = getCourseFiles($filePrefix);

include_once 'template.inc.php';
