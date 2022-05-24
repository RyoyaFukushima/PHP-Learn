<?php
/// $_GET, $_POSTはスーパーグローバル変数 param指定 $_GET['param']
/*if(!empty($_GET)){
    echo '<pre>';
    echo var_dump($_GET); // 変数を詳しく見る時はvar_dump()使う
    echo '</pre>';
}*/

// POST通信の場合はアドレスバーに表示されない。パスワードなどの表示するとまずい値の時に使う
if(!empty($_POST)){
    echo '<pre>';
    echo var_dump($_POST); // 変数を詳しく見る時はvar_dump()使う
    echo '</pre>';
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

<form method="POST" action="input.php">
氏名
<input type="text" name="your_name">
<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ


<input type="submit" value="送信">
</body>
</html>