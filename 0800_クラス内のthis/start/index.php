<?php 
class Person
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name; //クラス内で使うthisという変数はインスタンス化されたオブジェクトのことを指す($bob)
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name; //$thisは＄bobのこと
        return $this;
    }

    function bye() {
        echo 'bye, ' . $this->name; 
        return $this;
    }

}

$bob = new Person('Bob', 18);
$bob->hello()->bye(); //チェーンメソッドというhelloの後にbyeが実行される

// $tim = new Person('tim', 32);
// $tim->hello();