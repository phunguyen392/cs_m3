<!-- <link rel="stylesheet" type="text/css" href="bayve.css"> -->
<form  action="index.php?" method="get">
    <input type="hidden" name="controller" value="customer">
    <input type="hidden" name="action" value="index">
    <input type="search" name="search" id="" >
    <button class="btn btn-primary" type="submit" >
                <i class="fas fa-search fa-sm" ></i>
            </button>
        </form>
<?php

    // Tổng số mục
    $total_items = count($items);
    // Số mục trên mỗi trang
    $items_per_page = 2;
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



<div>

<a href="index.php?controller=customer&action=create">
    <button type="button" class="btn btn-info">THÊM MỚI</button>
    </a>

</div><br>
<h3>DANH SÁCH KHÁCH HÀNG</h3><br><br>

<table border="1" class="table table-border">
<tr>
    <th>STT</th>
    <th>DANH SÁCH KHÁCH HÀNG</th>
    <th>ĐỊA CHỈ</th>
    <th>SÔ ĐIỆN THOẠI</th>
    <th>EMAIL</th>

    <th>TUỲ CHỌN</th>
</tr>
<?php
    foreach ($items_on_current_page  as $index=>$row) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
<tr>
<td><?php echo $index + $start_index + 1; ?></td>

<!-- <td><?php echo $row['id']; ?> </td> -->
<td><?php echo $row['customer_name']; ?> </td>
<td><?php echo $row['address']; ?> </td>
<td><?php echo $row['phone']; ?> </td>
<td><?php echo $row['email']; ?> </td>
<td>


    <a href="index.php?controller=customer&action=edit&id=<?php echo $row['id']; ?>" >
    <button type="button" class="btn btn-primary">SỬA</button>|
    <a href="index.php?controller=customer&action=show&id=<?php echo $row['id']; ?>" >
    <button type="button" class="btn btn-success">XEM</button>|
    <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')" href="index.php?controller=customer&action=destroy&id=<?php echo $r['id']; ?>" >
    <button type="button" class="btn btn-danger">XOÁ</button>

</td>


</tr>
        <!-- Kết thúc vòng lặp -->
        <?php endforeach; ?>
</table>
<!-- Hiển thị các liên kết phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <?php if ($i == $current_page) : ?>
            <a class="active" href="index.php?controller=customer&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php else : ?>
                <a href="index.php?controller=customer&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
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
    .pagination {
  list-style-type: none;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}
.pagination li {
  margin: 0 5px;
}
.pagination a {
  display: inline-block;
  padding: 5px 10px;
  text-decoration: none;
  border: 1px solid #ddd;
  border-radius: 3px;
  color: #0E28CE;
  background-color: #fff;
}
.pagination a.active {
  background-color: #0E28CE;
  color: #fff;
}
</style>