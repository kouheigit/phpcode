<?php
class menseki{
	//三角形の面積
	public function sankaku($bottom,$height){
		if($bottom==null){
			echo"底辺の値が未入力です";
		}elseif(!is_numeric($bottom)){
			echo"底辺の値が整数ではありません";
		}elseif(!is_numeric($height)){
			echo"高さが未入力です";
		}else{
			$ans = $bottom*$height/2;
			echo $ans;
		}
	}
	//円の面積
	public function circle($value){
		if($value==null){
			echo"半径の値が入力されていません";
		}elseif(!is_numeric($value)){
			echo"半径の値が整数ではありません";
		}else{
			$radius = $value / 2;
			$ans = $radius*$radius*3.14;
			echo $ans; 
		}
        }
	
}
$cir = new menseki();
$circle = $cir->circle(100);
echo $circle;
/*
$san = new menseki();
$sankakuans = $san->sankaku(10,10);
echo $sankakuans;*/
?>
