<form action="index.php?controller=category&action=update&id=<?= $row['id']; ?>" method="post">
  TÊN DANH MỤC :<br><input type="text" name="category_name" value="<?= $row['category_name']; ?>"> <br><br>
  MÔ TẢ:<br> <input type="text" name="description" value="<?= $row['description']; ?>"> <br>


  <button type="submit" value="Cap nhat">CẬP NHẬT</button>
  <button> <a href="index.php?controller=category&action=index">QUAY LẠI</a></button>

</form>