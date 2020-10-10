<?php
if(isset($_POST['user'])) {
$dsn='mysql:dbname=EC;charset=utf8';
$user='ユーザー名';
$password='パスワード';
$dbh = new PDO($dsn,$user,$password);
$stmt = $dbh->prepare("INSERT INTO USER VALUES(:user,:password,:name,:address,:tel)");
$stmt->bindParam(':user', $_POST['user']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':address', $_POST['address']);
$stmt->bindParam(':tel', $_POST['tel']);
$stmt->execute();
}
?>