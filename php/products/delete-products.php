<?php
    include_once '../db.php';
    $DeleteProd=$_POST['delete-btn'];
    $query= "DELETE FROM `products` WHERE id='$DeleteProd'";
    $result = mysqli_query($conex, $query);
    if($result){
        header("location:../../pages/products.php");
    }
?>