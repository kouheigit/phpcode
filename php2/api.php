<?php
$base_url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=130010";
//016010";
$json = file_get_contents($base_url);
//$json = mb_convert_encoding($json, 'UTF-8');
$obj = json_decode($json, true);//jsonデータを文字列にする
 
echo '<table border="1" cellspacing="0" cellpadding="5" style="width: 250px;"><tbody><tr><td colspan="3">';
echo $obj['location']['city'] . 'の天気';
echo '</td></tr><tr>';
 
foreach($obj['forecasts'] as $fc) {
  echo '<td>';
  echo $fc['dateLabel'] . '<br />';
  echo $fc['telop'] . '<br />';
  echo '<img src="' . $fc['image']['url'] .  '"/>';
  echo '</td>';
}

echo $fc['telop'];
 
echo '</tr></tbody></table>';
echo 'copyright <a href="' . $obj['copyright']['image']['link'] . '">' .  $obj['copyright']['image']['title'] . '</a>';
?>
