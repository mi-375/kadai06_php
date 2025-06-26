<?php

$rating = $_POST['rating'];
$comment = $_POST['comment'];
$time = '★'.$rating .'     '. $comment.'     '.date('Y/m/d H:i') .' '. "\n";
file_put_contents('data/data.txt', $time, FILE_APPEND);


?>
<html>
<head>
    <meta charset="utf-8">
    <title>評価登録</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="tripdiary">
    <img src="img/top3.png" alt="くまこの旅行記タイトル" class="imgtrip"> 
</div>

<div class="mapg">
<div class="main-container">


    <p class="touroku">
    評価を登録しました!
    </p>

    <div class="tourokugo">
  <div class="button-container">
    <a href="read.php" class="link-button1">他の人の評価を見る</a>
    <a href="input.php" class="link-button2">戻る</a>
  </div>
</div>

</div>
</div>

</body>

</html>