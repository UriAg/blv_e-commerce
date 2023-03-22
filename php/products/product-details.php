<?php
        include_once '../db.php';
        $ShowProduct=$_POST['id'];
        $query = "SELECT * FROM products WHERE id='$ShowProduct'";
        $result = mysqli_query($conex, $query);
        $row_info = mysqli_fetch_array($result);
        $ProdId = $row_info['id'];
        $ProdTitle = $row_info['title'];
        $ProdCat = $row_info['category'];
        $ProdDesc = $row_info['description'];
        $ProdPrice = $row_info['price'];
        $ProdImg = base64_encode($row_info['img']);
        $ProdImg1 = base64_encode($row_info['imgProd1']);
        $ProdImg2 = base64_encode($row_info['imgProd2']);
        $ProdImg3 = base64_encode($row_info['imgProd3']);
        if($result){
            ?>

                <div class="info__product__container col-md-4">
                    <h3><?php echo $ProdTitle;?></h3>
                    <h5>$<?php echo number_format($ProdPrice); ?></h5>
                    <p><?php echo $ProdDesc;?></p>
                    <div class="pay__methods">
                        <h5>Métodos de pago</h5>
                        <label for="nop">Agregar cantidad de productos</label>
                        <input if="nop" class="num_of_prod" min="1" value="1" step="1" pattern="^[0-9]+" type="number" placeholder="Cantidad de unidades">
                        <button>Mercado pago</button>
                        <button>Paypal</button>
                        <button>Tarjeta pepito</button>
                        <button class="atc__btn__spd" type="button" value=<?php echo $ProdId;?>>Agregar al carrito</button>
                    </div>
                </div>

                <div class="img__product__container col-md-8">
                    <div id="detailedProdImgCarousel" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#detailedProdImgCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#detailedProdImgCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#detailedProdImgCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#detailedProdImgCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="data:image/jpg;base64,<?php echo $ProdImg;?>" class="img__current__product" alt="Imagen del producto">
                            </div>
                            <div class="carousel-item">
                                <img src="data:image/jpg;base64,<?php echo $ProdImg1;?>" class="img__current__product" alt="Imagen del producto">
                            </div>
                            <div class="carousel-item">
                                <img src="data:image/jpg;base64,<?php echo $ProdImg2;?>" class="img__current__product" alt="Imagen del producto">
                            </div>
                            <div class="carousel-item">
                                <img src="data:image/jpg;base64,<?php echo $ProdImg3;?>" class="img__current__product" alt="Imagen del producto">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#detailedProdImgCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#detailedProdImgCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            <?php
        }
    
?>