<?php

include_once '../../db.php';
$DeleteCat=$_POST['delete-category-btn'];
$query= "DELETE FROM `categories` WHERE id='$DeleteCat'";
$result = mysqli_query($conex, $query);
if($result){
    header("location:../../../pages/products.php");
}

?>