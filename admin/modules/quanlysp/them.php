<p>Thêm sản phẩm</p>
<table>
 <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
 <tr>
    <th>Mã SP</th>
    <td><input type="text" name="masp"></td>
  </tr>
  <tr>
    <th>Tên sản phâm</th>
    <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
    <th>Giá</th>
    <td><input type="text" name="giasp"></td>
  </tr>
  <tr>
    <th>Số lượng</th>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <th>Hình ảnh</th>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <th>Tóm tắt</th>
    <td><textarea rows="10" name="tomtat" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Danh mục sản phẩm</td>
    <td>
      <select name="danhmuc">
        <?php
          $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
          $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_dm']?></option>
        <?php
          }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
 </form>
  
</table>