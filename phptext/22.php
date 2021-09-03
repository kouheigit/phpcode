<?php

$member[0] = "佐藤健";
$memebr[1] = "浜崎順平";
$member[2] = "出川哲郎";
$member[3] = "オビ=ワン・ケノービ";
$member[4] = "斎藤陽太";
$member[5] = "アナキンスカイウォーカー";
$member[6] = "タスケン・レイダー";

$i=1;

$limit=3;

foreach($member as $key => $value)
{
	if($i>$limit)
	{
		print"ループを抜けます";
		   break;
	}
        print"名前:$value";
	print"<br>";
	$i++;
}


?>
