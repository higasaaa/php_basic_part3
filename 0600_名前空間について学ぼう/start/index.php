<?php
/**
 * 名前空間について学ぼう
 * 
 * コードの格納場所
 */

// require_once 'lib.php';
// $price = \lib\with_tax(1000, 0.08); //名前空間から呼び出したい場合は\lib\(バックスラッシュ名前空間名を書く)
// // echo $price;
// echo \lib\TAX_RATE;

require_once 'lib.php';
use function lib\with_tax; //use functionを使用すると下記の一文に\lib\はいらなくなる
use const lib\TAX_RATE; //useを使用する場合は\(名前空間のグローバル空間を表す)はいらない
$price = with_tax(1000, 0.08); 
// echo $price;
echo \lib\TAX_RATE;

function my_echo() { //例えば、この記述はグローバル空間に登録されているということになる。

}
// \my_echo(); //名前空間を意識して呼び出すと、バックスラッシュが必要になる。

my_echo(); //グローバル空間内に配置された、関数や定数は\は要らない。
class GlobalCls {

}