<?php
//count（要素の数を数える）
$members=["tanak","sasaki","kimura","yoshida","uchida"];
echo count($members);

//sort（要素の並べ替え）
// アルファベット順に並び変わった
echo '<br>';
sort($members);
var_dump($members);

//数字も小さい順に並び変わった
echo '<br>';
$numbers=[26,17,67,45];
sort($numbers);
var_dump($numbers);

//sortは主に配列で使用します
//連想配列用の並び替えメソッドもあり

//in_array（配列の中にある要素が存在しているか）
echo '<br>';
//var_dump(in_array("tanaka",$members))
$members=["tanaka","sasaki","kimura","yoshida","uchida"];
if(in_array("tanaka",$members)){
  echo "田中さんがいるよ！";
}else{
  echo "田中さんはいないよ！";
}

//implode（配列を結合して文字列に変換）
echo '<br>';
$atstr=implode("@",$members);
var_dump($atstr);

//explode（文字列を指定の区切りで配列にする）
//explodeはimplodeの逆です。
echo '<br>';
$re_members=explode("@",$atstr);
var_dump($re_members);

echo '<br>';
$str="1,2,3,4,5";
$array=explode(",",$str);
var_dump($array);
