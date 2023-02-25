<?php
//配列
/*$country_1 ="America";
$country_2 ="Japan";
$country_3 ="China";
$country_4 ="Korea";

echo $country_1;
echo '<br>';
echo $country_2;
echo '<br>';
echo $country_3;
echo '<br>';
echo $country_4;*/

/*$countries=["America","Japan","china","Korea"];

echo $countries[0];
echo '<br>';
echo $countries[1];
echo '<br>';
echo $countries[2];
echo '<br>';
echo $countries[3];
echo '<br>';

var_dump($countries);*/

//連想配列
//$fruits=["りんご", "みかん", "ぶどう"];
/*$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

echo $fruits["apple"];
echo '<br>';
echo $fruits["orange"];
echo '<br>';
echo $fruits["grape"];
echo '<br>';
var_dump($fruits);*/

//配列、連想配列への要素の追加
$fruits = ["りんご", "みかん", "ぶどう"];

//$fruits[3]="もも";
$fruits[]="もも";

//連想配列の場合
$fruits["peach"] = "もも";

?>