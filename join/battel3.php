<?php
// じゃんけんの手を配列に代入
$hands = ['グー', 'チョキ', 'パー'];

// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
    // プレイヤーの手を代入
    $playerHand = $_POST['playerHand'];

    // PCの手をランダムで選択
    $key = array_rand($hands);
    $pcHand = $hands[$key];

    // 勝敗を判定
    switch ($playerHand) {
        case ($playerHand === $pcHand):
            $result = 'あいこ';
            break;
        case 'グー':
            $result = ($pcHand === 'チョキ') ? '勝ち' : '負け';
            break;
        case 'チョキ':
            $result = ($pcHand === 'パー') ? '勝ち' : '負け';
            break;
        case 'パー':
            $result = ($pcHand === 'グー') ? '勝ち' : '負け';
            break;
    }
}