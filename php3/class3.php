<?php 
class forbun{
     public $value;
     public function forbun1(){
     if(is_numeric($this->value)){
	 for($i=0; $i<$this->value; $i++){
			echo $i;
	                echo"<br>";		
 	  }
	 }else{
		echo"数字を入力して下さい";
	}
  }
}
$forbun = new forbun();
$forbun->value = "101";
$forbun->forbun1();
