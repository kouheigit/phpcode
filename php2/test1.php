<!DOCTYPE>
 <head>
   <meta charset="UTF-8">
 </head>
  <body>
<?php
　　//セッション情報の取得
    session_start();
    // セッション情報の取得
    $name = $_SESSION['name'];
    echo $name;
/*
$action = $_POST['action'];

$name = $_GET['name'];
echo $name;
 */
?>
  </body>
</html>

