<html>

<head>
    <meta charset="utf-8">
    <title>評価アプリ</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="tripdiary">
    <img src="img/top3.png" alt="くまこの旅行記タイトル" class="imgtrip"> 
</div>

<div class="mapg">
<div class="main-container">
<p class="title">みんなの評価一覧</p>
<div class="kekka">
<?php
$data = file_get_contents('data/data.txt');
echo nl2br($data);

?>
</div>

    </div>
    </div>
    <div class="tourokugo">
  <div class="button-container">
<a href="input.php" class="link-button2">戻る</a>
  </div>
</div>

</body>

</html>
