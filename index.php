<!-- input -->


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>予約サイトっぽい何か</title>
</head>

<body>
    <!-- ヘッダー -->
    <div id="header" >
        <div id="header_left">
            <p>国内宿泊予約</p><p>レストラン予約</p><P>スパ予約</P>
        </div>
        <div id="header_right">
            <p>はじめての方</p><p>予約確認</p><p>会員登録</p><p>ログイン</p>
        </div>
    </div>
    <div>
        <img src="img/ヘッダー.jpg" alt="ヘッダー" id="header_img">
    </div>
  <form action ="create.php" method ="POST" id="form">
    <fieldset id="boarder">
      <legend id="header2">予約画面（入力画面）</legend>
      <a href="read.php">予約履歴</a>
      <div>
        bookingdate: <input type="date" name="bookingdate" class="input">
      </div>
      <div id="inoutfield">
        <div>
            checkin: <input type="date" name="checkin" class="input">
        </div>
        <div>
            checkout: <input type="date" name="checkout" class="input">
        </div>
      </div>   
      <div id="namefield">
        <div>
            name: <input type="text" name="name" class="input">
        </div>
        <div>
            people: <input type="number" name="people" class="input">
        </div>
      </div>  
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

  

</body>

</html>