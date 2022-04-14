<?php 
/*
================================================================================
 * 入力された整数がグレゴリオ暦でうるう年であるか判定するプログラムを書いてください。

閏年判定の条件

西暦が4で割り切れる年は閏年。
ただし、100で割り切れる年は閏年ではない。
ただし、400で割り切れる年は閏年。
 グレゴリオ暦-wikipedia
 閏年-wikipedia
入力される値
1行目には、入力される行数Tが入ります。
1回のテストケースは、1行に1つずつ整数Nが入っている複数行の標準入力（stdin）による入力になります。
 標準入力からの値取得方法はこちらをご確認ください
期待する出力
標準出力（stdout）で、入力された行数分の判定結果を出力します。
うるう年だった場合[N is a leap year]
うるう年でない場合[N is not a leap year]　と、出力。
条件
T、N は整数
N>= 1
======================================================================
 */
class uruujudge{
   public function uruu($value){
     if(($value%4==0)||($value%100==0)&&($value%400==0)){
		echo$value."年は閏年です";
	}else{
		echo$value."年は閏年ではありません";
	}
   }
   
   public function uruu1(array $value2){
	   $set =  array_shift($value2);/*行数を取得*/
	  /* echo $set;
	     echo"<br>";*/
	   $setmain = array_slice($value2, 0);/*配列の０のみ表示しない*/
            $i = 1;
	   foreach($setmain as $setans){
		   /*echo $i; */
	    if($i>$set){
                  break;
	     } 
	     if(($setans%4==0)||($setans%100==0)&&($setans%400==0)){
		     echo$setans."is a leap year";
		     echo"<br>";
	     }else{
		     echo$setans."is not a leap year";
		     echo"<br>";
	     }
	     $i = $i+1;
    }
  }
}
$ans = new uruujudge();

$ans1 = $ans->uruu1([2,2021,2022,2020]);
/*
$ans = new uruujudge();

$ans1 = $ans->uruu(2021);

echo $ans1;*/
