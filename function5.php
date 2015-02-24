<?php
function maxValue($points){
	for($i = 0;$i < count($points);$i++){
		if($points[$i-1] < $points[$i])
			$max = $points[$i];
	}
	return $max;
}
$resalt = maxValue([20,42,15]);
echo $resalt;
