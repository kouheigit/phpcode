<?php

class sql4
{
    private $name;
    private $come;

	 public function setName($name,$come)
         {
		 $this->name = $name;
		 $this->come = $come;
		 $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");

		 $mysqli->autocommit(true);
		 $insert = $mysqli->query("INSERT INTO rensyu3(name,come) VALUES('$this->name','$this->come');");

	}

         public function get()
         {
		 $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		 $mysqli->autocommit(true);
		 $syamu = $mysqli->query("SELECT * FROM rensyu3");
		    echo"<TABLE border='1'>";
		    echo"<TR>";
		    echo"<TD>id";
		    echo"</TD>";
		    echo"<TD>name";
		    echo"</TD>";
		    echo"<TD>come";
		    echo"</TD>";
		    echo"</TR>";
	          
		    while($data = mysqli_fetch_array($syamu)){

			    echo"<TR>";
			    echo"<TD>".$data[0];
			    echo"</TD>";
			    echo"<TD>".$data[1];
                            echo"</TD>";
			    echo"<TD>".$data[2];
                            echo"</TD>";
                      }
		             echo"</TABLE>";
	 }
}



$sql4 = new sql4();
$sql4->setName("ハーロー城島","城島しげる");
$sql4ans = $sql4->get();
echo $sql4ans;

?>
