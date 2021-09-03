<!DOCTYPE html>
   <head> 
     <meta http-equiv="content-type"content="text/html; charset=sjis">
     <style>
      #sql1{
         text-align: center;
       }
     </style>
   </head>
     <body>
      <div id ="sql1">
<?php
class sql1{

public $name;
public $come;
 
         public function sql(){

	    $mysqli = new mysqli("localhost", "root","tfhrt318", "rensyu");
	    $mysqli->autocommit(true);
	        if($this->name == null && $this->come == null){ //値が入っているかどうかで判別する
			echo"";
		}else{
			$res = $mysqli->query("INSERT INTO rensyu3(name,come) VALUES('$this->name','$this->come');");
	      }		
	    $res2 = $mysqli->query("SELECT * FROM rensyu3;");
	   // $res2 = $mysqli->query("select * from rensyu3 order by id desc;"); 昇順にする文です
	      echo"<table border='1'align= 'center'>";
	      echo"<TD>id";
	      echo"</TD>";
	      echo"<TD>name";
	      echo"</TD>";
	      echo"<TD>come";
	      echo"</TD>";

	while($data = mysqli_fetch_array($res2)){

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

if (!empty($_POST)) { //二重投稿禁止対策
     header("Location: {$_SERVER['REQUEST_URI']}");
 } 

$name = $_POST['name'];
$come = $_POST['come'];
$sql1 = new sql1();
$sql1->name = $name;
$sql1->come = $come;
$sql1->sql();
?>
    <form method="post" action="sql1.php">
名前:<input type="text" input required name="name" size="30"><br>
 　　<textarea name="come"input required cols="50" rows="10"></textarea>
     <br>
   <input type="submit" value="送信する" />
    </div> 
  </body>
</html>

