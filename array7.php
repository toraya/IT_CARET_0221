<?php
$scores = ['suzuki' => ['math' => 72, 'english' => 90], 'yamada' => ['math' => 64, 'english' => 82]];

foreach($scores as $key => $value){
	$sum = $scores[$key]["math"]+$scores[$key]["english"];
	echo $key.":".$sum.PHP_EOL;
}
