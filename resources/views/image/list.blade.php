<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<header>
    <h1><a href="#">PhotoHits</a></h1>
    <ul>
      <li><a href="#">MyPage</a></li>
      <li><a href="#">ランキング</a></li>
      <li><a href="#">カテゴリー</a></li>
      <li><a href="#">ログイン</a></li>
    </ul>
    <div class="upload_form">
      <a href="#">アップロード</a>
    </div>
  </header>
  <div class="content">
    <img src="./image/paris-3296269_1280.jpg" alt="title画像" class="title_image">
    <h2>PhotoHits</h2>
    <p>PhotoHitsで更なる体験を</p>
    <form action="#" method="POST">
        <input type="submit" value="" class="searchimage">
        <input type="text" name="searchform" id="searchform" value="" placeholder="画像を検索" autocomplete="off">
    </form>
  </div>
  <h3><a href="#">もっと見る</a></h3>
</body>
</html>