<?php
// keyを1から
$janken = [1 => 'グー', 'チョキ', 'パー'];

// $POST_['choice']が存在し、なおかつ「1から3」の数値であるか？
if ($player = filter_input(INPUT_POST, 'choice', FILTER_VALIDATE_INT, [
    'options' => [
        'min_range' => 1,
        'max_range' => 3
    ]])) {

    // 相手の手をランダムで決定
    $com = array_rand($janken);

    // 勝敗判定
    $judge = ($player - $com + 3) % 3;
}

// Null合体演算子を使って、結果を代入
$result = ['あいこ', '負け', '勝ち', null][$judge ?? 3];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPでじゃんけんゲーム</title>
</head>
<body>
<p>選んでください。</p>

<form action="<?= filter_input(INPUT_SERVER, 'SCRIPT_NAME'); ?>" method="post">
    <?php
    foreach ($janken as $value => $hand) {
        printf('<button type="submit" name="choice" value="%s">%s</button>'. PHP_EOL, $value, $hand);
    }
    ?>
</form>

<?php
if ($result) {
echo <<<RESULT
<p>結果</p>

<p>
あなた：$janken[$player]<br>
あいて：$janken[$com]
</p>

<p>{$result}です。</p>
RESULT;
}
?>
</body>
</html>