<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
} else {
    $tukhoa = '';
}
$sql_pro = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.tensanpham like '%".$tukhoa."%'";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>
<h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa']?> </h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="title_product"><?php echo $row['tensanpham'] ?></p>
                <p class="price_product"><?php echo number_format($row['giasp'], 0, ',', '.') . ' VND'; ?></p>
            </a>
        </li>
    <?php
    }
    ?>

</ul>