<?php
//フィボナッチ数を出すプログラム
class fibo{
    public $value1;
   //引数有り
   public function hantei($value){
     $a=1;$b=0;$c=0;
       for($i=0; $i<$value; $i++){
         $c = $a + $b;
         $a = $b;
         $b = $c;
         echo $c;
         echo"<br>";
       }
   }
    public function hantei1(){
    //引数なし
     $a=1;$b=0;$c=0;
     for($i=0; $i<$this->value1; $i++){
	$c = $a + $b;
         $a = $b;
         $b = $c;
         echo $c;
         echo"<br>";

      }
    }
}
/*引数有り*/
$fibo = new fibo();
$ans = $fibo->hantei(1000);
echo $ans;

/*引数なし*/
$fibo1 = new fibo();
$fibo1->value1 = 9;
$fibo1->hantei1()




?>
