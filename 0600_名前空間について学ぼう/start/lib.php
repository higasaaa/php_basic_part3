<?php
namespace lib; //関数、定数、クラスを名前空間に登録することができる。

// if(!defined('TAX_RATE')) {
//     define('TAX_RATE', 0.1);
// }

const TAX_RATE = 0.1; //名前空間を利用したい場合はconstを使用する。現在、namespaceのlibという名前空間に定数が登録されている。
    
function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

// my_echo(); //グローバル空間内に配置された、関数や定数は\は要らない。

my_echo(); //関数や定数の場合は\は不要
new \GlobalCls();//class GlobalClsをlibのグローバル空間から呼び出したい場合は、\が必要
