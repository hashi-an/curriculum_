<form action="result.php" method="post">
  お名前：<input type="text" name="po_name" /><br>
  ご希望商品：<input type="radio" name="po_gift" value="Ａ賞" />Ａ賞
             <input type="radio" name="po_gift" value="Ｂ賞" />Ｂ賞
             <input type="radio" name="po_gift" value="Ｃ賞" />Ｃ賞 <br>
  個数：
  <select name="po_quant">
    <?php for ($i=1;$i<=10;$i++){ ?>       //セレクトボックスに1～10を表示
      <option value="<?php echo $i; ?>">
        <?php echo $i; ?>
      </option>
    <?php } ?>
  </select>
  <br>     
  <input type="submit" value="送信するよ！" />
</form>
