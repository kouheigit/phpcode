<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>PHPのテスト</title>
  </head>
  <body>
<?php
if(isset($_POST["hobby"])){
	print"私の趣味は以下のとおりです<br><br>";
        $syamu = $_POST["hobby"];	
	foreach((array)$syamu as $hobby){
		echo $hobby;
		echo"<br>";
	}
}else{
	echo"私の趣味はありません";
}

?>
  </body>
</html>

