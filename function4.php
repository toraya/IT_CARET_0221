<?php
function hello($count)
{
	for($i = 0 ; $i < $count; $i++)
	{
		echo "hello".PHP_EOL;
	}
}

$count = hello(9);
