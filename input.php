<html>

<head>
    <meta charset="utf-8">
    <title>評価アプリ</title>
    <link rel="stylesheet" href="css/style.css?v=1.1">
</head>

<body>

<div class="tripdiary">
    <img src="img/top3.png" alt="くまこの旅行記タイトル" class="imgtrip"> 
</div>

<div class="mapg">
<div class="main-container">


<p class="title">評価を登録してね</p>
    <form action="write.php" method="post">
    <!-- <p class="title">評価</p> -->
        <div class="star-rating">
    <input type="radio" id="star5" name="rating" value="5"><label for="star5">★</label>
    <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
    <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
    <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
    <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
  </div>

  <p class="title">コメント</p>
  <div class="center">
  <textarea name="comment" class="comment-box" rows="3"></textarea>
</div>
  <input type="submit" value="送信">

    </form>

    </div>
    </div>

</body>

</html>
