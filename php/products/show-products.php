<?php
include_once '../php/db.php';
if ($conex) {
    $query = "SELECT * FROM products";
    $result = mysqli_query($conex, $query);
    if ($result) {
        while ($row = $result->fetch_array()) {
            $ProdId = $row['id'];
            $ProdTitle = $row['title'];
            $ProdCat = $row['category'];
            $ProdDesc = $row['description'];
            $ProdPrice = $row['price'];
            $ProdImg = base64_encode($row['img']);
        ?>
            <div id="card" class="card position-static" category="<?php echo $ProdCat; ?>">
                <label for=<?php echo $ProdId; ?>>
                    <?php
                    if (isset($_SESSION['UserRole'])) {
                        if ($_SESSION['UserRole'] == 1) {
                    ?>
                            <form action="../php/products/delete-products.php" method="POST" class="w-100">
                                <button type="submit" name="delete-btn" class="btn btn-secondary btn-sm w-100" value=<?php echo $ProdId; ?>>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </button>
                            </form>
                        <?php
                        }
                        if ($_SESSION['UserRole'] == 2) {
                        ?>
                            <form action="../php/products/add__to__cart.php" method="POST" class="w-100">
                                <button type="sumbit" name="cart-btn" class="btn btn-secondary btn-sm w-100" value=<?php echo $ProdId; ?>>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </button>
                            </form>
                    <?php
                        }
                    }
                    ?>
                    <img src="data:image/jpg;base64,<?php echo $ProdImg; ?>" class="card-img-top" alt="Imagen del producto">
                    <div class="card-body">
                        <h3 class="card-price">$<?php echo number_format($ProdPrice, 2, ',', '.'); ?></h3>
                        <h5 class="card-title"><?php echo $ProdTitle; ?></h5>
                    </div>
                    <form class="products__show__form" method="POST">
                        <button id=<?php echo $ProdId;?> type="button" name="show__details" data-bs-toggle="offcanvas" data-bs-target="#Id3" aria-controls="Id3"></button>
                    </form>
                </label>
            </div>
<?php
        }
    }
}
?>