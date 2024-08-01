<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica login
include '../common/verifica_adm_mode.php';
//fine verifica login


include '../common/dbmanager.php';
$managerSql = new dbManager();

if( $managerSql->get_news($_GET['id']) && $managerSql->elimina_news($_GET['id']) ){
    header('Location: newslist.php');
    exit();
}else{
    header('Location: error.php?code=10');
    exit();
}

?>
