<a href="index.php?controller=order_detail&action=create"> 
<!-- <button type="button" class="btn btn-info">THÊM MỚI</button> -->
 </a><br><br>
 <table border="1">
    <h3> ĐƠN HÀNG CHI TIẾT</h3><br><br>
<tr>
        <th>STT</th>
        <th>NGÀY THÁNG</th>
        <th>TÊN THUỐC</th>
        <th>DANH MỤC</th>

        <th>SỐ LƯỢNG THUỐC</th>
        <th>ĐƠN GIÁ </th>
        <th>TÊN KHÁCH HÀNG</th>

        
        
        <th>TUỲ CHỌN</th>
    </tr>
    <tr>
           <!-- Bắt đầu lặp -->
    <?php
    foreach ($items as $row) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['order_date'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['category_name'] ?></td>

        <td><?php echo $row['order_quantity'] ?></td>
        <td><?php echo $row['order_price'] ?></td>
        <td><?php echo $row['customer_name'] ?></td>


        <td>
        <!-- <a href="index.php?controller=order_detail&action=edit&id=<?php echo $r['id']; ?> " class="btn btn-blue">SỬA</a> -->
    <!-- <a href="index.php?controller=order_detail&action=show&id=<?php echo $r['id']; ?>" class="btn btn-red">XEM</a> -->
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?controller=order_detail&action=destroy&id=<?php echo $r['id']; ?>" >
    <button type="button" class="btn btn-danger">XOÁ</button>
</a>
 <a href="index.php?controller=order&action=index">
    <button type="button" class="btn btn-warning">QUAY LẠI</button>
</a>

        </td>
    </tr>
 <!-- Kết thúc vòng lặp -->
 <?php endforeach; ?>
</table>

<style>
    h3{
        text-align: center;
        font-weight: 500;
        color: red;
    }
    table {
    max-width: 1300px;
    margin: 0 auto;
  }
  td{
        text-align: center;
        color: black;
    }
    th{
        text-align: center;
        color: blue;
    }
</style>