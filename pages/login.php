<?php
    include_once '../php/db.php';
    session_start();
    
    if(isset($_SESSION['rol']) && isset($_SESSION['showemail'])){
        header('location:../index.php');
    }
?>

<!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title>BLV Login</title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../styles/login-styles/login.css">
    </head>
    
    <body>
        
        <div class="general__container">
            <div id="login__container">
                <div id="central">
                    <div id="login">
                        <div class="title">
                            <h1>Bienvenido</h1>
                        </div>
                        <form id="login__form" method="post">
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="password" placeholder="Contraseña" name="password" required>
                            <button type="submit" title="Ingresar" name="init__btn" class="boton_inicio">Iniciar sesión</button>
                        </form>
                        <div class="form__foot">
                            <a href="./recovery.php" class="op-log">¿Perdiste tu contraseña?</a>
                            <a href="./register.php" class="op-log">¿No tienes Cuenta? Registrate</a>
                        </div>
                    </div>
                    <div class="back">
                        <a href="../index.php">Volver</a>
                    </div>
                </div>
            </div>
            <?php 
                include("../php/log-reg-rec.php");
            ?>
        </div>
    </body>
</html>