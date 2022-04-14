
<?php
/*
No. 40 even or odd
整数値を入力させ、その値が偶数ならばeven、奇数ならばoddと表示するプログラムを作成せよ。*/

/*No.41整数値を入力させ、その値が一桁の自然数かそうでないか判定するプログラムを作成せよ。*/

/*No42*整数値を3つ入力させ、それらの値が小さい順（等しくてもよい）に並んでいるか判定し、小さい順に並んでいる場合はOK、そうなっていない場合はNGと表示するプログラムを作成せよ。*/

class problem{
	public function number40($value){
		if($value%2==0) {
			echo"even";
			echo"<br>";
			echo"入力された値は整数です";
		}else{
			echo"odd";
			echo"<br>";
			echo"入力された値は奇数です";
		}
	}
	public function number41($value){
		if(($value>0)&&(is_int($value)==true)&&($value<10)){
			echo $value;
			echo"は一桁の自然数です";	
		}else{
			echo $value;
			echo"は一桁の自然数ではありません";
		}
	}
	public function number42(array $value){
		if(count($value)==3){
		    foreach($value as $val){
			    if(is_int($val)==false){
				    echo"整数以外の文字が入力されました";
				    die;
		            }
		    }	
		    //以下の値は動作不純
		   $sortvalue =  sort($value);
		    //ここに処理を書く
		    foreach($sortvalue as $sortvalue1){
			    foreach($value as $val1){
				    if($sortvalue1 == !$vale1){
					    echo"一致しませんでした";
					    die;
			            }
		            }
		    }
	                echo"一致しました";	    
		} 
        }
}

$problem = new problem();
$ans = $problem->number42([3,2,1]);
echo $ans;
/*
$problem = new problem();
$ans = $problem->number41(11);
echo $ans;*/
/*
$problem = new problem();
$ans = $problem->number40(3218732);
echo $ans;*/
?>
