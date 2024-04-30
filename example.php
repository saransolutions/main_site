<?php
$name='www.saranInfosolutions.in';
$ip = gethostbyname($name);

if(is_numeric($ip)){
	echo $name." is available ";
}else{
	echo $name." is not available ";
}


?>