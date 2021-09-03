<?php 

$count = 0;

print$count++;
print"<br>";
print$count;
print"<br>";
print"<br>";


$count = 3;

print$count--;
print"<br>";
print$count;
print"<br>";

$data1 = array("name"=>"福田康夫","age"=>90);
$data2 = array("name"=>"中曽根康弘","age"=>101);

$data = ($data1 + $data2);

$age = 19;
$adult = 20;

$check= ($adult<=$age)?"大人":"子供";

echo $check;

?>
