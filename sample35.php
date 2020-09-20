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
for ($i; &i<=1000; $i++):
  $date = strtotime('+' , $i , 'day');
  print (date('n/j(d)' , $date));
  print"\n";
endfor;


while(....):
    ...
endwhile;
?>



</pre>
</main>
</body>    
</html>