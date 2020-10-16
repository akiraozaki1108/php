// 勝敗判定
if ($player === 'グー') {
    switch ($com) {
        case 'チョキ':
            $result = '勝ち';
            break;
        case 'グー':
            $result = 'あいこ';
            break;
        case 'パー':
            $result = '負け';
            break;
    }
} elseif ($player === 'チョキ') {
// 以下、チョキとパーのコード省略...
}