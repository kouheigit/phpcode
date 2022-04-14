<?php
class test{
        public function test1($value){

                for($i=0; $i < $value; $i++){
			echo $i;
			echo"<br>";
                }
	}
      
	public function test2($value1){ /*フィボナッチ（仮)*/
	     $f0 = 0;
	     $f1 = 1; 
	    
	     while($f1 < $value1){
		 echo $f1;    
		 echo"<br>";   
		 $f2 = $f1 + $f0;
		 $f0 = $f1;
		 $f1 = $f2;
	     }

	}
}
$test = new test();
$ans = $test->test2(100);
echo $ans;
/*test1のメソット
$test = new test();
$ans = $test->test1(100);
echo $ans;*/


?>
