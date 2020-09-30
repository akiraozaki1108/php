<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ユーザ登録</title> 
</head> 
<body> 
<?php
  $sUserName=$_POST['fUserName'];
  $sPassWd1=$_POST['fPassWd1'];
  $sPassWd2=$_POST['fPassWd2'];

  //以下のプログラムは、確認用のパスワードと一致しているかをチェックしている。
  //不一致のときは、そのままプログラムを終了している。（exit）
  if($sPassWd1!=$sPassWd2){
    echo "パスワードが一致しません。もう一度登録しなおしてください。<br>";
    exit();
  }
  else{
    $conn=mysqli_connect('localhost','root','******') or exit("MySQLへ接続できません。");
    mysqli_select_db($conn,'userid_db') or exit("データベース名が間違っています。");

    //以下のSQL文は、同じユーザ名が存在するかを調べるためのものである。
    //パスワードをチェックしないのは、もし万が一、一致してしまうとユーザ名とパスワードがばれてしまうからである。
    $sql="SELECT * FROM userid_tbl where userName='{$sUserName}';";
    $result=mysqli_query($conn,$sql) or exit("データの抽出に失敗しました。");

    //以下のプログラムは、すでに同じユーザ名が存在すれば、登録済みのメッセージを出すためのものである。
    if(mysqli_num_rows($result)!=0){
      echo "すでに{$sUserName}様は登録済みです。もう一度別の名前で登録してください。<br>";
    }
    else{
      //以下のプログラムは新規登録を行うためのプログラムである。
      $sql="INSERT INTO userid_tbl values(NULL,'{$sUserName}','{$sPassWd1}');";
      $result=mysqli_query($conn,$sql) or exit("データの書き込みに失敗しました。");
      echo "{$sUserName}様の登録が完了しました。";
    }
    mysqli_close($conn);
  }
?>
</body>
</html>