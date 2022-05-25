<?php 

class A{
    public function a(){
        echo 'A-classのメッセージ';
    }
}
// インスタンス
$a_instance = new A();
$a_instance -> a();

echo '<br>';
// 継承
class B extends A{
    // オーバーライド
    // コメントアウトするとA-classのメッセージのまま
    public function a(){
        echo 'B-classで上書きした。';
    }
}

$b_instance = new B();
$b_instance -> a();

// 抽象クラス インターフェイス // 設定するメソッドを強制する
abstract class AbClass{
    function abmethod(){
        // task
    }
    // 継承してメソッドを使う(絶対に使わないといけない)
    abstract function doSomething();
}

interface HogeInterFace{
    // メソッドのみかける
    public function getHogeInfo();
}
// 継承するインターフェースは, で区切って複数使える
class UseInterface implements HogeInterFace{
    function getHogeInfo(){
        echo 'Hoge';
    }
}
echo '<br>';
// トレイト クラスの継承を使わずにコードの再利用を行うための仕組み
trait HogeTrait{
    function say(){
        echo 'Im trait';
    }
}
class UseTrait{
    use HogeTrait;
}

$traittest = new UseTrait();
$traittest -> say();
?>