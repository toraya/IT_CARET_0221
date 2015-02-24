<?php
$handle = fopen("sample.csv","r");

while($line = fgets($handle)){
	$result = explode(",", $line);
	if($result[1] == 22){
		echo $result[0].",".$result[1].",".$result[2];
	}
}
fclose($handle);