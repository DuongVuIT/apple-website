<?php
    $mysqli = new mysqli("localhost", "root", "", "applestore");

    if($mysqli -> connect_errno){
        echo "Fail to conect to MySql:" . $mysqli -> connect_errno;
        exit();
    }
?>