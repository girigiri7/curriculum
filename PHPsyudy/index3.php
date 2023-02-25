<?php
//index.php
// ダブルコーテーションで囲われているので文字列

$message="Hello World!";
echo $message;
echo '<br>';
var_dump ($message);
echo '<br>';

// echo $message;の次の行から続き

$x=8;
$y=5.55;

echo $x;
echo '<br>'; // 8を出力した後に改行
var_dump ($x);
echo '<br>';
echo $y;
echo '<br>';
var_dump ($y);

echo '<br>';
$flag=true;
var_dump($flag);

echo '<br>';
//$emp= ;// 右辺になにも記述しない <error>
$emp=null;// 右辺になにもいれない<ok>
var_dump($emp);

echo '<br>';//シングルバイト・マルチバイト
$en_words="Hello Wold";
var_dump($en_words);
echo '<br>';
$ja_words="こんにちは";//日本語1文字が、半角英数字3文字
var_dump($ja_words);
?>

