<?php

class test{


	public function tests($syamu){

	   if($syamu < 60){

		   return $syamu ="60以下です";

	   }elseif($syamu < 71){

		   return $syamu="70以下です";

		   
	   }elseif($syamu < 81){

		   return $syamu ="80以下です";
	  
		      
	   }elseif($syamu < 91){

		   return $syamu ="90以下です";

	   }elseif($syamu < 101){

		   return $syamu ="100以下です";

	   }elseif($syamu > 101){

		   return $syamu="100以上です";
	}

 }

}
$test = new test();

$testname = $test->tests(80);

echo $testname;
?>
