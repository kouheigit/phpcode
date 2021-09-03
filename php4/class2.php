<?php 
class menseki{
 public function sankaku($bottom,$hight){
      $value = array($bottom,$hight);
      
      foreach($value as $val){
	   if(!is_numeric($val)){
		   echo"整数ではありません";
		   die;
           }
      }  
      $ans = $bottom*$hight/2;
      echo $ans;      
 }
 
 public function daikei($upper,$bottom,$hight){
     $value = array($upper,$bottom,$hight);
     
     foreach($value as $val){
	  if(!is_numeric($val)){
                  echo"整数ではありません";
		  die;
          }
     }
     $plus = $upper + $bottom;
     $ans = $plus*$hight;
     echo $ans;
 }
}
$daikei = new menseki();
$ans = $daikei->daikei(30,10,20);
echo $ans;
/*
$san = new menseki();
$answer = $san->sankaku(30,10);
echo $answer;*/
?>
