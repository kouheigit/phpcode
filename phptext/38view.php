<?php
if(isset($_POST["38form"])){
?>

<?php

print $_POST["onamae"]."さんからのメッセージ";
print"<br><br>";
print"本文:<br>";
print nl2br($_POST["honbun"],false);
?>
<?php
}elseif(isset($POST["back")){
//戻るボタンが押されたとき
?>

<div style="font-size:14px">テキスト送信のテスト</div>
<form name="form1" method="post" action="38form.php">
名前:<br>
 <input type="text" name="onamae" value="<?=$POST["onamae"]?>">
 <br>
 本文:<br>
 <textarea name="honbun" cols="30" row="5">
 <?=$POST["honbun"]?></textarea>
 <br>
 <input type="submit" value="送信">
 <input type="hidden" name="user_id" value="<?_$POST["user_id"]?>">
</form>

<?php

}else{
//上記条件以外の時
?>
エラーです。<br>
<a href="38form.php">form</a>からアクセスしてください。
<?php
}
?>
</body>
</html>
		










