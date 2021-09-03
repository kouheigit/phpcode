<!DOCTYPE>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <form method="post" action="test.php">
       <input type="text"input required name="name" size="15">
       <br>
    <input type="submit" value="送信する" />
<?php
ini_set('display_errors', '1');

class test
{
  private $name;
     
  public function test1($name){
	      //セッション情報の格納
               session_start();
	       $this->name = $name; 
	       $_SESSION['name'] = $name;
	        //  $sendfile = "test1.php";
	       //   echo"http://localhost/test1.php?name=$name?";
	       //   echo"<form method = 'post' action='$sendfile'?name=$name'>";
	/*      　if(isset($_SESSION['name'])){
	      
	       echo"<meta http-equiv= Refresh content= 1;URL=./test1.php>";
    
          
              


	       }*/
      }

  public function gettest1()
  {

	 return array($this->name);

   }
}

$name = $_POST['name'];
$test = new test();

$test->test1($name);

$testecho = $test->gettest1();

echo $testecho[0];
?>
  </body>
</html>
