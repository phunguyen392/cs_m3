<a href="index.php?action=create"> Them moi </a>
<table border="1">
<tr>
        <th>STT</th>
        <th>MÃ ĐƠN HÀNG</th>
        <th>MÃ SẢN PHẨM THUỐC</th>
        <th>GIÁ ĐƠN THUỐC</th>
        <th>SỐ LƯỢNG THUỐC TRONG ĐƠN</th>

        
        
        <th>TUỲ CHỌN</th>
    </tr>
    <tr>
           <!-- Bắt đầu lặp -->
    <?php
    foreach ($items as $r) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <td><?php echo $r['id'] ?></td>
        <td><?php echo $r['order_id'] ?></td>
        <td><?php echo $r['product_id'] ?></td>
        <td><?php echo $r['order_quantity'] ?></td>
        <td><?php echo $r['order_price'] ?></td>

        <td>
        <a href="index.php?action=edit&id=<?php echo $r['id']; ?> " class="btn btn-blue">SỬA</a>
    <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="btn btn-red">XEM</a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?action=destroy&id=<?php echo $r['id']; ?>" >XOÁ</a>
        </td>
    </tr>
 <!-- Kết thúc vòng lặp -->
 <?php endforeach; ?>
</table>