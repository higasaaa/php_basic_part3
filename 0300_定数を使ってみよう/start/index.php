<?php
/**
 * 定数の使い方
 * 
 * - define, constでの定義方法
 * - constはif文や関数の中では使えない
 * - defineではグローバルスコープに値が配置される
 * - constは名前空間内に配置される（名前空間のレクチャーで紹介）
 */

 if(!defined('TAX_RATE')) { //既に定数が確認されているか確認するときに使用（defined）。!defined定義されていないときに定義するという意味。
    // const TAX_rate = 0.1; //定数は上書きできない。if文の中でしようできない
    define('TAX_RATE', 0.1); //if文の中でもしようできる
 }

function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
$price = with_tax(1000, 0.08);
echo $price;