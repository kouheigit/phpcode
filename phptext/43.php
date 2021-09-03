<?php

$count =1;
if(isset($_COOKIE["count"])){
	$count = $_COOKIE;
	$count++;
}
setcookie("count",$count,time() + 10);
?>
<!DOCTYPE html>
 <head>
   <meta charset="UTF-8">
 <title>クッキーのテスト<title>
 </head>
 <body>
 クッキーのテスト<br>
 <br>
<?php
if($count == 1){
?>
はじめての訪問<br>
<br>
クッキーの情報はありません<br>
このページをリロードください<br>

<?php
}else{
?>

	あなたの訪問は<?=$count?>回目です<br>
        <br>
        10秒以内にリロードするとカウントアップします
<?php
}
?>

</body>
</html>
