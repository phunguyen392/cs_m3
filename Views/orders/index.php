<a href="index.php?action=create"> Them moi </a>
<table border="1">
<tr>
        <th>STT</th>
        <th>MÃ KHÁCH HÀNG</th>
        <th>NGÀY ĐẶT HÀNG</th>
        <th>TỔNG SỐ TIỀN</th>
        
        
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
        <td><?php echo $r['customer_name'] ?></td>
        <td><?php echo $r['order_date'] ?></td>
        <td><?php echo $r['total_amount'] ?></td>
        <td>
        <a href="index.php?action=edit&id=<?php echo $r['id']; ?> " class="btn btn-blue">SỬA</a>
    <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="btn btn-red">XEM</a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?action=destroy&id=<?php echo $r['id']; ?>" >XOÁ</a>
        </td>
    </tr>
 <!-- Kết thúc vòng lặp -->
 <?php endforeach; ?>
</table>