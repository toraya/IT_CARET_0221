<?php

$time = new DateTime();
$time -> format(DateTime::ISO8601);
$handle = fopen("output.txt","w");
fwrite($handle,$time);
fclose($handle);