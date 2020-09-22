<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php

// ログインボタンがクリックされたときに下記を実行
if(isset($_POST['login'])) {

  $email = $mysqli->real_escape_string($_POST['email']);
  $password = $mysqli->real_escape_string($_POST['password']);

  // クエリの実行
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = $mysqli->query($query);
  if (!$result) {
    print('クエリーが失敗しました。' . $mysqli->error);
    $mysqli->close();
    exit();
  }

  // パスワード(暗号化済み）とユーザーIDの取り出し
  while ($row = $result->fetch_assoc()) {
    $db_hashed_pwd = $row['password'];
    $user_id = $row['user_id'];
  }

  // データベースの切断
  $result->close();

  // ハッシュ化されたパスワードがマッチするかどうかを確認
  if (password_verify($password, $db_hashed_pwd)) {
    $_SESSION['user'] = $user_id;
    header("Location: home.php");
    exit;
  } else { ?>
    <div class="alert alert-danger" role="alert">メールアドレスとパスワードが一致しません。</div>
  <?php }
}
</pre>
</main>
</body>    
</html>