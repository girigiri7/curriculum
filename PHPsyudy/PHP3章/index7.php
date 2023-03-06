<?php
$age=22;

if($age>=20){
  echo "お酒が飲めるぞ！";
}else{
  echo "お酒は二十歳になってから！";
}

echo '<br>';
$age=18;

if($age>=20){
  echo "お酒が飲めるぞ！";
}else{
  echo "お酒は二十歳になってから！";
}

//論理値の条件分岐
echo '<br>';
$is_student=true;

if($is_student){
  echo "あなたは学生です。";
}

//複数条件の分岐
echo '<br>';
$age=24; // 年齢
$is_student=true; // 学生かどうか

if($age < 25 && $is_student){
  echo "学生パックが使えるよ";
}

echo '<br>';
if($age < 25 && $is_student){
  echo "学生パックが使えるよ";
}elseif($age < 25){
  echo "若者応援わり引が使えるよ";
}

echo '<br>';
// 例として、血液型を診断する条件分岐
$blood='B';
if($blood == 'A'){
  echo "A型です";
}elseif($blood == 'B'){
  echo "B型です";
}elseif($blood == 'O'){
  echo "O型です";
}elseif($blood == 'AB'){
  echo "AB型です";
}else{
  echo "A/B/O/ABから選択してください";
}
?>