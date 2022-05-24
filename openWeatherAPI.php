<?php
// OpenWeatherAPIを使って現在の仙台の天気を取得してみる
// TODO:GitHubに上げる場合はAPIKEYを隠す
$url = 'https://api.openweathermap.org/data/2.5/weather?q=Sendai&units=metric&APPID=APIKEY';
$res = file_get_contents($url);
$res_json = json_decode($res, true);
// 天気部分をパースして取得
$weather = $res_json['weather'][0]['main'];
// 気温部分をパースして取得
$temp = $res_json['main']['temp'];
// 英語の結果を日本語に簡易的に変換
$jpweather = match($weather){
    'Clear' => '晴れ',
    'Clouds' => '曇り',
    'Rain' => '雨',
    'Snow' => '雪'
};

echo '簡易天気表示';
echo '<br>';
echo '現在の仙台の天気は' . $jpweather . '。';
echo '気温は'. strval($temp) .'度です。';
?>
