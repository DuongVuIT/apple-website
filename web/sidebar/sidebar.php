<div class="sidebar">
            <ul class="list_sidebar">
            <?php
                $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row = mysqli_fetch_array($query_danhmuc)){
            ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['ten_dm']?></a></li>
            <?php
                }
            ?>
            </ul>
            </div>