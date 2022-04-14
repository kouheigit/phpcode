<?php
class syamugame{

	public function syamu1($value){
		if(!is_numeric($value)){
			
			echo"整数以外が入ってるのでエラーです";
			die;

		}else if(0 > $value||0 == $value){
			echo"0またはマイナスの値では判定できません";
			die;
		}
		//		echo $value; 
	       $f0 = 0;
	       $f1 = 1;

	       while($f1 < $value){
		       echo $f1;
		       echo"<br>";
		       $f2 = $f1 + $f0;
		       $f0 = $f1;
		       $f1 = $f2;
	       }
	}
/*ある会社のタクシーでは、距離に関する料金が、
 ２０００ｍ までの利用で７４０円、そのあとは
 ２８０ｍ の利用につき８０円ずつ加算されます。
 したがって、　利用した距離が２０００ｍ 以下のときは、
　距離に関する料金は７４０円、利用した距離が２０００ｍ
  をこえると、距離に関する料金は８２０円、
　利用した距離が２２８０ｍ をこえると、
　距離に関する料金は９００円、となります。このタクシーの料金を計算します。
 */
       /*キロ換算します、キロ数を入力してください・*/
	public function taxitest($value1){
		$value2 = $value1 * 1000;
		if($value2 < 2000){
			echo "料金は740円です";
		}elseif($value2 < 2280 || $value2 == 2280){
			echo"料金は820円です";
		}elseif($value2 > 2280){
			$ans= ($value2 - 2000)/280;
			$ans1 = floor($ans); //少数点切り捨て
			$ans2 = (80 * $ans1) + 820;
			echo $value1."キロのタクシー料金は";
			echo $ans2."円です";
		/*	$a = 1;
			$b = 280;
			$c = $a/$b;
			echo $c;
		 */
		}	
	}
}
/*キロ数を入力してください*/
$syamu = new syamugame();
$taxi = $syamu->taxitest(10);
echo $taxi;
/*
$syamu = new syamugame();
$ans = $syamu->syamu1(500);
echo $ans;*/
?>
