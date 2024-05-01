<?php
require_once 'includes/cons.php';
require_once 'includes/db.php';
require_once 'includes/page.php';
session_start();
checkUserLoggedIn();
$profile = array();
$profile["title"]="Customers";
$profile["body-id"]="page-top";
$profile["page-title"]="Customers";
echo get_doc("Customers","our customers");

?>