<?php
//UNIXタイムスタンプについて
//「1970年1月1日午前0時0分0秒」から、何秒経過しているか 表した数値です。
//UNIXは、UNIX系OSの意味です。

//time（現在時刻を取得）
echo time();  //「1970/1/1 00:00:00からの経過秒数」
echo '<br>';
var_dump(time());

//date（タイムスタンプから日付に戻す）
// 現在時刻を取得
echo '<br>';
echo date("Y-m-d H:i:s",time());
echo '<br>';
echo date("Y年m月d日 H時i分s秒",time());

//strtotime（特定日付のタイムスタンプを取得）
echo '<br>';
echo strtotime("2017/2/16 11:25:00");

//日付ではない指定方法
// 先週の日曜日
echo '<br>';
echo strtotime("last Sunday");

// 2日後
echo '<br>';
echo strtotime("+2 day");