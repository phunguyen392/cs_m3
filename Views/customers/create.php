<form action="index.php?controller=customer&action=store" method="post">
<label >DANH SÁCH KHÁCH HÀNG</label><br>
<input type="text" name="customer_name"><br><br>
<label>ĐỊA CHỈ</label><br>
<input type="text" name="address"><br><br>
<label>SỐ ĐIỆN THOẠI</label><br>
<input type="number" name="phone"><br><br>
<label>EMAIL:</label><br>
<input type="text" name="email"><br><br>
<?php if (isset($message)): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>
<br>
<input type="submit" value="THÊM MỚI">
</form>