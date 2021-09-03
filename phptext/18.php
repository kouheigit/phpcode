<?php

  $type = "exec";

    switch($type)
    {
            case"form":
		    print"登録フォーム";
		    break;

	    case"confirm":
		    print"確認画面です";
		    break;

	    case"exec":
		    print"登録処理を実行中";
		    break;

	    default:

		    print"画面がありません";

    }
	  
