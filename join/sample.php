if ($usr_hand == $com_hand) {
    echo "あいこ！ もう一度勝負だ！";
    print(PHP_EOL);
} else if($usr_hand == 0 && $com_hand == 1 || $usr_hand == 1 && $com_hand == 2 || $usr_hand == 2 && $com_hand == 0) {
    echo "プレイヤーの勝利！";
} else if($usr_hand == 0 && $com_hand == 2 || $usr_hand == 1 && $com_hand == 0 || $usr_hand == 2 && $com_hand == 1) {
    echo "プレイヤーの負け！";
}