<?php
/**
 * ファイル分割の方法を学ぼう
 * 
 * - require(絶対に必要なファイルを読み込む例:関数などを読み込む)エラー内容は致命的なとなる。
 * - include(最悪無くても動くファイルを読み込む例:htmlなどのテンプレートを読み込む)エラー内容は、warnigとなる。
 * - require、require_onceの使い方
 */
$arry = [
    'num' => 0
];

require 'file.php'; //ファイルを読み込む記述　こんな書き方もできる
// require('file1.php'); //ファイルを読み込む記述
// require('file1.php'); //ファイルを読み込む記述
// require_once('file2.php'); //require_onceを使うと、１回しかファイルが読み込まれなくなる。
// require_once('file2.php'); //require_onceを使うと、１回しかファイルが読み込まれなくなる。
// require_once('file2.php'); //require_onceを使うと、１回しかファイルが読み込まれなくなる。
// fn1(); //実行する記述
echo $arry['num'];