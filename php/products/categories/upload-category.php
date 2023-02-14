<?php
    include_once '../../db.php';
    if(isset($_POST['send-category'])){
        $CategoryTitle = filter_var($_POST['category-title'], FILTER_SANITIZE_SPECIAL_CHARS);
        $query="INSERT INTO `categories`(`title`) VALUES ('$CategoryTitle')";
        $result = mysqli_query($conex, $query);
        if($result){
            header('location: ../../../pages/products.php');
        }
    }

?>