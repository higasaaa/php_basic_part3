<?php
/**
 * パスの書き方について学ぼう
 * 
 * - マジック定数 __DIR__, __FILE__を使ってみよう
 * - dirnameの使い方を学ぼう
 * - 相対パスと絶対パス
 * - \と/は使い分けよう
 * - "と'は使い分けよう
 */
// echo __FILE__; //自動的に実行中のファイルまでのパスが格納されることになる_DIR_,_FILE_
// require './sub/file2.php'; //相対パス ./無しでもok

// echo __FILE__;
// require __DIR__ . '/file2.php'; //絶対パス__DIR__ を使う（__DIR__ にはフォルダまでのパスが入っているのでパス部分は少し省略できる）

// echo dirname(__FILE__); //echo dirname(__FILE__, 2);とすると、階層が２個上がったパスが表示される
// require __DIR__ . '/file2.

echo __DIR__ . '/../start/sub/file2.php'; 
require __DIR__ . '/../start/sub/file2.php'; //requireの関数を使うと、絶対パスと相対パスが混在したような書き方でも許容してくれるため、注意してパスを記述する。