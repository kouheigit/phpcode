<?php

class syamu {

  public $value;

  public function test($value){
	  $this->value = $value;
	  echo $value."さんこんにちわ";
  }
}

$syamu = new syamu();

$syamu->test("開発光");

$syamus = $syamu;

echo $syamus;
?>
