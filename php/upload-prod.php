<?php
    include_once '../php/db.php';
    
    
    if(isset($_POST['send-product'])){
        if($_POST['product-title']!="" && $_POST['product-title']!=null){
            if($_POST['product-category']!="" && $_POST['product-category']!=null){
                if($_POST['product-description']!="" && $_POST['product-description']!=null){
                    if($_POST['product-price']!="" && $_POST['product-price']!=null){
                        if(isset($_FILES['product-image'])){
                            $ProdTitle = trim(filter_var($_POST['product-title'], FILTER_SANITIZE_SPECIAL_CHARS));
                            $ProdCat = trim(filter_var($_POST['product-category'], FILTER_SANITIZE_SPECIAL_CHARS));
                            $ProdDesc = trim(filter_var($_POST['product-description'], FILTER_SANITIZE_SPECIAL_CHARS));
                            $ProdPrice = trim(filter_var($_POST['product-price'], FILTER_SANITIZE_NUMBER_INT));
                            $ProdImg =addslashes(file_get_contents($_FILES['product-image']['tmp_name']));
                            
                            $query= "INSERT INTO `products`(`title`, `category`, `description`, `price`, `img`) VALUES ('$ProdTitle','$ProdCat','$ProdDesc','$ProdPrice','$ProdImg')";
                            $result = mysqli_query($conex, $query);
                            if($result){
                                header("location:../pages/products.php");
                            }
                        }
                    }
                }
            }
        }
    }
    

?>