<!DOCTYPE html>
 <head>
 </head>
 <body>
  <form method="post" action="sqlclass.php">
    <input type="text" input required name="name" size="15">
    <br>
    <input type="text" input required name="come" size="15">
　　<br>
    <input type="text" input required name="age" size="15"required>
   <input type="submit" value="送信する">
  </form>
<?php
class newsql
{
	public $name;
	public $come;
        public $age;

	public function thesql()
	{
		$this->$name;
		$this->$come;
		$this->$age;
		$mysqli = new mysqli("localhost","root","tfhrt318","rensyu1");
		$mysqli->autocommit(true);

		$insert = $mysqli->query("INSERT INTO test(name,come,age) VALUES('$this->name','$this->come','$this->age');");
		$hyouji = $mysqli->query("SELECT * from test;");
		echo"<table border='1' style = border-collapse: collapse>";
		echo"<TR>";
		echo"<TD>id";
		echo"</TD>";
		echo"<TD>name";
		echo"</TD>";
		echo"<TD>come";
		echo"</TD>";
		echo"<TD>age";
		echo"</TD>";


	while($data = mysqli_fetch_array($hyouji)){

		echo"<TR>";
		echo"<TD>".$data[0];
		echo"</TD>";
		echo"<TD>".$data[1];
		echo"</TD>";
		echo"<TD>".$data[2];
		echo"</TD>";
		echo"<TD>".$data[3];
		echo"</TD>";
		echo"</TR>";
	}
		echo"</TABLE>";
 }
}

$name = $_POST['name'];
$come = $_POST['come'];
$age = $_POST['age'];

$newsql = new newsql();
$newsql->name = $name;
$newsql->come = $come;
$newsql->age = $age;

$newsqlans = $newsql->thesql();

echo $newsqlans;
?>
</body>
</html>
