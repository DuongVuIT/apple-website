<p>Chi tiết sản phẩm</p>
<?php
    $sql_chitiet = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet))
    {

?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
            <img width="20%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
    </div>
    <form method="POST" action="web/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
        <div class="chitiet_sanpham">
                <h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham']?></h3>
                <p>Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'],0,',','.'). ' VND' ?></p>
                <p>Loại sản phẩm: <?php echo $row_chitiet['ten_dm']?></p>
              
        </div>
    </form>
</div>
<?php
    }
?>
