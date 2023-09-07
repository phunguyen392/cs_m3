<form action="index.php?controller=order&action=store" method="post" ><br>
<label>TÊN KHÁCH HÀNG:</label><br>

<select name="customer_id" style="width:177px;">
<?php foreach ($customers as $customer) : ?>
          <option value="<?php echo $customer['id']; ?>"><?php echo $customer['customer_name']; ?></option>
        <?php endforeach; ?>
      </select><br><br>      

    NGÀY ĐẶT HÀNG:<br> <input type="date" name="order_date"> <br><br>
    TỔNG TIỀN:<br><input type="number" name="total_amount"> <br><br>
   
  <br><br>
    <button type="submit" value="THÊM MỚI">THÊM MỚI</button>
  <button> <a href="index.php?controller=order&action=index">QUAY LẠI</a></button>

</form>