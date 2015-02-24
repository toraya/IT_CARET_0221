<?php
$handle = fopen("sample.csv","r");

while($line = fgets($handle)){
	$result = explode(",", $line);
}
fclose($handle);