<?php
$today = date("y年m月d日H時i分s秒");
$tommorow = date("y年m月d日H時i分s秒",strtotime('+1 day'));
echo "現在の日時は$today";
echo"<br>";
echo"<br>";
echo "明日の日時は$tommorow";



?>
