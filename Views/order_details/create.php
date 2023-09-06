<form action="index.php?controller=order_detail&action=store" method="post" ><br>
<label>MÃ ĐƠN HÀNG:</label><br>

<select name="order_id" style="width:177px;">
<?php foreach ($items as $row) : ?>
          <option value="<?php echo $row['order_id']; ?>"><?php echo $row['order_id']; ?></option>
        <?php endforeach; ?>
      </select><br><br>   
      
      <label>MÃ SẢN PHẨM:</label><br>

<select name="product_id" style="width:177px;">
<?php foreach ($items as $row) : ?>
          <option value="<?php echo $row['product_id']; ?>"><?php echo $row['product_id']; ?></option>
        <?php endforeach; ?>
      </select><br><br>  

  


        GIÁ ĐƠN THUỐC:<br> <input type="number" name="order_quantity"> <br><br>
        SỐ LƯỢNG THUỐC TRONG ĐƠN :<br><input type="number" name="order_price"> <br><br>
   
  <br><br>
    <input type="submit" value="THÊM MỚI">
</form>