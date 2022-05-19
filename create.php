<!-- create -->


<?php
// var_dump($_POST);

//dateを受け取る
$bookingdate = $_POST["bookingdate"];
$name = $_POST["name"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$people = $_POST["people"];


//一行にまとめる
$write_data = "{$bookingdate},{$name},{$checkin},{$checkout},{$people}\n";

//ファイルを開く
$file = fopen("data/booking.csv","a");

//ファイルをロックする
flock($file, LOCK_EX);

//指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

//ファイルのロックを解除する
flock($file, LOCK_UN);

//ファイルを閉じる
fclose($file);

//データ入力画面に移動する
header("Location:index.php");