<?php

class sql5
{
   public $name;
   public $come;
     
      public function showsql()
      {
	      $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
	      $mysqli->autocommit(true);
	      $res = $mysqli->query("INSERT INTO rensyu3(name,come) VALUES('$this->name','$this->come');");
	      $res1 = $mysqli->query("SELECT * FROM rensyu3;");
	      echo"<table border='1'>";
              echo"<TD>id";
              echo"</TD>";
              echo"<TD>name";
              echo"</TD>";
              echo"<TD>come";
              echo"</TD>";

        while($data = mysqli_fetch_array($res1)){

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

$sql5 = new sql5();
$sql5->name = "sql5";
$sql5->come = "インサート成功";
$sql5->showsql();



?>
