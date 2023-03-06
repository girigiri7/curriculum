<?php
$x=5; //代入演算子 「 右辺を左辺に代入しなさい 」

//文字列の 連結演算子 
echo "hello"."world";
echo '<br>';

$hello="Hello";
$world="World";
echo $hello.$world;
echo '<br>';

echo 1 + 1;
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;
echo '<br>';

// 単項演算子
// $x = $x + 1
$x++;
echo $x;
echo '<br>';

// $x = $x - 1
$x--;
echo $x;
echo '<br>';

// 自分自身に5を足す
$x=0;
$x+=5;   // $x = $x + 5;
echo $x;
echo '<br>';

$x*=5;  // $x = $x * 5;
echo $x;