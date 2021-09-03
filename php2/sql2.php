<!-- <!DOCTYPE html>
   <head>
       <meta charset="UTF-8">
   </head>
   <body>-->
<?php
class sql2 
{

	private $come;

	public function subsql2($come)
	{
		$this->come = $come;
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu");
		$mysqli->autocommit(true);
		$res = $mysqli->query("SELECT * FROM rensyu1 WHERE come like '%$come%';");

		    echo" <table border='1' style= border-collapse: collapse>";
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

//$come = $_POST['come'];

$sql2 = new sql2();
$sql2->subsql2("蜘蛛の糸");
$sql2ans = $sql2->subsql2();
echo $sql2ans;
 
?> <!--
    <form method="post" action="sql2.php">
       <input type="text"input required name="come" size="15">
       <br>
       <input type="submit" value="送信する" />
   </body>
</html>-->


