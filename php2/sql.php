<?php

class sql
{
	private $name;
	private $come;


	public function setName($name,$come)
	{
		$this->name = $name;
		$this->come = $come;

		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		$mysqli->autocommit(true);
		$nanashiro = $mysqli->query("INSERT INTO rensyu1(name,come) VALUES('$this->name','$this->come');");
	 }



	 public function getName()
	 {
		 $mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		 $mysqli->autocommit(true);
		 $res = $mysqli->query("SELECT * FROM rensyu1");
		 echo "<TABLE border='1' >";
		  echo "<TR>";
                     echo "<TD>id";
                     echo "</TD>";
                     echo "<TD>name";
                     echo "</TD>";
                     echo "<TD>come";
                     echo "</TD>";


                 while ($data = mysqli_fetch_array($res)){

                        echo "<TR>";
                        echo "<TD>" . $data[0];
                        echo "</TD>";
                        echo "<TD>" . $data[1];
                        echo "</TD>";
                        echo "<TD>" . $data[2];
                        echo "</TD>";
                        echo "</TR>";
		}
		        echo "</TABLE>";
	 }
}
$sql = new sql();
$sql->setName("芥川龍之介","蜘蛛の糸");
$sqlName = $sql->getName();
echo $sqlName;

?>
