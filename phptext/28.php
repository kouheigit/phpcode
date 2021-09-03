<?php

//文字の数字をカウントする
$str = "こんにちわ";
$length = strlen($str);
$mb_length = mb_strlen($str);

//番号から番号までの文字を区切る
$string ="ABCDEFGHIJKLMN";
$result = substr($string,3,5);

//PHPの変数でhtmlを使用する
$html ='<div style="font-size:12px;">Hello</div><br>';
$search = '12px';
$replace = '48px';
$result1 = str_replace($search,$replace,$html);
echo $result1;
echo"<br>";
echo $mb_length;
echo"<br>";
echo $result;
?>
