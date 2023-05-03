<?php
/**
 * クラス継承
 */
abstract class Person //abstractをつけると必ず継承して使わなければならない
{
    protected $name; 
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$WHERE; //親クラス自信を呼び出す
        echo static::$WHERE; //子クラスに指示している場合は、子クラスのものを呼び出す

    }

    // final function hello() { //継承先で変更されたくないメソッドはfinalをつける。
    //     echo 'hello, ' . $this->name;
    //     return $this;
    // }

    abstract function hello(); //abstractは継承先で必ず実行佐瀬邸ときに使う。その場合はクラス名の先頭にabstractをつける。

    static function bye() {
        echo 'bye';
    }
}
class Japanese extends Person { 

    // public static $WHERE = '日本';

    function __construct($name, $age)
    {
        parent::__construct($name, $age); //この記述で親の__constructを呼ぶことができる。
        // $this->name = $name;
        // $this->age = '30';  
    }
    function hello() {
        echo 'こんにちは, ' . $this->name;
        return $this;
    }
    function jusho() {
        echo '住所は, ' . parent::$WHERE . 'です。';
        return $this;
    }
}

$taro = new Japanese('太郎', 18);
// $taro->hello();
$taro->jusho();
// echo $taro->age;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();