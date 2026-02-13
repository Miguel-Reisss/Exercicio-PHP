<?php

    session_start();


    if (isset($_SESSION['perfil'])){
    echo $_SESSION['usuario'];    
    echo $_SESSION['perfil'];

        echo "<a href='aula0402.php?logout=true'> Logout </a>";

    } else {
    echo "Acesso negado";
    }

    if (isset($_GET['logout']) && $_GET['logout']) {
        session_destroy();
        echo "Você foi deslogado";
    }

?>