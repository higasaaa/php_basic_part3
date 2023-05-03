<?php declare(strict_types=1); //declare(strict_types=1)ファイル全体がデータ型に対して厳密に検査するモード
/**
 * データ型とStrictモード
 */
function add1 (int $val): int { //このintに対して整数値以外が渡ってきた時にエラーになるようにする
    return $val + 1;
}
$result = add1(1);
var_dump($result);

// 以下の記述はこんなのあるんだくらいの気持ちでokだが、要復習
require_once 'person.php';
use animal\Person;
use animal\Japanese;

function callHelloMethod(Person $person): void {
    $person->hello();
}

$taro = new Japanese('太郎', 18);
callHelloMethod($taro);