<?php

include '../common/verifica_adm_mode.php';

if( empty($_GET['nome']) ){
    header('Location: error.php?code=1');
    exit();
}

$path = '../download/';
//$file_name = urldecode($_GET['nome']);
$file_name = $_GET['nome'];

if ( unlink($path . $file_name) ){
    header('Location: lista_download.php');
    exit();
}else{
    header('Location: error.php?code=14');
    exit();
}

?>