<?php
$points = [64,76,58,72,48];
$handle = fopen("output_2.txt","w");

for($i = 0; $i < count($points); $i++){
	fwrite($handle,$points[$i].PHP_EOL);
}
fclose($handle);