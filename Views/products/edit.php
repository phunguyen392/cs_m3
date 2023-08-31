<form action="index.php?action=update&id=<?= $row['id'];?>" method="post" enctype="multipart/form-data">
    TÊN SẢN PHẨM THUỐC:<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    SỐ LƯỢNG:<br> <input type="text" name="quantity" value="<?= $row['quantity'];?>"> <br>
    GIÁ CẢ :<br><input type="text" name="price" value="<?= $row['price'];?>"> <br>
    DANH MỤC THUỐC:<br> 
    <select name="category_id" style="width:177px;">
    <?php foreach ($cate as $row) : ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php endforeach; ?>
    </select>
        <br><br>
            HÌNH ẢNH:<br> 
            <br> <input type="file" name="image" > <br>
            TRẠNG THÁI:<br>
            <input type="number" name="status" value="<?= $row['status'];?>">
    <br>
    <input type="submit" value="Cap nhat">
</form>