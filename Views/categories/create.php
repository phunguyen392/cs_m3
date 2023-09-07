<?php
// echo '<br>'.__FILE__;
?>
<form action="index.php?controller=category&action=store" method="post">
    TÊN DANH MỤC:<br><input type="text" name="category_name"> <br>
    MÔ TẢ:<br> <input type="text" name="description"> <br><br>


        <button type="submit" value="THÊM">THÊM</button>
        <button> <a href="index.php?controller=category&action=index">QUAY LẠI</a></button>

</form>