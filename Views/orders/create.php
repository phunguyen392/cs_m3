<form action="index.php?controller=order&action=store" method="post" ><br>
<label>TÊN KHÁCH HÀNG:</label><br>

<select name="customer_id" style="width:177px;">
<?php foreach ($items as $row) : ?>
          <option value="<?php echo $row['customer_id']; ?>"><?php echo $row['customer_id']; ?></option>
        <?php endforeach; ?>
      </select><br><br>      

    NGÀY ĐẶT HÀNG:<br> <input type="date" name="order_date"> <br><br>
    TỔNG TIỀN:<br><input type="number" name="total_amount"> <br><br>
   
  <br><br>
    <input type="submit" value="THÊM MỚI">
</form>