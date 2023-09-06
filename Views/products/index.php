
<div >
    <a href="index.php?action=create">THÊM</a>
    <!-- <a href="index.php?action=create" class="btn btn-primary btn-user btn-block"> -->

</div>
<h1 class="m-0 font-weight-bold text-primary">csm3</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
    foreach ($items as $r) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <tr>
            <td><?php echo $r['id']; ?> </td>
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
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">Xem</a> |
                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
            </td>
        </tr>

        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
    </tbody>
            </table>
        </div>
    </div>
</div>