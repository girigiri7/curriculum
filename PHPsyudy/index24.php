<?php
/* 読み込み不可のときの処理
・読み込むファイルが存在しない
・データベースの処理において接続障害
・0で割り算をしたなど*/

//０で割り算をしたという事例で見てみましょう。

function devide($int1,$int2){
  try{
    if($int2 == 0){
      throw new Exception('0で割ることはできません。');
    }
    return $int1 / $int2;
  }catch(Exception $e){
    echo "例外処理が発生しました";
    echo "<br>";
    echo $e->getMessage();
  }
}
echo devide(5,0);