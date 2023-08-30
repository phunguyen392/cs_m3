<?php
echo "<pre>";
print_r($row);
?>
<table border="1">
    <tr>
    <th>STT</th>
        <th>TÊN SẢN PHẨM THUỐC</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CẢ</th>
        <th>HÌNH ẢNH</th>
        <th>TÊN DANH MỤC</th>
    </tr>
    <tr>
    <td><?= $row['id'];?></td>
        <td><?= $row['name'];?></td>
        <td><?= $row['quantity'];?></td>
        <td><?= $row['price'];?></td>
        <td><img width="100" src="<?php echo ROOT_URL.$r['image']; ?>" alt=""></td>

        <td><?= $row['name'];?></td>
    </tr>
   
</table>