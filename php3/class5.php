<?php
class valuecheck{
    public function check($name,$come){
 	   if($name==null){
		   echo"名前が未入力です";
	    }elseif($come==null){
		 echo"コメント欄が未入力です";
	    } 
	   $search_string = array("殺す","ころす","池沼", "ちしょう", "チショウ","殺害","さつがい","サツガイ","死ね", "片端");
	   $value1 = true;
          for($i=0; $i < count($search_string);  $i++){
                 if(strpos($name, $search_string[$i]) !== false){
		     echo"投稿者名は規約違反のため投稿できませんでした";
	             $value1 = false;	     
		 }elseif(strpos($come, $search_string[$i]) !== false){
	             echo"コメントは規約違反のため投稿できませんでした";
                     $value1 = false;
		 }
         }
		   if($value1==true){
	             echo"投稿名は".$name;
	             echo"で宜しいですか?";
	             echo"<br>";
	             echo"投稿コメントは".$come;
		     echo"で宜しいですか?";
		}
     }
}
$value = new valuecheck();
$valuecheck = $value->check("太郎","ちしょう");
echo $valuecheck;
?>
