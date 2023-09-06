<link rel="stylesheet" type="text/css" href="bayve.css">
<div>
    <a href="index.php?action=create">THÊM MỚI</a>
</div><br>
<table border="1">
<tr>
    <th>STT</th>
    <th>DANH SÁCH KHÁCH HÀNG</th>
    <th>ĐỊA CHỈ</th>
    <th>SÔ ĐIỆN THOẠI</th>
    <th>EMAIL</th>

    <th>TUỲ CHỌN</th>
</tr>
<?php
    foreach ($items as $r) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
<tr>
<td><?php echo $r['id']; ?> </td>
<td><?php echo $r['customer_name']; ?> </td>
<td><?php echo $r['address']; ?> </td>
<td><?php echo $r['phone']; ?> </td>
<td><?php echo $r['email']; ?> </td>
<td>


    <a href="index.php?action=edit&id=<?php echo $r['id']; ?> " class="btn btn-blue">SỬA</a>
    <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="btn btn-red">XEM</a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?action=destroy&id=<?php echo $r['id']; ?>" >XOÁ</a>

</td>


</tr>
        <!-- Kết thúc vòng lặp -->
        <?php endforeach; ?>
</table>