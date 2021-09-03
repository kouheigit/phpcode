<?php
class hantei{
	public $value;

	public function hantei1(){
		echo"数字かどうかの判定＝";

	if(is_numeric($this->value)){
		  echo "true";
	  }else{
		  echo "false";
	 }
	}
	//複数の戻り値を返す方法
	public function hantei2($value1,$value2){
               return array($value1,$value2);		
	}
}
/*戻り値なしの関数
$hantei = new hantei();
$hantei->value = "シャムさん";
$hantei->hantei1();
 */

//戻り値有りの関数（複数の戻り値を受け取る）
$hantei2 = new hantei();
$hantei = $hantei2->hantei2("鳥海","ローランド");
echo $hantei[0];
echo $hantei[1];
?>



