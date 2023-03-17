<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['query']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query='';
        }
        if($tam == 'quanlydanhmucsanpham' && $query=='them'){
            include("modules/quanlydanhmuc/them.php");
            include("modules/quanlydanhmuc/danhsach.php");
        }elseif($tam == 'quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmuc/sua.php");
        }elseif($tam == 'quanlysp' && $query=='them'){
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/danhsach.php");
        }elseif($tam == 'quanlysp' && $query=='sua'){
            include("modules/quanlysp/sua.php");
        }elseif($tam == 'quanlydanhmucsanpham' && $query=='xoa'){
                include("modules/quanlydanhmuc/danhsach.php");
        }
        else{
            include("modules/index.php");
        }
    ?>
</div>