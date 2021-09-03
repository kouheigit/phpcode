<?php

$data = array("りんご","みかん","かき");
list($fruit0,$fruit1,$fruit2) = $data;


$number1 =array("Syamu1"=>"1000","sakurai1"=>"2000","dent2"=>"200");
$numbers= array(18,7,20,5);
$number = array(20,1001,89,9113,54);


//降順ソート
rsort($number);
print"<pre>";
print_r($number);
print"</pre>";

//昇順ソート
sort($numbers);
print"<pre>";
print_r($numbers);
print"</pre>";

//キーソート
ksort($number1);
print"<pre>";
print_r($number1);
print"</pre>";


foreach($data as $desk){
        echo $desk;
}

echo "<br>";
for($i=0; $i < count($data); $i++){
	echo $data[$i];
}
?>

