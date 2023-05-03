<?php
/**
 * 条件分岐を省略して記述してみよう
 * 
 * - 三項演算子の使い方
 * - null合体演算子
 */
$arry = [
    // 'key' => 10,
];

// if(isset($arry['key'])) {
//     // $arry['key'] *= 10;
// } else {
//     $arry['key'] = 1;
// }
// $arry['key'] = isset($arry['key']) ? $arry['key'] * 10 : 1; //上記で書いたif文を１行にまとめることができる。三項演算子
// echo $arry['key'];


// if(isset($arry['key'])) {
//     // $arry['key'] *= 10;
// } else {
//     $arry['key'] = 1;
// }
// $arry['key'] = isset($arry['key']) ? $arry['key'] : 1;　//下記の一文を三項演算子でかくとこの一文になる
$arry['key'] = $arry['key'] ?? 1; //？？null合体演算子　値がnullだった場合1を代入するということ
echo $arry['key'];
