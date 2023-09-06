<form action="index.php?controller=order_detail&action=update&id=<?= $row['id'];?>" method="post" >
<label for="order_id">NGÀY THÁNG:</label><br>

<select name="order_id" style="width:177px;">
    <?php foreach ($orders as $order) : ?>
          <option value="<?php echo $order['id']; ?>"><?php echo $order['order_date']; ?></option>
        <?php endforeach; ?>
    </select><br><br>


<label for="product_id">TÊN THUỐC</label><br>
<select name="product_id" style="width:177px;">
    <?php foreach ($products as $product) : ?>
          <option value="<?php echo $product['id']; ?>"><?php echo $product['customer_name']; ?></option>
        <?php endforeach; ?>
    </select><br><br>



<label for="order_quantity">GIÁ ĐƠN THUỐC</label><br>
<input type="number" id="order_quantity" name="order_quantity" value="<?=$row['order_quantity'] ;?>"><br><br>
<label for="order_price">SỐ LƯỢNG THUỐC:</label><br>
<input type="order_price" id="order_price" name="order_price" value="<?= $row['order_price'] ;?>"><br><br>

<button type="submit" value="Cập nhật">CẬP NHẬT</button>
<button> <a href="index.php?controller=order_detail&action=index">QUAY LẠI</a></button>

</for>