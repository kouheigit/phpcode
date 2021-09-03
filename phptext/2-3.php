<?php

class test{
	function tests($str){
		if($str == "登録"){
			return $str ="登録しました";
		}else{
		        return $str ="登録できませんでした";
		}


	}
}

$test = new test();

$testname = $test->tests("うんこ");

echo $testname;


?>
