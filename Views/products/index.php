<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bayve.css">
</head>
<div >
    <a href="index.php?controller=product&action=create">THÊM</a>
    <!-- <a href="index.php?action=create" class="btn btn-primary btn-user btn-block"> -->

</div>



<?php
// Tổng số mục
$total_items = count($items);
// Số mục trên mỗi trang
$items_per_page = 5;
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


<!-- Hiển thị dữ liệu và phân trang -->
<h1 class="m-0 font-weight-bold text-primary">CÁC LOẠI THUỐC</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
    <tr>
        <th>STT</th>
        <th>TÊN SẢN PHẨM THUỐC</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CẢ</th>
        <th>HÌNH ẢNH</th>
        <th>TÊN DANH MỤC THUỐC</th>
        <th>TRẠNG THÁI</th>
        
        <th>TUỲ CHỌN</th>

    </tr>

    <!-- Bắt đầu lặp -->
    <?php
    foreach ($items_on_current_page  as $index=>$r) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <tr>
        <td><?php echo $index + $start_index + 1; ?></td>
            <!-- <td><?php echo $r['id']; ?> </td> -->
            <td><?php echo $r['name']; ?> </td>
            <td><?php echo $r['quantity']; ?> </td>
                 <td><?php echo $r['price']; ?> </td>
                 <td><img width="100" src="<?php echo 'http://localhost/cs_m3' . $r['image']; ?>" alt=""></td>
            <td><?php echo $r['category_name']; ?> </td>
            <td>
    <?php
    if($r['status'] == 0) {
        echo 'Hết hàng';
    } else {
        echo 'Còn hàng';
    }
    ?>
</td>

         
           
            
            <td>
                <a href="index.php?controller=product&action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                <a href="index.php?controller=product&action=show&id=<?php echo $r['id']; ?>">Xem</a> |
                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?controller=product&action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
            </td>
        </tr>

        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
    </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Hiển thị các liên kết phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <?php if ($i == $current_page) : ?>
            <a class="active" href="index.php?controller=product&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php else : ?>
            <a href="index.php?controller=product&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>

