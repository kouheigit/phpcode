<!DOCTYPE html>
   <head>
    <meta charset="UTF-8">
  </head>
  <body>
   <div style="font-size14px">テキスト送信</div>
    <form method="post" action="42view.php">
     私の趣味:<br>
     <p>複数選択するにはCtrlキーを押しながら選択してください</p>
     <select name="hobby"[] size="5" multiple>
       <option value="読書">読書</option>
       <option value="映画鑑賞">映画鑑賞</option>
       <option value="英会話">英会話</option>
       <option value="音楽鑑賞">音楽鑑賞</option>
       <option value="カラオケ">カラオケ</option>
       <option value="ガーデニング">ガーデニング</option>
       <option value="写真">写真</option>
       <option value="ドライブ">ドライブ</option>
       <option value="ゴルフ">ゴルフ</option>
       <option value="サーフィン">サーフィン</option>
       <option value="釣り">釣り</option>
       <option value="料理">料理</option>
    </select>
    <br>
    <br>
    <input type="submit" value="送信">
  </body>
</html> 
