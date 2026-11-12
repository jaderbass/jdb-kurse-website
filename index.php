<?php
require_once 'jdb-config.php';
if( DEBUG_MODE ) {
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');
}
require_once 'includes/functions.inc.php';
include_once 'includes/header.inc.php';

if( MAINTENANCE_MODE ) {
  include_once 'includes/maintenance.inc.php';
} else {
  include_once 'includes/main.inc.php';
  include_once 'includes/nav.inc.php';
  include_once 'includes/footer.inc.php';
}

