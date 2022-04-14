<?php
//禁止ワード検知機能
class message{
	public function valuecheck(array $value){
		$check = ["殺す","障害者","死ね","朝鮮人","ニガー"];
		foreach($check as $check1){
		    foreach($value as $val){
			    if(strpos($val,$check1) !== false){
			       echo"投稿禁止ワードが含まれていますので訂正をお願いします";
			       echo"<br>";	     
                               echo$val;
			       echo"<br>";	
			       echo"投稿禁止ワード";
			       echo"<br>";     
			       echo$check1;
			       echo"<br>";
		               die;	       
		            }	       
		       }
		}
		echo"投稿が完了しました";
		echo"投稿した文章";
		echo"<br>";
		foreach($value as $ans){
			echo $ans;
			echo"<br>";
		}
	}
}
$messa = new message();
$message = $messa->valuecheck(["桜井","山本","お前は死ねよ"]);
echo $message;


/*
   $value  =["山本","狭山","山口","山本","原田"];
   $check =["入江","桜井","青木","朝倉","秋山","青地","青山","秋瀬","山本"];

   foreach($value as $val){
	   foreach($check as $check1){
		   if(strpos($check1,$val) !== false){
		    //if($val == $check1){
			   echo"一致するものがありました";
			   echo $check1;
			   die;
	          }
     }
	   }*/
?>
