<?php
$str ="TEL:03-0000-0000(代表)";

$str1 = str_replace('-','',$str);
$str2 = str_replace('TEL','',$str1);
$str3 = str_replace(':','',$str2);
$str4 = str_replace('(代表)','',$str3);

echo $str4;

?>
