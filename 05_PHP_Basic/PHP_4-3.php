<?php
// ２教科のテストの点数をランダムで生成して、以下の条件に応じて合格/不合格を表示してください
// 両方とも 60 点以上の場合　合格
// 合計が 130 点以上の場合　合格
// 合計が 100 点以上かつ　どちらかのテストが 90 点以上であれば合格
// 上記以外は不合格
$a = rand(0, 100);
$b = rand(0, 100);
$c = $a + $b;
echo 'a=' . $a . ', b=' . $b . ', a+b=' . $c . '<br>';
if ($a >= 60 && $b >= 60) {
    echo '合格';
} elseif ($a + $b >= 130) {
    echo '不合格';
} elseif ($a + $b >= 100 && ($a >= 90 || $b >= 90)) {
    echo '不合格';
} else {
    echo '不合格';
}
?>
