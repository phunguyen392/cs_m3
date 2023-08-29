<form action="index.php?action=update&id=<?= $row['id'];?>" method="post">
    TEN :<br><input type="text" name="name" value="<?= $row['name'];?>"> <br>
    mo ta:<br> <input type="text" name="description" value="<?= $row['description'];?>"> <br>
  
    <input type="submit" value="Cap nhat">
</form>