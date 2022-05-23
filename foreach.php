<?php
// 複数の値の時

$members = [
    'name' => '福島',
    'height' => 176,
    'hobby' => 'テニス'
];

// valueのみ表示する
foreach($members as $member){
    echo $member;
}

echo '<br>';

// key/valueの両方を表示する
foreach($members as $key => $value){
    echo $key. 'は' . $value . 'です';
}

echo '<br>';
// 連想配列の場合
$members_2 = [
    'foo' => [
        'height' => 190,
        'hobby' => 'サッカー'
    ],
    'bar' => [
        'height' => 167,
        'hobby'  => 'ガーデニング'
    ]
];

foreach($members_2 as $member_1){
    foreach($member_1 as $member){
        echo $member;
    }
}

echo '<br>';
foreach($members_2 as $member_1){
    foreach($member_1 as $member => $value){
        echo $member . 'は' . $value . 'です';
    }
}
?>