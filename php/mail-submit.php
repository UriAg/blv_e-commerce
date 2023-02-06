<?php

//Usar el email del local storage y usarlo para el envio
if (isset($_POST['btn__submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($InsEmail, FILTER_SANITIZE_EMAIL);
    $issue = filter_var($_POST['issue'], FILTER_SANITIZE_SPECIAL_CHARS);
    $messageIn = filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($_POST['name'])) {
        if (!empty($_POST['issue'])) {
            if (!empty($_POST['message'])) {

                $header = 'From: ' . $email . " \r\n";
                $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
                $header .= "Mime-Version: 1.0 \r\n";
                $header .= "Content-Type: text/plain";
                $messageOut = "Este mensaje fue enviado por " . $name . ",\r\n";
                $messageOut .= "Su email es: " . $email . ",\r\n";
                $messageOut .= "Mensaje: " . $_POST['message'] . ",\r\n";
                $messageOut .= "Enviado el: " . date('d/m/Y', time());

                $addressee = 'uriel.aguero1812@gmail.com';

                mail($addressee, $issue, mb_convert_encoding($messageOut, "UTF-8"), $header);
            ?>
                <h3 class="alert">¡Correo enviado!</h3>
            <?php
            } else {
            ?>
                <h3 class="alert bad">¡Ingresá un mensaje para el vendedor!</h3>
            <?php
            }
        } else {
            ?>
                <h3 class="alert bad">¡Ingresá la razón del correo!</h3>
            <?php
        }
    } else {
        ?>
            <h3 class="alert bad">¡Ingresá una nombre!</h3>
        <?php
    }
}
?>