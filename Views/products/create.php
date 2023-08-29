<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
    TÊN THUỐC :<br><input type="text" name="name"> <br>
    SỐ LƯỢNG:<br> <input type="number" name="quantity"> <br>
    GIÁ CẢ :<br><input type="number" name="price"> <br>
    DANH MỤC THUỐC:<br> <input type="text" name="category_id"> <br>
    HÌNH ẢNH :<br><input type="file" name="image"> <br>
  
    <input type="submit" value="Them">
</form>