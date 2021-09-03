<?php
$base = "http://weather.livedoor.com/forecast/webservice/json/v1?city=130010";

$json = file_get_contents($base);
$obj = json_decode($json,true);
echo $obj['location']['city'].'の天気';
foreach($obj['forecasts'] as $syamu) {
	echo $syamu['dataLabel'];
	echo $syamu['telop'];
	echo '<img src ="'.$syamu['image']['url'].'">';

}

?>
