<?php

class test
{
    public $name;
    public $name1;

    public function test1()
    {
	    $syamu ="この文字の文字数は";
            $syamu1="個";
	    $this->name;
	    echo $syamu;
	    echo strlen($this->name);
	    echo$syamu1;




    }
}

$test = new test();
$test->name ="大橋正信";
$test->test1()
?>
	
