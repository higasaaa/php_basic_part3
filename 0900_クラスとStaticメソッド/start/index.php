<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereTolive = 'Earth'; //静的プロパティや静的メンバーと呼ばれる。$whereToliveはクラス内で保持される変数となるため、
    //全てのオブジェクトで共通して設定される値を保持する時に使う
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        static::bye(); //クラス内でstaticメソッドを使用する際は、クラス名では無く、staticを記述する（一般的）。self（自クラス）でもok
        return $this;
    }

    static function bye() { //staticメソッドはクラス自体に登録するメソッド
        echo 'bye, ';
        
    }
}

$bob = new Person('Bob', 18);
$bob->hello(); //static::byeを呼び出している
Person::$whereTolive; //public static $whereTolive = 'Earth'を呼び出している。

// Person::bye(); //staticメソッドを呼び出す時は、基本的にはクラス名を使用する
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();