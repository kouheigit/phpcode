<?php
class hantei{
   public function hantei1($value){
     for($i=0; $i<$value; $i++){
	     echo $i;
	     echo"<br>"; 
     }
  }
}
$value = new hantei();
$ans = $value->hantei1(100);
echo $ans;
?>
