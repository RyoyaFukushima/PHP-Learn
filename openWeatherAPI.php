<?php
// OpenWeatherAPIを使って現在の仙台の天気を取得してみる

$testurl = 'https://api.openweathermap.org/data/3.0/onecall?lat=33.44&lon=-94.04&exclude=hourly,daily&appid=54a2e41241a1040e54ef1f234b60a008';
$res = file_get_contents($testurl);
$weather = json_decode($res, true);

echo $weather;
?>