<?php
class maxvalue{
   public function hantei1($value){
   echo $value[0];
   echo $value[1];
   }
}

$ans = new maxvalue();
$ans1 = $ans->hantei1(array(39,40));
echo $ans1;
?>
