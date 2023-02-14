<?php
    if(isset($_POST['show__details'])){
        $ShowProduct=$_POST['show__details'];
        $query = "SELECT * FROM products WHERE id='$ShowProduct'";
        $result = mysqli_query($conex, $query);
        $row_info = mysqli_fetch_array($result);
        $ProdId = $row_info['id'];
        $ProdTitle = $row_info['title'];
        $ProdCat = $row_info['category'];
        $ProdDesc = $row_info['description'];
        $ProdPrice = $row_info['price'];
        $ProdImg = base64_encode($row_info['img']);
        echo 'sfsd';
        if($result){
            ?>

                <p>asdas</p>

            <?php
        }
    }
?>