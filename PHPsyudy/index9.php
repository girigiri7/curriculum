<?php

//while
$num=0;
while($num < 10){
  echo $num;
  $num++;
}

echo '<br>';

//do...while
$num=0;
do{
  echo $num;
  $num++;
}while($num <10);

echo '<br>';

//for
for($i=0;$i<10;$i++){
  echo $i;
}

echo '<br>';

//breakは繰り返しを途中で終了
$num=0;
while($num < 10){
  echo $num;
  $num++;
  if($num ==5){
    break;
  }
}