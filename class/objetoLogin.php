<?php
include_once('Login.php');


$login = new Login("jero@mail.com", "1234");


if ($login->validarCredenciales($_POST["user"], $_POST["pass"])) {
    
    echo '<script language="javascript">alert("Bienvenido Jero!");window.location.href="../index.php"</script>';
} else {
    echo '<script language="javascript">alert("No se encuentra el usuario o no ha ingresado correctamente los datos");window.location.href="../login.php"</script>';
}

unset($login);