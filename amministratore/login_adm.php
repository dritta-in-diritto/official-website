<?php
session_start();

if( empty($_POST['password']) ){
    header('Location: error.php?code=1');
    exit();
}

include '../common/dbmanager.php';

$managerSql = new dbManager();
if ( $managerSql->verifica_pwd_admin(md5($_POST['password'])) ){
    session_unset();
    $_SESSION['adm_mode'] = 'ON';
    header('Location: index.php');
    exit();
}else{
    session_destroy();
    header('Location: error.php?code=2');
    exit();
}

?>
