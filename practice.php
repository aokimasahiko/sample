<?php
$name = "aoki";
if($name = "あなたの名前"){
    echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";
$total = 0;
echo $total;
for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple", "orange", "banana", "lemon", "grape");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo "$i";
    echo "\n";
  }
}
?>