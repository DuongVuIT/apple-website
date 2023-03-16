<?php
    $sql_danhsach_danhmuc = "SELECT * FROM danhmuc ORDER BY thutu DESC";
    $query_danhsach_danhmuc = mysqli_query($mysqli,$sql_danhsach_danhmuc);
?>
<p>Danh sách sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
  <tr>
    <th>STT</th>
    <th>Tên Danh Mục</th>
    <th>Thứ tự</th>
    <th>Quản Lý</th>
  </tr>
  <?php
    $i =0;
    while($row = mysqli_fetch_array($query_danhsach_danhmuc)){
      $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['ten_dm']?></td>
    <td><?php echo $row['thutu']?></td>
    <td>
      <a href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a> || <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?> ">Sửa</a>
    </td>
  </tr>
  <?php
    }
  ?>
  
</table>