<form action="index.php?action=update&id=<?= $row['id'];?>" method="post" >
    TÊN KHÁCH HÀNG:<br>
    <select name="customer_id" style="width:177px;">
    <?php foreach ($row as $item) : ?>
          <option value="<?php echo $row['customer_id']; ?>"><?php echo $row['customer_name']; ?></option>
        <?php endforeach; ?>
    </select><br><br>
    NGÀY ĐẶT HÀNG:<br> <input type="text" name="order_date" value="<?= $row['order_date'];?>"> <br>
    TỔNG TIỀN:<br><input type="text" name="total_amount" value="<?= $row['total_amount'];?>"> <br>



    
    <br>
    <input type="submit" value="Cập nhật">
</form>