<?php
$name = "Makoto";
if ($name="Makoto") {
echo "私はあなたの名前です";
} else {
echo "あなたの名前ではありません";    
}

$total = 0;
echo "$total";
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruits  = array("apple", "orange", "lemon", "banana", "grape");
foreach($fruits as $fruits){
    echo "要素は". $fruits;
    echo "\n";
}

$start = 1;
$end = 101;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  };
};

