<?php

//じゃんけん
do {
    $hand = array('0:グー','1:チョキ','2:パー');
    //print var_export($hand, true);
    print var_dump($hand);
    echo '0, 1, 2 から選べ : ';

    $usr_hand = (int)fgets(STDIN);
    $com_hand = array_rand($hand);
    print var_dump($hand[$usr_hand]);
    print(PHP_EOL);
    print var_dump($hand[$com_hand]);
    print(PHP_EOL);

    if ($usr_hand == $com_hand) {
        echo "あいこ！ もう一度勝負だ！";
        print(PHP_EOL);
    } else if($usr_hand == 0 && $com_hand == 1 || $usr_hand == 1 && $com_hand == 2 || $usr_hand == 2 && $com_hand == 0) {
        echo "プレイヤーの勝利！";
    } else if($usr_hand == 0 && $com_hand == 2 || $usr_hand == 1 && $com_hand == 0 || $usr_hand == 2 && $com_hand == 1) {
        echo "プレイヤーの負け！";
    }
} while($usr_hand == $com_hand);