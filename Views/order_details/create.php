<form action="index.php?controller=order_detail&action=store" method="post" ><br>
<label>NGÀY THÁNG:</label><br>

<select name="order_id" style="width:177px;">
<?php foreach ($orders as $order) : ?>
          <option value="<?php echo $order['id']; ?>"><?php echo $order['order_date']; ?></option>
        <?php endforeach; ?>
      </select><br><br>   
      
      <label>TÊN THUỐC:</label><br>

<select name="product_id" style="width:177px;">
<?php foreach ($products as $product) : ?>
          <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></option>
        <?php endforeach; ?>
      </select><br><br>  

  


        GIÁ ĐƠN THUỐC:<br> <input type="number" name="order_quantity"> <br><br>
        SỐ LƯỢNG THUỐC TRONG ĐƠN :<br><input type="number" name="order_price"> <br><br>
   
  <br><br>
<button> <a href="index.php?controller=order_detail&action=index">QUAY LẠI</a></button>

    <button type="submit" value="THÊM MỚI">THÊM MỚI</button>
</form>