<!-- <?php
echo "<pre>";
print_r($row);
?> -->
<table border="1">
    <tr>
        <th>STT</th>
        <th>MÃ ĐƠN HÀNG</th>
        <th>MÃ SẢN PHẨM THUỐC</th>
        <th>GIÁ ĐƠN THUỐC</th>
        <th>SỐ LƯỢNG THUỐC TRONG ĐƠN</th>

        <th>TÙY CHỌN</th>
        
    </tr>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['order_id']; ?></td>
        <td><?= $row['product_id']; ?></td>
        <td><?= $row['order_quantity']; ?></td>
        <td><?= $row['order_price']; ?></td>


  <td>  <a href="index.php?action=index">QUAY LẠI</a></td>

    </tr>

</table>