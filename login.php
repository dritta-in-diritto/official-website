<?php
session_start();

if( empty($_POST['username']) || empty($_POST['password']) ){
    header('Location: error.php?code=1');
    exit();
}

include 'common/dbmanager.php';
$managerSql = new dbManager();
if ( $utente = $managerSql->cerca_utente($_POST['username'], md5($_POST['password']) ) ){
    session_unset();
    $_SESSION['id'] = $utente['id_utente'];
    $_SESSION['username'] = $utente['username'];
    header('Location: profilo_view.php?id='.$utente['id_utente']);
}else{
    session_unset();
    session_destroy();
    header('Location: error.php?code=5');
    exit();
}

?>
