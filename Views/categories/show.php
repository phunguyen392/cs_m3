<table border="1">
    <tr>
        <th>STT</th>
        <th>DANH MỤC</th>
        <th>MÔ TẢ</th>
    </tr>
    <tr>
        <td><?= $row['id'];?></td>
        <td><?= $row['category_name'];?></td>
        <td><?= $row['description'];?></td>
  <td>  <a href="index.php?controller=category&action=index">QUAY LẠI</a></td>
        
    </tr>
   
</table>