<?php
class syamu{

  public $type;
   
     public function types($type)
     {
       switch($type){
           case"シャム":
	          print"オフ会ゼロ人";
	          break;

	   case"シバター":
		   print"どうもーシバターでーす";
		   break;

	    case"ヒカキン":
		    print"ブンブンハローYOUTUBE";
		    break;

	    default:
		    print"該当するYOUTUBERがいません";
         }
          return $this->type;

      }
      

}	    



$syamu = new syamu();

$syamu->types("ヒカキン");

$syamus = $syamu;

echo $syamus;

?>
