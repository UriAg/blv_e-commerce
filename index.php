<?php
if(isset($_GET['logout'])){
    session_start();
    session_unset();
    session_destroy();
    ?>
        <script>
            sessionStorage.clear();
        </script>
    <?php
}

if(isset($_POST['btn__submit'])){
session_start();
$name = $_POST['name'];
$issue = $_POST['issue'];
$messageIn = $_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Styles-->
    <link rel="stylesheet" href="./styles/index/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Buscando la veta</title>
</head>
<body>
    <!--Navigation-->
    <nav id="nav">
            <a href="#Home" class="logo"><span class="material-symbols-outlined">
            star_rate
            </span></a>
            <button class="btn__menu btn__menu--open btn__colors--open" title="Abrir menú"></button>
            <ul class="menu">
                <li><a href="#Products" id="menu_guide">Productos</a></li>
                <li><a href="#About" id="menu_guide">Sobre nosotros</a></li>
                <li><a href="#Social" id="menu_guide">Redes sociales</a></li>
                <li><a href="#Contact" id="menu_guide">Contactanos</a></li>
                <li>
                    <!--Cart modal toggle button-->
                <button type="button" id="menu_guide" class="modal__button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Carrito
                </button>
                </li>
                <li class="login"><a href="./login.php" id="menu_guide">Iniciar sesión</a></li>
                <li class="logout"><a href="../index.php?logout=1" id="menu_guide">Cerrar sesión</a></li>
            </ul>
    </nav>

    <!--Header-->
    <header id="header">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>

            <div class="title-blv" id="Home">
                <h1>Buscando la veta</h1>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./assets/bg/dkstp/Tablaschicas.JPG" class="slider__img d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/bg/dkstp/DSC_0299.JPG" class="slider__img d-block " alt="slider_image">
                </div>
                <div class="carousel-item">
                    <img src="./assets/bg/dkstp/DSC_0077.JPG" class="slider__img d-block " alt="slider_image">
                </div>
                <div class="carousel-item">
                    <img src="./assets/bg/dkstp/DSC_0093.JPG" class="slider__img d-block " alt="slider_image">
                </div>
                <div class="carousel-item">
                    <img src="./assets/bg/dkstp/DSC_0002.JPG" class="slider__img d-block " alt="slider_image">
                </div>
                <svg class="separator-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path>
                </svg>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>


    <!--Content-->
    <main id="main">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    elementos
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Pagar</button>
                </div>
                </div>
            </div>
        </div>
        <h2 id="Products" class="division__title">Categorias</h2>
        <section class="main">
            <article>
                <div class="product__section"><p>Producto 1</p></div>
                <div class="product__section"><p>Producto 2</p></div>
                <div class="product__section"><p>Producto 3</p></div>
                <div class="product__section"><p>Producto 4</p></div>
                <div class="product__section"><p>Producto 5</p></div>
                <div class="product__section"><p>Producto 6</p></div>
                <div class="product__section"><p>Producto 7</p></div>
                <div class="product__section"><p>Producto 8</p></div>
                <div class="product__section"><p>Producto 9</p></div>
                <div class="product__section"><p>Producto 10</p></div>
            </article>
        </section>
        <section class="info__about">
            <article>
                <h2 id="About" class="division__title">Sobre Nosotros</h2>
                <div class="info__about__top">
                    <p class="texto">
                        Acá va algun texto acerca de la información personal, cuando se inició la "empresa", quienes trabajan, que producen, a que aspiran y demas cosas para informar acerca de las personas
                    </p>
                    <img src="./assets/bg/perrito.jpg" alt="">
                </div>
                <div class="info__about__bottom">
                    <img src="./assets/bg/perrito.jpg" alt="">
                    <p class="texto">
                        Acá preferentemente va algun texto informativo mas enfocado a la producción o a la "empresa", como consiguen la materia prima, el rpoceso que lleva o alguna informacion relevante acerca del emprendimiento
                    </p>
                </div>
            </article>
        </section>
        <svg class="separator-bot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"></path>
        </svg>
    </main>

    <!--footer-->
    <footer id="footer">
        
        <div class="footer__container">
            <div class="footer__info">
                <div class="gen__info">
                    <div class="footer__info__container">
                        <div class="footer__text__info">
                            <h3 class="footer__info__title">Teléfono</h3>
                            <p class="footer__info__text">+54 3544 ????</p>           
                        </div>
                        <div class="footer__text__info">
                            <h3 class="footer__info__title">Dirección</h3>
                            <p class="footer__info__text">12345 Calle falsa</p> 
                        </div>
                        <div class="footer__text__info">
                            <h3 class="footer__info__title">Email</h3>
                            <p class="footer__info__text">Info@website.com</p> 
                        </div>
                        <div class="footer__text__info">
                            <div class="footer__icons__container">
                                <h3 id="Social">Redes sociales</h3>
                                <div class="icons">
                                    <a href="https://www.facebook.com/buscandolaveta/"><svg xmlns="http://www.w3.org/2000/svg" class="footer__icon" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg></a>
                                    <a href="https://www.instagram.com/buscandolaveta/"><svg xmlns="http://www.w3.org/2000/svg" class="footer__icon" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg></a>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="footer__icon" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mail__container">
                    <h2 id="Contact">Contactanos</h2>
                    <div class="mail__overlay">
                        <h3>¡Inicia sesión para enviar un correo!</h3>
                    </div>
                    <form class="footer__form" method="post" required="required">
                        <label>
                            <input autocomplete="off" type="text" name="name" required="required" >
                            <span>Nombre</span>         
                        </label>
                        <label>
                            <input autocomplete="off" type="text" name="issue" required="required" >
                            <span>Razón</span> 
                        </label>
                        <label>
                            <textarea autocomplete="off" type="text" class="message__input" name="message" required="required"></textarea>
                            <span>Mensaje</span>
                        </label>
                        <label>
                        <button type="submit" name="btn__submit" class="submit__mail">Enviar</button>
                        <?php 
                            include("./php/mail-submit.php");
                        ?>
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="copy__text">
                <p>&copy; 2023, desarrollado por Uriel Agüero. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
    <script src="./app/index.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>