<?php
class zukei{
  public $bottom;
  public $height;
/*
  public $atai;
  public $atai2;*/

  public function sankaku(){
	 $ans = $this->bottom * $this->height / 2;
	 echo $ans;
  }
  public function sankaku2($atai1,$atai2){
	  $answer = $atai1 * $atai2 / 2;
	  return $answer;
  }

}
/*戻り値無しのメソット
$zukei = new zukei();
$zukei->bottom = 10;
$zukei->height = 20;
$zukei->sankaku()*/

/*戻り値有りのメソット*/
$zukei = new zukei();
$zukeiatai = $zukei->sankaku2(210,20);
echo $zukeiatai;
?>

