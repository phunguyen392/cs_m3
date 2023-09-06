
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.js"></script>
<?php
// Kiểm tra xem có thông báo thành công hay không và hiển thị SweetAlert2
if (isset($successMessage)) {
    echo '<script>
        Swal.fire({
            title: "<h6>THÊM THÀNH CÔNG!</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>';
} else if (isset($successMessage1)) {
    echo '<script>
        Swal.fire({
            title: "<h6>CẬP NHẬT THÀNH CÔNG!</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>';
} else if (isset($successMessage2)) {
    echo '<script>
        Swal.fire({
            title: "<h6>XÓA THÀNH CÔNG!</h6>",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            width: "300px"
        });
    </script>';
}
?>


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

<a href="index.php?controller=category&action=create"> Them moi </a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>DANH MỤC</th>
        <th>MÔ TẢ</th>
        <th>TÙY CHỌN</th>

        


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
            <td><?php echo $r['category_name']; ?> </td>
            <td><?php echo $r['description']; ?> </td>
           
            <td>
                <a href="index.php?controller=category&action=edit&id=<?php echo $r['id']; ?>">
                            <button type="button" class="btn btn-primary">SỬA</button>
                <a href="index.php?controller=category&action=show&id=<?php echo $r['id']; ?>"> |
                <button type="button" class="btn btn-success">XEM</button>

                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?controller=category&action=destroy&id=<?php echo $r['id']; ?>">|
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
            <a class="active" href="index.php?controller=category&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php else : ?>
            <a href="index.php?controller=category&action=index&page=<?php echo $i; ?>"><?php echo $i; ?>

        <?php endif; ?>
    <?php endfor; ?>
</div>