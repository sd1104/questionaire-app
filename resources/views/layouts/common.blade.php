<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href='../css/app.css'>
  <title>Questionaire</title>
</head>
<body>
  <header>
    <div class="nav heaer_nav">
      <h3 class="header_title">School-Q</h3>
      <div class="button_box">
        <button type="button" class="btn btn-outline-primary new_register"><a href="#">新規登録</a></button>
        <button type="button" class="btn btn-outline-primary new_session"><a href="#">ログイン</a></button>
      </div>
    </div>
  </header>

  @yield('content')

  <footer>
    <div class="nav footer_nav">
      <ul class="footer_links">
        <li><a href="#">会員規約</a></li>
        <li><a href="#">プライバシーステートメント</a></li>
        <li><a href="#">個人情報保護方針</a></li>
        <li><a href="#">サイト情報</a></li>
      </ul>
      <div class="copyright">copyright sd1104</div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>