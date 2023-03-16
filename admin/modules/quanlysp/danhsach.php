<?php
    $sql_danhsach_sp = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_danhsach_sp = mysqli_query($mysqli,$sql_danhsach_sp);
?>
<p>Danh sách sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>giá</th>
    <th>số lượng</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Nội dung</th>
    <th>Trạng thái</th>
    <th>Quản Lý</th>
    
  </tr>
  <?php
    $i =0;
    while($row = mysqli_fetch_array($query_danhsach_sp)){
      $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham']?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px"></td>
    <td><?php echo $row['giasp']?></td>
    <td><?php echo $row['soluong']?></td>
    <td><?php echo $row['ten_dm']?></td>
    <td><?php echo $row['masp']?></td>
    <td><?php echo $row['noidung']?></td>
    <td><?php if($row['tinhtrang']==1){

      echo 'kích hoạt';
    }else{
      echo 'ẩn';
    } ?></td>

    <td>
      <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> || <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?> ">Sửa</a>
    </td>
  </tr>
  <?php
    }
  ?>
  
</table>