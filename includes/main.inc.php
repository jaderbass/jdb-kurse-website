<?php
if (!empty($_GET)) {
    $page = $_GET['page'];
    include "includes/$page.inc.php";
} else {
    include 'includes/home.inc.php';
}
