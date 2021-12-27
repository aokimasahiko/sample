<?php
function times2($number){
    return $number*2;
}
echo "\n";
function kadai02($a, $b) {
    return $a +$b ;
}
echo kadai02(100, 32);
echo "\n";
function kadai03($arr) {
    $result = 1;
    foreach($arr as $value){
        $result *= $value;
    }
    return $result;
}
echo kadai03([1, 3, 5, 7, 9]);
echo "\n";
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($a > $max_number){
            $max_number = $a;
        }
        //どうしたらいいかわからない・・・・
    }
    return $max_number;
}
echo max_array([3, 10, 20, 5, 2]);
?>