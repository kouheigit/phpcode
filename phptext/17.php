<?php

   $username ="user";
   $password ="pass";

     $db_data["username"] = "user";
     $db_data["password"] = "pass";

        if($db_data["username"] == $username && $db_data["password"] == $password){
                
		print"会員ページです";
	}else{
		print"ログインに失敗しました";
        }
    




?>
