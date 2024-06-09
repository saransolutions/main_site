<?php
$page = 'about_us';
$count = 0;
$result = array();
$handle = fopen("test.html", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $data = trim(strip_tags($line));
        if (strlen($data) > 0){
            if(!str_contains($data, "#") && !str_contains($data, '"')){
                $result[]=$data;
                #echo $count." ".$data."<br>";
                $count++;
            }
        }
    }

    fclose($handle);
}
$final_list = array_unique($result);
if (count($final_list)>0){
    echo "<html>
    <head>
        <style>
        body {
            color: red;
            font-family: courier, serif;
            font-size: 16px;
        }
        </style>
    </head>
    <body>";
    echo "INSERT INTO lang_table (id, page, button, lang, value)
    VALUES";
    echo "<br>";
    foreach ($final_list as $row ){
        $temp = null;
        $button = preg_replace('/\s+/', '_', $row);
        $button = str_replace('-', '', $button);
        $button = str_replace('.', '', $button);
        if(strlen($button)>20){
            $button = substr($button, 0 , 19);
        }
        if (gettype($row) == "string" && strlen($row) > 1){
            $button = strtolower($button);
            $temp = "\'.val(\'".$page."\', \'".$button."\').\'";
            echo "(NULL, '$page', '$button', 'de', '$row'),
            (NULL, '$page', '$button', 'en', '$row'),
            (NULL, '$page', '$button', 'ta', '$row'),";
            echo "<br>";
        }
    }
    echo ";";
    echo "</body></html>";
}


?>