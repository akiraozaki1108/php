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
<?php
date_default_timezone_set("Asia/Tokyo");
$today = new DateTime();
print($today->format(' G時　iフン　s秒'));
?>

<?php 
$sum = 100+400*4;
?>
<?php 
$tax = 1.08;
?>
合計金額は<?php print ($sum); ?>です。
消費税込みは<?php print($tax*$sum); ?>です。

<!-- ここにプログラムを記述します -->
</pre>
</main>
</body>    
</html>