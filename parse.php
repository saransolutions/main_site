<?php
include_once('simple_html_dom.php');
$url = 'http://localhost:90/saransolutions/home.php?lang=en';
$html = file_get_html($url);

// Find all images

#$divs =  $html->find('body', 0)-> plaintext;
#echo $divs;
$body = $html->find('body');
$count = 0;
foreach($body as $row){
       $divs = $row->find('div');
       foreach ($divs as $div){
              $div_count = count($div->children());
              if ($div_count > 0 ){
                     foreach ($div->children() as $child){
                            $child_tag = $child->tag;
                            $child_text = trim($child->innertext);
                            $child_text = strip_tags($child_text);
                            if ($child_tag != 'style' && strlen($child_text) > 0){
                                   #echo "l1 > child tag is ".$child_tag." text ".$child_text." parent ".$child->parent()->tag."<br>";
                                   echo "";
                            }
                            $cell_count = count($child->children());
                            if ($cell_count > 0 ){
                                   
                                   foreach ($child -> children() as $cell){
                                          $cell_tag = $cell->tag;
                                          $cell_text = trim($cell->innertext);
                                          $cell_text = strip_tags($cell_text);
                                          if ($cell_tag != 'style' && $cell_tag != 'div' && $cell_tag != 'ul' && $cell_text != null && strlen(trim($cell_text)) > 0){
                                                 echo $count." ".$cell_tag." ".$cell_text."<br>";
                                                 $count++;
                                          }
                                   }
                            }
                            
                     }
              }
       }
}

// $myDiv = $body->find('div'); // wherever your the div you're ending up with is
// $children = $myDiv->children; // get an array of children
// foreach ($children AS $child) {
//        echo "<br>";
//     echo $child->outertext; // This removes the element, but MAY NOT remove it from the original $myDiv
// }

