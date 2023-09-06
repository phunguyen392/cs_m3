<form action="index.php?action=update&id=<?= $row['id'];?>" method="post" >
<label for="customer_name">DANH SÁCH KHÁCH HÀNG:</label><br>
<input type="text" id="customer_name" name="customer_name" value="<?= $row['customer_name'];?>"><br><br>
<label for="address">ĐỊA CHỈ</label><br>
<input type="text" id="address" name="address" value="<?= $row['address'];?>"><br><br>
<label for="phone">SỐ ĐIỆN THOẠI</label><br>
<input type="number" id="phone" name="phone" value="<?=$row['phone'] ;?>"><br><br>
<label for="email">EMAIL:</label><br>
<input type="email" id="email" name="email" value="<?= $row['email'] ;?>"><br><br>

<input type="submit" value="Cập nhật">
</for>