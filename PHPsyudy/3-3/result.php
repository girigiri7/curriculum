<?php
$my_name=$_POST['my_name'];
$number=$_POST['number'];
$result=($number * mt_rand(1,6));

/*$timezone_list = DateTimeZone::listIdentifiers();

foreach($timezone_list as $val){
  echo $val.'<br>';
}*/

 echo date("Y-m-d H:i:s",time()); 
 echo '<br>';
 echo "名前は".$my_name."です。";  
 echo '<br>';
 echo "番号は".$result."です";
 echo '<br>';
 echo "結果は";

 if($result<=10){
  echo "凶";
}elseif($result<=15){
  echo "小吉";
}elseif($result<=20){
  echo "中吉";
}elseif($result<=25){
  echo "吉";
}elseif($result<=36){
  echo "大吉";
}elseif($result>=37){
  echo "残念";
}
?>