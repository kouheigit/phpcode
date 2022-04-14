<?php
class test{
	public function returns($value)
	{
	  $check = 100;
	       if($value ==  $check){
	                $check1 ="同じ値です";	   
			return $check1;
	       }else{
		       $check1="異なる値です";
			return $check1;
	        }
	}
}
$ans = new test();
$ans1 = $ans->returns(200);
echo $ans1;
?>
