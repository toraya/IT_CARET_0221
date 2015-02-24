<?php
$handle_1 = fopen("output_2.txt","r");
$handle_2 = fopen("copy.txt","w");

while($line = fgets($handle_1)){
	fwrite($handle_2,$line);
	echo $line;
}
fclose($handle_1);
fclose($handle_2);