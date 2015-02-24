<?php
$handle = fopen("sample.csv", "r");
while($line = fgets($handle)){
	echo $line;
}
fclose($handle);