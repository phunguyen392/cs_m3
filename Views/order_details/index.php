<a href="index.php?controller=order_detail&action=create"> THÊM MỚI </a>
<table border="1">
<tr>
        <th>STT</th>
        <th>NGÀY THÁNG</th>
        <th>TÊN SẢN PHẨM THUỐC</th>
        <th>GIÁ ĐƠN THUỐC</th>
        <th>SỐ LƯỢNG THUỐC TRONG ĐƠN</th>
        <th>ten kh</th>

        
        
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
        <td><?php echo $r['order_date'] ?></td>
        <td><?php echo $r['name'] ?></td>
        <td><?php echo $r['order_quantity'] ?></td>
        <td><?php echo $r['order_price'] ?></td>
        <td><?php echo $r['customer_name'] ?></td>


        <td>
        <!-- <a href="index.php?controller=order_detail&action=edit&id=<?php echo $r['id']; ?> " class="btn btn-blue">SỬA</a> -->
    <!-- <a href="index.php?controller=order_detail&action=show&id=<?php echo $r['id']; ?>" class="btn btn-red">XEM</a> -->
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?controller=order_detail&action=destroy&id=<?php echo $r['id']; ?>" >XOÁ</a>
 <a href="index.php?controller=order&action=index">QUAY LẠI</a>

        </td>
    </tr>
 <!-- Kết thúc vòng lặp -->
 <?php endforeach; ?>
</table>