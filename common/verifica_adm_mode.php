<?php

session_start();
if( empty($_SESSION['adm_mode']) || ($_SESSION['adm_mode']!='ON') ){

    session_unset();
    session_destroy();
    header('Location: error.php?code=3');
    exit();

}

?>
