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
print('PHPを勉強中です');
?>

<?php $sum = 100*799; ?>
合憲金額は　<?php print($sum); 円です。?>

消費税込みで <?php print($sum * 1.0); 円です。?>

</pre>
</main>
</body>    
</html>