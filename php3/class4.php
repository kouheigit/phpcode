<?php
class zukei{
    public $value1;

  public function sankaku($value){
     for($i=0; $i<$value; $i++){
       for($j=0; $j<$value-($i+1); $j++){
	       echo" ";
	}
     for($k=0; $k<($i+1)*2-1; $k++){
	     echo" * ";
      }
             echo "<BR>";
      }
   }
  
   public function sankaku1(){
      for($i=0; $i<$this->value1; $i++){
	  for($j=0; $j<$this->value1-($i+1); $j++){
		  echo" ";
          }
       for($k=0; $k<($i+1)*2-1; $k++){
	       echo" * ";
       }
	       echo"<BR>";
       }
     }
}
//引数有
$value = new zukei();
$zukei = $value->sankaku(30);
echo $zukei;

//引数なし
$value2 = new zukei();
$value2->value1 = 100;
$value2->sankaku1()

?>
