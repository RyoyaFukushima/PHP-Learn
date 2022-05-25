<?php 
// DB接続

// こういう処理は規模が大きくなるとORMなどを用いる
function insertContact($request){
    require 'db_connection.php';
    $params = [
        'id' => null,
        'your_name' => $request['your_name'],
        'url' => $request['email'],
        'gender' => $request['url'],
        'age' => $request['age'],
        'contact' => $request['contact'],
        'created_at' => null
    ];
// INSERTして保存
/*$params = [
    'id' => null,
    'your_name' => 'TESTNAME2',
    'url' => 'http://testexdff.io',
    'gender' => '1',
    'age' => '2',
    'contact' => 'AAA AAA BB',
    'created_at' => null
];*/
    $count = 0;
    $columns = '';
    $values = '';

    foreach(array_keys($params) as $key){
        if($count++>0){ // if($count > 0){ $count++;}と同じ
           $columns .= ',';
           $values .= ',';
        }
        $columns .= $key;
        $values .= ':'.$key;
        }

    $sql = 'insert into contacts(' . $columns . ')values(' . $values . ')';

    //var_dump($sql);

    $stmt = $pdo -> prepare($sql);
    $stmt -> execute($params);
}
?>