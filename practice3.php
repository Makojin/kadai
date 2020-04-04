<?php
function a($num){
   return $num*2;
}
echo a(5);

function b($a,$b){
   return $a+$b;
    
}
echo b(2,5);

function c($arr){
    $result=1;
    foreach($arr as $b){
    $result*=$b;
}
    return $result;
    
}

echo c(array(1,3,5,7,9));

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number<$a){
     $max_number=$a;
 }
 
     
     
 }

 return $max_number;
 }
 
echo max_array(array(5,7,8,3,4));

//HTMLタグを取り除く
$str="<h1>HTMLを取り除く</h1>";
echo $str;

//要素に追加する
$family=array("父","母","子");
array_push($family,"犬");
print_r($family);

//要素を結合する
$family=array("父","母","子");
$family2=array("祖父","祖母");
$family=array_merge($family,$family2);

print_r ($family);

//timeは現在時刻を、mktimeは時間を指定してタイムスタンプを取得できる

$current_time=time();
echo $current_time;

$past_time=mktime(0,0,0,11,17,1992);
echo $past_time;
//時、分、秒、月、日にち、西暦の順


//dateは現在の日付の取得ができる
echo date("y/m/d");
