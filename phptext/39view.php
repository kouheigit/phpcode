<!DOCTYPE html>
  <head>
   <meta charset="utf-8">
    <title>PHPのテスト</title>
  </head>
  <body>
<?php
if(isset($_POST["hobby"])){
        $hobby = implode('と',$_POST["hobby"]);
        print"私の趣味は";
        print $hobby;
        print"です。";
}else{
        print"私の趣味はありません";
}
?>
  </body>
</html> 
