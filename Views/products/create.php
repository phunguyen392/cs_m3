<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
    TÊN THUỐC :<br><input type="text" name="name"> <br><br>
    SỐ LƯỢNG:<br> <input type="number" name="quantity"> <br><br>
    GIÁ CẢ :<br><input type="number" name="price"> <br><br>
    DANH MUC:<br><br>
    <select name="category_id" style="width:177px;">
    <?php foreach ($items as $row) : ?>
          <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endforeach; ?>
      </select><br><br>   
       HÌNH ẢNH :<br><input type="file" name="image"> <br><br>
    TRẠNG THÁI :<br> 
     <select>
      <option value="0">het hang</option>
      <option value="1">con hang</option>

     </select>
  <br><br>
  <a >
        <button type="submit" class="btn btn-info">THÊM MỚI</button> 
    </a>
      <a href="index.php?controller=product&action=index"><button type="button" class="btn btn-warning">QUAY LẠI</button>
</a>

</form>
<style>
  form{
  justify-content: center;
  align-items: center;
  height: 100vh; /* Điều chỉnh chiều cao theo yêu cầu */
  text-align: center;
  color: black;
  }
</style>