<?php 
// パスワードを記録したファイルの場所
echo __FILE__;
// パスワード暗号化
echo '<br>';
echo(password_hash('password1234', PASSWORD_BCRYPT));
?>