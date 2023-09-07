<?php
// echo "<pre>";
// echo print_r($row);
// die();
?>
<form action="index.php?controller=product&action=update&id=<?= $row['id'];?>" method="post" enctype="multipart/form-data">
    TÊN SẢN PHẨM THUỐC:<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    SỐ LƯỢNG:<br> <input type="text" name="quantity" value="<?= $row['quantity'];?>"> <br>
    GIÁ CẢ :<br><input type="text" name="price" value="<?= $row['price'];?>"> <br>
    DANH MỤC THUỐC:<br> 
    <select name="category_id" style="width:177px;">
    <?php foreach ($cates as $cate) : ?>
          <option value="<?php echo $cate['id']; ?>"><?php echo $cate['category_name']; ?></option>
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
    <br><br>
    <button class="btn btn-secondary" type="submit" value="Cập nhật">Cập nhật</button>
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
  text-align: center;
  }
</style>