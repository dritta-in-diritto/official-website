<?php
//verifica login
include '../common/verifica_adm_mode.php';
//fine verifica login

if( empty($_POST['id_news']) || empty($_POST['titolo']) || empty($_POST['testo']) ){
    header('Location: error.php?code=1');
    exit();
}

include '../common/dbmanager.php';
$managerSql = new dbManager();

$notizia = $managerSql->get_news($_POST['id_news']);

if( !$notizia ){
    header('Location: error.php?code=11');
    exit();
}

$notizia['titolo'] = addslashes($_POST['titolo']);
$notizia['testo'] = $_POST['testo'];

if( $managerSql->modifica_news($notizia) ){
    header('Location: newslist.php');
    exit();
}else{
    header('Location: error.php?code=12');
    exit();
}

?>
