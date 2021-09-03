<?php
class hantei{

   //自然数を判定するプログラム
   public function sizen($value){
		
	   if(!is_numeric($value)){

		   echo $value."は自然数ではありません";
		   echo"整数を入力して下さい";
		  die;

	   }elseif(is_float($value)){

		   echo $value."は自然数ではありません";
		   echo"小数点が入ってます";
                   die;

	   }elseif(0 >= $value){
		   
		   echo $value."は自然数ではありません";
		   echo"0以下です";
		   die;
	  }
	   echo$value."は自然数です";
   }

　　//昇順か否かを調べるメソット
   public function sorts($value,$value1,$value2){

       $array = array($value,$value1,$value2);
       $array1 = $array;
       sort( $array1, SORT_ASC );

          if($array==$array1){

	       echo"入力された数値は小さい順です";

	     }else{
	      
	      echo"入力された値は小さい順ではありません";      
         }
        
   }

}
/*昇順か否かを調べるメソット*/
$hantei = new hantei();
$ans = $hantei->sorts(1,2,3);
echo $ans;

/*自然数を呼び出す*
$hantei = new hantei();
$ans = $hantei->sizen(-1);
echo $ans;*/
?>
