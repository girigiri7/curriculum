<?php
//strlen（文字列の長さ）
$str="hogehoge";
echo strlen($str);

//strpos（検索）
echo '<br>';
$str="yoneyama";
echo strpos($str,"a");

//substr（文字列の切り取り）
echo '<br>';
$str="yoneyama";
echo substr($str, -2,2);

//str_replace（置換）
echo '<br>';
$str="yoneyama";
echo str_replace("neya","NEYA",$str);

echo '<br>';
$str="I am Yoneyama";
echo str_replace(" ","",$str);

//日本語において、文字列操作の関数を使用する場合
echo '<br>';
$str="あいうえお";
echo strlen($str);

//マルチバイト文字列 
echo '<br>';
echo mb_strlen($str);

//printf（フォーマット化した文字列を出力）
echo '<br>';
$name = "米山さん";
$limit_number = 40;
//echo $name."の残り時間はあと".$limit_number."です";

printf("%sの残り時間はあと%dです", $name, $limit_number);

/*%s、%dは %記法 と呼び、何のデータ型で入るか指定してあげます。

・%s…文字列
・%d…数値*/

echo '<br>';
$name = "米山さん"; 
$limit_time = 40;
$price = 4000; 
printf("%sはあと%d時間で%dの罰金です。", $name,$limit_time, $price);

echo '<br>';
$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo '<br>';
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

//sprintf（変数に代入できるprintf）
//printfはechoと同様出力をしますが、sprintfはフォーマット化して終わりです。

echo '<br>';
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

// sprintfだけでは出力までできない
echo '<br>';
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;