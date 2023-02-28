<form action="result.php" method="post">

  お名前：<input type="text" name="my_name">
  <br>
  ご希望商品：
  <input type="radio" name="product" value="A">A
  <input type="radio" name="product" value="B">B
  <input type="radio" name="product" value="C">C
  <br>
  個数：
  <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
  </select>
  <br>

  <input type="submit" value="申込">
</form>