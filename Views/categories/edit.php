<form action="index.php?action=update&id=<?= $row['id'];?>" method="post">
    TÊN DANH MỤC :<br><input type="text" name="category_name" value="<?= $row['category_name'];?>"> <br>
    MÔ TẢ:<br> <input type="text" name="description" value="<?= $row['description'];?>"> <br>
  
    <input type="submit" value="Cap nhat">
  <button> <a href="index.php?action=index">QUAY LẠI</a></button>

</form>