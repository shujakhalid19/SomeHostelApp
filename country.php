<?php
$str = file_get_contents('places.json');
$json = json_decode($str, true);
echo $len=sizeof($json);

print_r($json);
/*
$cn="";
for ($i=0; $i<$len ; $i++) { 
	$cn=$json['countries'][$i]['country'];
	echo $ch."<nr/>";
}*/

?>