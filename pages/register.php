<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
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

            <div id="register__container">
                <div id="central">
                    <div id="register">
                        <div class="title">
                            <h1>Registrarse</h1>
                        </div>
                        <form id="register__form" method="post">
                            <input type="email" name="email" placeholder="Email" required>
                            <button name="register__btn" title="Continuar">Continuar</button>
                        </form>
                        <div class="form__foot">
                            <a href="./login.php" class="op-log">¿Tienes cuenta? Iniciar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include("../php/log-reg-rec.php");
            ?>
            <div class="back">
                <a href="../index.php">Volver</a>
            </div>
        </div>
    </body>
</html>