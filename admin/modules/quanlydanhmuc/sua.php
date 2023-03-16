<?php
    $sql_sua_danhmuc = "SELECT * FROM danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmuc = mysqli_query($mysqli,$sql_sua_danhmuc);
?>
<p>Sửa danh mục</p>
<table>
 <form method="POST" action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
   <?php
    while($dong= mysqli_fetch_array($query_sua_danhmuc)){
   ?>
    <tr>
        <th>Điền danh mục sản phẩm</th>
        <td><input type="text" value="<?php echo $dong['ten_dm']?>" name="tendanhmuc"></td>
      </tr>
      <tr>
        <td>Thứ tự danh mục</td>
        <td><input type="text" value="<?php echo $dong['thutu']?>" name="thutu"></td>
      </tr>
      <tr>
        <td><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
      </tr>


    <?php
    }
    ?>
 </form>
  
</table>