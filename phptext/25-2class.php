<?php

class test{
	function tests(){
		$test ="織田信長";
		$test1="織田信秀";
		$test2="豊臣秀吉";

	return array($test,$test1,$test2);

	}
}

$test = new test();

$testname = $test->tests();

/*echo $testname[0];
echo $testname[1];
echo $testname[2];*/

//配列で受け取ったものをforeachで返す↓
foreach($testname as $tests){
	echo $tests;
}
