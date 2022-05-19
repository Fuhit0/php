<!-- read -->


<?php
//データまとめ用の空文字変数
$str = "";

//フィルを開く
$file = fopen("data/booking.csv","r");

//ファイルをロックする
flock($file, LOCK_EX);

//fgets()で1行ずつ取得⇒$lineに格納
if($file){
  //while繰り返し処理
  while($line = fgets($file)){
    //取得したデータをstrに追加する"."は追加していく
    $str .="<tr><td>{$line}</td></tr>";
  }
}

//ファイルのロックを解除する
flock($file, LOCK_UN);

//ファイルを閉じる
fclose($file);


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約履歴（一覧画面）</title>
  <style>
      body{
              text-align: center;
      }
      #table{
              margin: auto;

      }
  </style>
</head>

<body>
  <fieldset>
    <legend>予約履歴（一覧画面）</legend>
    <a href="index.php">入力画面</a>
    <table id="table">
      <thead>
        <tr>
          <th>予約履歴</th>
        </tr>
      </thead>
      <tbody>
          <?=$str?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>