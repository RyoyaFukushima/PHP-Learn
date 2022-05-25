<?php 
require 'db_connection.php';
// ユーザーの入力がない時 query
$sql = 'select * from contacts where id=2';
$stmt = $pdo->query($sql); // sqlの実行
$result = $stmt -> fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';
// ユーザーの入力がある時 sqlインジェクション対策
$sql = 'select * from contacts where id= :id'; // プレースホルダ
$stmt = $pdo -> prepare($sql);
$stmt -> bindValue('id', 3, PDO::PARAM_INT);
$stmt -> execute();
$result = $stmt -> fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション まとまった更新処理 最たる例で出てくるのは銀行の残高系の処理
$pdo -> beginTransaction();

try{
    $sql = 'select * from contacts where id= :id'; // プレースホルダ
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindValue('id', 3, PDO::PARAM_INT);
    $stmt -> execute();

    $pdo -> commit();
} catch(PDOException $e){
    $pdo -> rollback();
}
?>
