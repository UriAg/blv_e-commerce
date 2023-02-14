<!--Login container-->
<?php
include_once '../php/db.php';
if (isset($_POST['init__btn'])) {
    if (!empty($_POST['email'])) {
        if (!empty($_POST['password'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
                $query = "SELECT * FROM userinfo WHERE email='$email'";
                $result = mysqli_query($conex, $query);
                $rows = mysqli_num_rows($result);
                $SearchPass = mysqli_fetch_array($result);
                if ($rows) {
                    if (password_verify($password, $SearchPass['pass'])) {
                        $query_name = mysqli_query($conex, "SELECT * FROM `userinfo` WHERE email = '$email'");
                        $row_info = $query_name->fetch_assoc();
                        $_SESSION['rol'] = $row_info['role_id'];
                        $_SESSION['showemail'] = $row_info['email'];
                        $_SESSION['showname'] = $row_info['name'];

                        ?>
                            <script>
                                localStorage.setItem('name', <?php
                                $var = isset($_SESSION['showname']) ? $_SESSION['showname'] : null;
                                echo "'" . $var . "'";
                                ?>);

                                localStorage.setItem('email', <?php
                                $var = isset($_SESSION['showemail']) ? $_SESSION['showemail'] : null;
                                echo "'" . $var . "'";
                                ?>);

                                setTimeout(function() {
                                    window.location.replace("http://localhost/Tienda/index.php");
                                }), 2000;
                            </script>
                        <?php

                        switch ($_SESSION['rol']) {
                            case 1:
                                $_SESSION['UserRole'] = 1;
                            break;

                            case 2:
                                $_SESSION['UserRole'] = 2;
                            break;
                        }
                        
                    } else {
                        ?>
                        <h3 class="bad">¡Contraseña erronea!</h3>
                    <?php
                    }
                } else {
                    ?>
                    <h3 class="bad">¡Usuario no encontrado!</h3>
                <?php
                }
            } else {
                ?>
                <h3 class="bad">¡Ingresá una dirección de email válida!</h3>
            <?php
            }
        } else {
            ?>
            <h3 class="bad">¡Ingresá una contraseña!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Ingresá una dirección de email!</h3>
<?php
    }
}
?>


<!--Register container-->
<?php
$archivoActual = $_SERVER['PHP_SELF'];
include_once '../php/db.php';
if (isset($_POST['register__btn'])) {
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $regEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $ExistAccount = "SELECT * FROM userinfo WHERE email = '$regEmail'";
            $AccountAction = mysqli_query($conex, $ExistAccount);
            if (mysqli_num_rows($AccountAction) == 0) {
                $header = "From: Buscando la veta \r\n";
                $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
                $header .= "Mime-Version: 1.0 \r\n";
                $header .= "Content-Type: text/plain";

                $code = rand(1000, 9999);
                session_start();
                $_SESSION['codigo'] = $code;
                $_SESSION['email'] = $regEmail;

                $message = 'El código de verificación es: ' . $code . ".";
                mail($regEmail, "Código de verificación", mb_convert_encoding($message, "UTF-8"), $header);
                echo "<script>
                        const register__container =document.getElementById('register__container');
                        register__container.style.display = 'none';
                        </script>";
?>
                <div class="verify__code">
                    <div class="title">
                        <h1>Se envió un codigo de verificación a su correo</h1>
                    </div>
                    <form method="post" class="verify__form">
                        <input type="text" name="user-name" required="required" placeholder="Nombre completo">
                        <input type="password" name="user-password" required="required" placeholder="Contraseña">
                        <input type="number" name="code-input" required="required" placeholder="Código de verificación">
                        <button name="submit-code">Enviar</button>
                    </form>
                </div>
            <?php
            } else {
            ?>
                <h3 class="bad">¡Ya hay una cuenta con este correo!</h3>
            <?php
                header("refresh:2;url=" . $archivoActual . "");
            }
        } else {
            ?>
            <h3 class="bad">¡Ingresá una dirección de email válida!</h3>
        <?php
            header("refresh:2;url=" . $archivoActual . "");
        }
    } else {
        ?>
        <h3 class="bad">¡Ingresá una dirección de email!</h3>
<?php
    }
}
?>
<!--next code is for update data-->
<?php

if (isset($_POST['submit-code'])) {
    $archivoActual = $_SERVER['PHP_SELF'];
    include_once '../php/db.php';
    session_start();
    $code = isset($_SESSION['codigo']) ? $_SESSION['codigo'] : null;
    $regEmail = isset($_SESSION['email']) ? $_SESSION['email'] : null;

    if (!empty($_POST['user-name'])) {
        if (!empty($_POST['user-password'])) {
            if (!empty($_POST['code-input'])) {

                $codeinput = filter_var($_POST['code-input'], FILTER_SANITIZE_NUMBER_INT);
                $nameinput = filter_var($_POST['user-name'], FILTER_SANITIZE_SPECIAL_CHARS);
                $passwordinput = filter_var($_POST['user-password'], FILTER_SANITIZE_SPECIAL_CHARS);
                $passwordinput = password_hash($passwordinput, PASSWORD_DEFAULT);
                if ($codeinput == $code) {
                    $query = "INSERT INTO `userinfo`(`name`, `email`, `pass`)  VALUES ('$nameinput','$regEmail','$passwordinput')";
                    $result = mysqli_query($conex, $query);
                    if ($result) {
                        header("location:./login.php");
                    } else {
?>
                        <h3 class="bad">¡No se pudo realizar la acción en la BD!</h3>
                    <?php
                        header("refresh:2;url=" . $archivoActual . "");
                    }
                } else {
                    ?>
                    <h3 class="bad">¡El código es incorrecto, se reiniciara el proceso!</h3>
                <?php
                    header("refresh:2;url=" . $archivoActual . "");
                }
            } else {
                ?>
                <h3 class="bad">¡Ingresa el código de verificación!</h3>
            <?php
            }
        } else {
            ?>
            <h3 class="bad">¡Ingresá una contraseña!</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">¡Ingresá tu nombre!</h3>
<?php
    }
}
?>



<!--Recovery-->