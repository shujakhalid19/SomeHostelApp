<?php
$str = file_get_contents('states.json');
$json = json_decode($str, true);
$len=sizeof($json['countries']);
//print_r($json['countries']);


/*


if($json[0]['countries']=="Albania") {
	print_r($json['countries']);
}
?>*/
$cn="";
for ($i=0; $i<$len ; $i++) { 
	$cn=$json['countries'][$i]['country'];
	if ($cn=="India") {
		print_r($json['countries'][$i]['states']);
	}
}
/*foreach ($json as $j) {
	//print_r($j[0]['country']);
	echo 
}*/