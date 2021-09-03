<?php


function test(){
	$test1 ="syamugame";
	$test2 ="シバター";
	$test3 ="桜井誠";
	
	return array($test1,$test2,$test3);

}

list($test1,$test2,$test3) = test();

echo $test1;
echo $test2;
echo $test3;

?>
