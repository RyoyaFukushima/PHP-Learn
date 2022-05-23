<?php
// forは繰り返す数が決まっていたら
// whileは繰り返す数が決まっていなかったら

for($i = 0; $i < 10; $i++){
    echo $i;
}

echo '<br>'; // 改行

// whileの時は先に初期値を宣言しておく
$j = 0;
while($j < 10){
    echo $j;
    $j++;
}
?>
