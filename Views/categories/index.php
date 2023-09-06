
<?php
?>

<a href="index.php?action=create"> Them moi </a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>DANH MỤC</th>
        <th>MÔ TẢ</th>
        <th>TÙY CHỌN</th>

        


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
            <td><?php echo $r['category_name']; ?> </td>
            <td><?php echo $r['description']; ?> </td>
           
            <td>
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">Sua</a> |
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>">Xem</a> |
                <a onclick=" return confirm('ban chac chan k?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">Xoa</a>
            </td>
        </tr>

        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>