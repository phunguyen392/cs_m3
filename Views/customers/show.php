<link rel="stylesheet" type="text/css" href="bayve.css">
<table border="1">
<tr>
    <th>STT</th>
    <th>TÊN KHÁCH HÀNG</th>
    <th>ĐỊA CHỈ</th>
    <th>SỐ ĐIỆN THOẠI</th>
    <th>EMAIL</th>
    <th>TUỲ CHỌN</th>
    

</tr>
<tr>
    <td><?=$row['id'];?></td>
    <td><?=$row['customer_name'];?></td>
    <td><?=$row['address'];?></td>
    <td><?=$row['phone'];?></td>
    <td><?=$row['email'];?></td>

  <td>  <a href="index.php?controller=customer&action=index">QUAY LẠI</a></td>
</tr>

</table>