<?php
function chengeAge($age){
	if($age >= 20){
		return "OK";
	}else{
		return "NG";
	}
}

$result = chengeAge(10);
echo $result;