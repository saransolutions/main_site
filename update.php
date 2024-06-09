<?php
$handle = fopen("test.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $pieces = explode(";", $line);
        $sql = "UPDATE lang_table SET value = '".$pieces[1]."' WHERE id = ".$pieces[0].";";
        echo $sql."<br>";
    }
    fclose($handle);
}
?>