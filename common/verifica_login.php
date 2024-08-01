<?php

if( empty($_SESSION['id']) || empty($_SESSION['username']) ){
    session_unset();
    session_destroy();
    header('Location: error.php?code=6');
    exit();
}

?>
