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

<form action="submit.php" method="post">
    <p>ご予約希望日</p>
    <p>
      <input type="checkbox" name="reserve[]" value="1/1"> 1月1日 <br>
      <input type="checkbox" name="reserve[]" value="1/2"> 1月2日 <br>
      <input type="checkbox" name="reserve[]" value="1/3"> 1月3日 <br>
    </p>

    <input type="submit" value="送信する">
</form>

      </pre>
      
</main>
</body>    
</html>