<?php
// 条件分岐を活用し、トランプの High&Low ゲームを作ってみましょう。
// ＜条件＞

// 自身と相手プレイヤーにそれぞれ 1~13 の数字をランダムで与える。
// 「あなたの数字は ◯◯ です。High か Low を選んでください」というメッセージで入力させる。
// High＆Low の条件に従い分岐をさせ、自身が勝った場合、負けた場合でメッセージを出力。
// 条件外の入力がされた場合のエラーをしっかりと考え、処理をする。
// input データの取得は以下のコードを参考にしてください。

$scoreA = 0;
$scoreB = 0;

for ($i = 1; $i <= 26; $i++) {
    $a = rand(1, 13);
    $b = rand(1, 13);
    echo 'あなたの数字は' . $a . 'です。HighかLowを入力してください。';
    $input = trim(fgets(STDIN));

    if ($a > $b) {
        $result = 'high';
    } elseif ($a < $b) {
        $result = 'low';
    } else {
        $result = false;
        $isDraw = true;
    }

    echo $a . ', ' . $b . ', ' . $result . ' ';

    if (strtolower($input) === 'high' || strtolower($input) === 'low') {
        if ($isDraw) {
            echo 'Draw! ';
        } elseif (strtolower($input) === $result) {
            echo 'Correct! ';
            $scoreA += 2;
        } else {
            echo 'Incorrect! ';
            $scoreB += 2;
        }
        echo 'Turn' . $i . ' You:' . $scoreA . ' Opponent:' . $scoreB . ' ';
        $isDraw = false;
    } else {
        echo 'Error!';
        $i--;
    }
}

if ($scoreA > $scoreB) {
    echo 'You won!';
} else {
    echo 'You lost!';
}

?>
