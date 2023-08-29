<form action="index.php?action=update&id=<?= $row['id'];?>" method="post" enctype="multipart/form-data">
    TÊN SẢN PHẨM THUỐC:<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    SỐ LƯỢNG:<br> <input type="text" name="quantity" value="<?= $row['quantity'];?>"> <br>
    GIÁ CẢ :<br><input type="text" name="price" value="<?= $row['price'];?>"> <br>
    DANH MỤC THUỐC:<br> <input type="text" name="category_id" value="<?= $row['category_id'];?>"> <br>
    HÌNH ẢNH:<br> <input type="file" name="image" value="<?= $row['image'];?>"> <br>

    <input type="submit" value="Cap nhat">
</form>