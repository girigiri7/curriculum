<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
<form action="result.php" method="post">
  名前：<input type="text" name=my_name>
  <br>
  <select name="number">
    <?php for($i=1;$i<=6;$i++){ ?>
      <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
      </option>
    <?php } ?>
  </select>
  <input type="submit" value="送信するよ！">
</form>
</body>
</html>