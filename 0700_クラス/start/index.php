<?php 
/**
 * クラスの基礎
 */
class Person
{
    private $name; //アクセスするキーワードを先頭につける。privateは外から呼び出すことができない
    public $age;

    function __construct($name, $age) //__constructはnewを使用した時にphpによって自動的に呼ばれる関数
    {
        $this->name = $name; //上記で渡ってきた引数を$thisを使って、それぞれのプロパティに格納していく
        $this->age = $age; 
    }

    function hello() { //先頭にキーワードが何もついていない場合は、外からでもアクセスができる（publicが省略されている）
        echo 'hello, ' . $this->name;
    }
}
$bob = new Person('Bob', 18); 
// echo $bob->age;
 $bob->hello();