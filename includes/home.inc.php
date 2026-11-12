<?php
$filePrefix = '/';
$pageTitle = 'Kurse';
$extensions = array(
  'Allgemein' => array(
    'pm' => array(
      'name' => 'Project Manager',
      'autor' => 'Allessandro Fragnani',
      'desc' => 'damit kann man komfortabel zwischen Projekten wechseln',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=alefragnani.project-manager',
      'list-icon' => 'images/pm-logo.png',
    ),
    'ls' => array( 
      'name' => 'Live Server',
      'autor' => 'Ritwick Dey',
      'desc' => '<span class="font-sm">optional</span><br>komfortable Sofort-Ansicht des geschriebenen Codes im Browser (für den PHP-Kurs bitte nicht benutzen!)',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer',
      'list-icon' => 'images/ls-logo.png',
    ),
    'sftp' => array(
      'name' => 'SFTP',
      'autor' => 'Natizyskunk',
      'desc' => '<span class="font-sm">optional</span><br>Zugang zum Webserver direkt aus VS Code mit komfortabler Synchronisations-Möglichkeit',
      'url' => 'https://marketplace.visualstudio.com/items?itemName=Natizyskunk.sftp',
      'list-icon' => 'images/sftp-logo.png',
    ),
  ),
);
include_once 'template-home.inc.php';
?>
