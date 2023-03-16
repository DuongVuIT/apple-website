<?php
    include('../../config/db.php');
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO danhmuc(ten_dm,thutu) VALUE('".$tenloaisp."', '".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE danhmuc SET ten_dm='".$tenloaisp."', thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM danhmuc WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?action=quanlydanhmucsanpham');
    }

?>