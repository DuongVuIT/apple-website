<div id="main">
            <?php
                include("sidebar/sidebar.php");
            ?>
            <div class="maincontent">
                <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }
                    else{
                        $tam = '';
                    }
                    if($tam == 'danhmucsanpham'){
                        include("main/danhmuc.php");
                    }
                    elseif($tam == 'sanpham'){
                        include("main/sanpham.php");
                    }
                    elseif($tam == 'timkiem'){
                        include("main/timkiem.php");
                    }
                    else{
                        include("main/index.php");
                    }
                ?>
            </div>
        </div>