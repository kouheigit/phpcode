<?php
//閏年かどうかを判定するプログラム
class year{
	public $year1;
	//引数有り
	public function hantei($year){
	$years = intval($year);
           if (checkdate(2, 29, $years)) {
              echo"うるう年です";
            }else{
              echo"うるう年ではありません。";
            }
	}
	
	//引数無し
	public function hantei1(){
	$years = intval($this->year1);
           if (checkdate(2, 29, $years)) {
              echo"うるう年です";
            }else{
              echo"うるう年ではありません。";
            }
        }
}

$year = new year();
$value = $year->hantei(2004);
echo $value;

echo"<br>";

$year1 = new year();
$year1->year1 = 2004;
$year1->hantei1()

?>
