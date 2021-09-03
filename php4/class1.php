<?php
class menseki{
   //三角形の面積を求めるメソット
   public function sankaku($bottom,$hight){
	 if($bottom==null){
		  echo"底辺の値が未入力です";
	     }elseif(!is_numeric($bottom)){
		 echo"底辺の値が整数ではありません";
	     }elseif($hight==null){
	         echo"高さの値が未入力です";
	     }elseif(!is_numeric($hight)){
		 echo"高さの値が整数ではありません";
	     }else{
		  $ans = $bottom*$hight/2;
		  echo $ans;
             }
    }
    //台形の面積を求めるメソット
   public function daikei($upper,$bottom,$hight){

       if(!is_numeric($upper)){

	       echo"上底の値は整数ではありません";
		 
	    }elseif(!is_numeric($bottom)){

		    echo"底辺の値は整数ではありません";

	    }elseif(!is_numeric($hight)){

		    echo"高さの値は整数ではありません";

	    }else{
		
		    $plus = $upper + $bottom;
		    $ans = $plus*$hight;
		    echo $ans;
        }
   }      
}
$dai = new menseki();
$daikei = $dai->daikei(10,10,a);
echo $daikei;
/*
$mens = new menseki();
$answer = $mens->sankaku(300,10);
echo $answer;
 */
?>
