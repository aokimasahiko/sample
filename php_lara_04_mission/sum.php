<?php
function kadai01($value){
    return $value*2;
}
echo kadai01(10);
echo "\n";
function kadai02($a, $b){
    return $a +$b ;
}
echo kadai02(20,40);
echo "\n";
function kadai03($arr){
    $result = 1;
    foreach($arr as $value){
        $result *= $value;
        }
        return $result;
}
echo kadai03([1, 3, 5, 7, 9]);
echo "\n";
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
     if($a > $max_number){
         $max_number = $a;
     }
 }
 return $max_number;
 }
 echo max_array([3, 15, 35, 21, 7]);
 echo "\n";
 $text = '<h>乗り換えのご案内</h>
 <p1>JR線</p1>
 <p2>東急線</p2>
 <p3>相鉄線</p3>
 <p4>みなとみらい線</p4>';
 echo strip_tags($text);
 echo "\n";
 $stack = array("curry", "spagetti", "rice");
 array_push($stack, "bread", "pizza");
 print_r($stack);
 echo "\n";
 $array1 = array("train" => "odakyu", 6, 23);
 $array2 = array("a", "b", "train" => "seibu", "shape" => "square", 15);
 $result = array_merge($array1, $array2);
 print_r($result);
 echo "\n";
 $nextWeek = time() + (7*24*60*60);
 echo 'Now: '. date('Y-m-d') ."\n";
 echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
 echo "\n";
 date_default_timezone_set('UTC');
 echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
 echo "\n";
 date_default_timezone_set('UTC');
 echo date("l");
?>