<?php 
require_once 'funcs/cons.php';
require_once 'funcs/page.php';

session_start();
change_lang();
$profile = array();
$profile['page'] = 'about_us';
echo get_doc($profile);
?>
