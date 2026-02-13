<?php

    session_start();

    $_SESSION['usuario'] = 'dian@gmail.com';
    $_SESSION['is_logged'] = true;
    $_SESSION['perfil'] = 'adm';

    setcookie("usuario", "Sergio", time() + (86400 * 7));
    echo time();



?>