<?php
$points = array(64, 76, 58, 72, 48);

for($i = 0;$i < count($points); $i++){
	if($points[$i - 1] < $points[$i])
		$max = $points[$i];
}
echo $max;