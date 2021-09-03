<?php

class syamu {

   public $member;

     public function text($member){
       $i=1;	       
       $limit = 3;

       foreach($member as $key => $value){
	       if($i>$limit)
	       {
	           print"ループを抜けます";
	               break;
	        }
                  print $value;
	          print"<br>";



	}
}
