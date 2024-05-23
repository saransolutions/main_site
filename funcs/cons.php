<?php
define("MAIN_TITLE", "Saran Solutions");
define("MAIN_ADDRESS", "Wannersmattweg 10H");
define("MAIN_CITY", "3250, Lyss");
define("MAIN_PHONE", "+41 77 944 51 92");
define("MAIN_EMAIL", "info@saransolutions.ch");
function get_language_table(){
    $dir_name = 'content';
    $dir_path = getcwd().'/'.$dir_name;
    $json_string = null;
    $files = array_diff(scandir($dir_path), array('..', '.'));
    $count = 0;
    foreach ($files as $file) {
        $name = basename($file);
        if (str_ends_with($name, '.json')){
            $file_name = $dir_path.'/'.$file;
            if ($count == 0){
                $json_string = file_get_contents($file_name);
            }else {
                $json_string .= ','.file_get_contents($file_name);
            }
            $count += 1;
        }
    }
    if ($count > 0 ){
        $data = '['.$json_string.']';
    }
    return json_decode($data, true);
}

define("LANG_TABLE", get_language_table());

?>
