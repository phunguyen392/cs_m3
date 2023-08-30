<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
    TÊN THUỐC :<br><input type="text" name="name"> <br>
    SỐ LƯỢNG:<br> <input type="number" name="quantity"> <br>
    GIÁ CẢ :<br><input type="number" name="price"> <br><br>
    <select name="category_id" style="width:177px;">
    <?php foreach ($items as $row) : ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php endforeach; ?>
      </select><br><br>    HÌNH ẢNH :<br><input type="file" name="image"> <br>
  
    <input type="submit" value="Them">
</form>