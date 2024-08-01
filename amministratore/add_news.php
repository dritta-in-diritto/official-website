<?php

include '../common/verifica_adm_mode.php';


if ( empty($_POST['titolo']) || empty($_POST['testo']) ){
    header('Location: error.php?code=1');
    exit();
}

$titolo = addslashes($_POST['titolo']);
$testo = $_POST['testo'];

include_once '../common/dbmanager.php';
$managerSql = new dbManager();

if ( $managerSql->aggiungi_news($titolo, $testo) ){
    header('Location: newslist.php');
    exit();
}else{
    header('Location: error.php?code=9');
    exit();
}

?>