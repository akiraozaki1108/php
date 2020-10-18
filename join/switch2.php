// あいこ条件
if ($player === $com) {
    $result = 'あいこ';
// 勝ち条件
} elseif (
    $player === 'グー' && $com === 'チョキ' ||
    $player === 'チョキ' && $com === 'パー' ||
    $player === 'パー' && $com === 'グー'
    ) {
    $result = '勝ち';
// どの条件とも一致しない（負け）
} else {
    $result = '負け';
}