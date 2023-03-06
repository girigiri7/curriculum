<?php
/*$fruits=["りんご", "みかん", "もも"];

echo $fruits[0];
echo $fruits[1];
echo $fruits[2];*/

//配列の中の要素を全て出力する<foreach>
$fruits = ["りんご", "みかん", "もも"];

foreach($fruits as $value){
  echo $value;
  echo '<br>';
}

$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];

foreach($fruits as $key=>$value){
  echo $key;
  echo $value;
  echo '<br>';
}