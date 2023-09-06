<div>

    <a href="index.php?controller=order&action=create">
        <button type="button" class="btn btn-info">THÊM MỚI</button>
    </a>
</div><br>
<h3>DANH SÁCH ĐƠN HÀNG</h3><br><br>

<?php
// Tổng số mục
$total_items = count($items);
// Số mục trên mỗi trang
$items_per_page = 3;
// Tính toán tổng số trang
$total_pages = ceil($total_items / $items_per_page);
// Xác định trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
// Xác định vị trí bắt đầu và kết thúc của mục trên trang hiện tại
$start_index = ($current_page - 1) * $items_per_page;
$end_index = $start_index + $items_per_page;
// Giới hạn mảng $items để chỉ hiển thị các mục trên trang hiện tại
$items_on_current_page = array_slice($items, $start_index, $items_per_page);
?>

<table border="1" class="table">
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
    foreach ($items_on_current_page  as $index=>$row) :
        // echo '<pre>';
        // print_r($row);
        // die();
    ?>
        <td><?php echo $index + $start_index + 1; ?></td>

        <!-- <td><?php echo $row['id'] ?></td> -->
        <td><?php echo $row['customer_name'] ?></td>
        <td><?php echo $row['order_date'] ?></td>
        <td><?php echo $row['total_amount'] ?></td>
        <td>
        <a href="index.php?controller=order&action=edit&id=<?php echo $row['id']; ?> " >
        <button type="button" class="btn btn-primary">SỬA</button>

    <a href="index.php?controller=order_detail&action=index&id=<?php echo $row['id']; ?>" >|
    <button type="button" class="btn btn-success">XEM</button>
    
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?controller=order&action=destroy&id=<?php echo $row['id']; ?>" >|
    <button type="button" class="btn btn-danger">XÓA</button>

        </td>
    </tr>
 <!-- Kết thúc vòng lặp -->
 <?php endforeach; ?>
</table>

<!-- Hiển thị các liên kết phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <?php if ($i == $current_page) : ?>
            <a class="active" href="index.php?controller=order&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php else : ?>
            <a href="index.php?controller=order&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>

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