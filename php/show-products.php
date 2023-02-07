<?php 
    include_once '../php/db.php';
        if($conex){
            $query= "SELECT * FROM products";
            $result = mysqli_query($conex, $query);
            if($result){
                while($row = $result->fetch_array()){
                    $ProdId = $row['id'];
                    $ProdTitle = $row['title'];
                    $ProdCat = $row['category'];
                    $ProdDesc = $row['description'];
                    $ProdPrice = $row['price'];
                    $ProdImg = base64_encode($row['img']);
                    ?>

                        <div class="card position-static">
                            <img src="data:image/jpg;base64,<?php echo $ProdImg;?>" class="card-img-top" alt="Imagen del producto">
                            <div class="card-body">
                                <h5 class="card-title">$<?php echo $ProdPrice;?></h5>
                                <p class="card-text"><?php echo $ProdDesc;?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    <?php
                }
            }
        }
?>