<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>テキスト送信のテスト</title>
  </head>
  <body>
<?php
if($_POST["ken"]!=""){
	print"市区一覧<br>";
	print $_POST["ken"];
}else{
	print"市区を選んでください";
?>
  </body>
 </html>
