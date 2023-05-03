<?php
if(!function_exists('fn1')) { //宣言されているか確認するための記述
    function fn1() {
        echo 'fn1 is called';
    }
}
// $arry['num'] = $arry['num'] + 1;
$arry['num']++; //上記の記述と同じになる