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
</pre>
</main>
</body>    
<?php $sum = 100*200; ?>
合憲金額は　<?php print($sum); 円です。?>

消費税込みの値段は <?php print($sum * 1.0); 円です。?>

<?php 
$fruite = [
  "りんご" => "apple",
  "ばなな" => "banana",
  "ぴーち" => "peach",
  "とまと" => "tomato",          
];

foreach ($fruite as $hiragana => $english){


print ($english . ":" . $hiragana  . "\n");
}

?>


<?php 
print ()

</pre>
</main>
</body>    
</html>