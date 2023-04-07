<?php
    $sql_sua_sp = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<table>
  <?php
    while($row = mysqli_fetch_array($query_sua_sp)){
  ?>
  
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
    <tr>
        <th>Mã SP</th>
        <td><input type="text" value="<?php echo $row['masp']?>" name="masp"></td>
      </tr>
      <tr>
        <th>Tên sản phẩm</th>
        <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
      </tr>
      <tr>
        <th>Giá</th>
        <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
      </tr>
      <tr>
        <th>Số lượng</th>
        <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
      </tr>
      <tr>
        <th>Hình ảnh</th>
        <td>
          <input type="file" name="hinhanh">
          <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px">
        </td>
      </tr>
      <tr>
        <th>Tóm tắt</th>
        <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea></td>
      </tr>
      <tr>
        <td>Nội dung</td>
        <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung']?></textarea></td>
      </tr>
      <tr>
    <td>Danh mục sản phẩm</td>
    <td>
      <select name="danhmuc">
        <?php
          $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
          $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){

        ?>
        <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_dm']?></option>
        <?php
          }else{
        ?>
        <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_dm']?></option>
        <?php

          }
        }
        ?>
      </select>
    </td>
  </tr>
      <tr>
        <td>Tình trạng</td>
        <td>
          <select name="tinhtrang">
            <?php
              if($row['tinhtrang']==1){

            ?>
            <option value="1" selected>Kích hoạt</option>
            <option value="0">Ẩn</option>
            <?php
              }else{
            ?>
            <option value="1">Kích hoạt</option>
            <option value="0" selected>Ẩn</option>
            <?php
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
      </tr>
    </form>
  <?php
    }
  ?>
</table>