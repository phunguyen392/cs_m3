<?php
// echo "<pre>";
// echo print_r($row);
// die();
?>
<form action="index.php?action=update&id=<?= $row['id'];?>" method="post" enctype="multipart/form-data">
    TÊN SẢN PHẨM THUỐC:<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    SỐ LƯỢNG:<br> <input type="text" name="quantity" value="<?= $row['quantity'];?>"> <br>
    GIÁ CẢ :<br><input type="text" name="price" value="<?= $row['price'];?>"> <br>
    DANH MỤC THUỐC:<br> 
    <select name="category_id" style="width:177px;">
    <?php foreach ($row as $cates) : ?>
          <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endforeach; ?>
    </select>
        <br><br>
            HÌNH ẢNH:
            <br> <input type="file" name="image" > <br><br>
            TRẠNG THÁI:<br>
            <!-- <input type="number" name="status" value="<?= $row['status'];?>"> -->
            <select name="status">
      <option value="0">het hang</option>
      <option value="1">con hang</option>

     </select>
    <br>
    <input type="submit" value="Cập nhật">
    
</form>