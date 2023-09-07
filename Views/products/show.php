<!-- <?php
echo "<pre>";
print_r($row);
?> -->
<table border="1">
    <tr>
        <th>STT</th>
        <th>TÊN SẢN PHẨM THUỐC</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CẢ</th>
        <th>HÌNH ẢNH</th>
        <th>TRẠNG THÁI</th>
        <th>TÊN DANH MỤC</th>

        <th>TÙY CHỌN</th>

    </tr>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['quantity']; ?></td>
        <td><?= $row['price']; ?></td>
        <td><img width="100" src="<?php echo ROOT_URL.$row['image']; ?>" alt=""></td>
        <td>
    <?php
    if($row['status'] == 0) {
        echo 'Hết hàng';
    } else {
        echo 'Còn hàng';
    }
    ?>
</td>
        <td><?= $row['category_name']; ?></td>
  <td>  <a href="index.php?controller=product&action=index"><button type="button" class="btn btn-warning">QUAY LẠI</button></a></td>

    </tr>

</table>