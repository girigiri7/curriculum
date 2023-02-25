<?php
/*
//1) 底面10cm 高さ5cm
$base1=10;
$height1=5;
$area1=$base1 * $height1 / 2;

//2) 底面15cm 高さ8cm
$base2=15;
$height2=8;
$area2=$base2 * $height2 / 2;

//3) 底面8cm   高さ6cm
$base3=8;
$height3=6;
$area3=$base3 * $height3 / 2;*/

/*function getTriangleArea($base,$height){
  $area=$base * $height / 2;
  print "三角形の面積は".$area."だよ。";
  print '<br>';
}

getTriangleArea(10,5);
getTriangleArea(15,8);
getTriangleArea(8,6);*/

$myname="rudy";

function sayHi($name="goto"){
  $myname="php";
  return "Hi! ".$name." from ".$myname;
}

echo sayHi();
echo '<br>';
echo $myname;
//関数の外では、関数内での値の変更は無視されてしまいます。このような仕組みを 変数のスコープ といいます。
?>