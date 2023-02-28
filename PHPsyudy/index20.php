<?php
//ceil（切り上げ）
$x=5.2;
echo ceil($x);

echo '<br>';
//floor（切り捨て）
echo floor($x);

echo '<br>';
//round（四捨五入）
echo round($x);

echo '<br>';
//pi（円周率）
echo pi();

echo '<br>';
function circleArea($r){
  $circle_area=$r*$r*pi();
  echo $circle_area;
}
// 半径が2の円の面積の計算
circleArea(2);

echo '<br>';
//mt_rand（乱数）
echo mt_rand(1,100);
?>