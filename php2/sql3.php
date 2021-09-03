<!DOCTYPE html>
  <head>
       <meta http-equiv="content-type"content="text/html; charset=sjis">
  </head>
  <body>
<?php
//ini_set( 'display_errors', 1 );
class sql3
{
    public $come;//プロパティ
     
         public function subsql3($come)
	 {       
		 $this->come = $come;		 
		 $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		 $mysqli->autocommit(true);
		 $res = $mysqli->query("SELECT * FROM rensyu1 WHERE come like '%$this->come%';");
		 //テーブルタグ1
		 echo"<table border='1'>";
	         echo"<TR>";
	         echo"<TD>id";
		 echo"</TD>";
		 echo"<TD>name";
		 echo"</TD>";
		 echo"<TD>come";

             while($data = mysqli_fetch_array($res)){
		     
		  echo"<TR>";
		  echo"<TD>" . $data[0];
		  echo"</TD>";
		  echo"<TD>" . $data[1];
		  echo"</TD>";
		  echo"<TD>" . $data[2];
		  echo"</TD>";
		  echo"</TR>";
	     }
	          echo"</TABLE>";
	 }
}
$come = $_POST['come'];

$sql3 = new sql3();
$sql3->come = $come;
$sql3ans = $sql3->subsql3($come);
echo $sql3ans;


?>
     <form method="post" action="sql3.php">
         <input type="text"input required name="come" size="15">
         <br>
     <input type="submit" value="送信する" />

  </body>
</html>

