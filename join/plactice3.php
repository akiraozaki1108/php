<p>じゃんけん</p>
<form action="index.php" method="post">
	<input type="radio" name="janken" value="0">グー
	<input type="radio" name="janken" value="1">チョキ
	<input type="radio" name="janken" value="2">グー    
    <input type="submit" name="submit3" value="送信">
</form>

<?php
//じゃんけんプログラム
if(isset($_POST["submit3"])){
	//相手のじゃんけん生成
	$aite = mt_rand(0,2);
	echo "相手は";
	if($aite == 0) echo "グー。"; 
	if($aite == 1) echo "チョキ。"; 
	if($aite == 2) echo "パー。"; 
echo "結果は";	
if($_POST["janken"] == 0){
	if($aite == 0) echo "あいこ<br>";
	if($aite == 1) echo "勝ち<br>";
	if($aite == 2) echo "負け<br>";
}elseif($_POST["janken"] == 1){
	if($aite == 0) echo "負け<br>";
	if($aite == 1) echo "あいこ<br>";
	if($aite == 2) echo "勝ち<br>";
}else{
	if($aite == 0) echo "勝ち<br>";
	if($aite == 1) echo "負け<br>";
	if($aite == 2) echo "あいこ<br>";
	}
}