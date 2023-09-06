
<table border="1">
    <tr>
        <th>STT</th>
        <th>MÃ KHÁCH HÀNG</th>
        <th>NGÀY ĐẶT HÀNG</th>
        <th>TỔNG SỐ TIỀN</th>
        <th>TÙY CHỌN</th>
        
    </tr>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['customer_id']; ?></td>
        <td><?= $row['order_date']; ?></td>
        <td><?= $row['total_amount']; ?></td>

  <td>  <a href="index.php?controller=order&action=index">QUAY LẠI</a></td>

    </tr>

</table>