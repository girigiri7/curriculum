<!-- GET通信  
送信したデータの値を見ることができるのがGETの特徴-->

<form action="result.php" method="post">
  名前:<input type="text" name="my_name" />
  <br>
  パスワード:<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form> 

<!-- POST通信
見られたくない、書き換えられたくないデータはPOSTで送信。
また、大量のデータを送信する場合もPOSTで送信します。 -->

