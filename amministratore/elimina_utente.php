<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica Admin mode
include '../common/verifica_adm_mode.php';
//fine verifica login


include '../common/dbmanager.php';
$managerSql = new dbManager();
$utente = $managerSql->get_utente($_GET['id']);
if(empty($utente)){
    header('Location: error.php?code=4');
    exit();
}


if( $managerSql->elimina_utente($utente) ){
    
    $path = "../utenti/{$utente['username']}/";
    $dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
    for ($dir->rewind(); $dir->valid(); $dir->next()) {
        if ($dir->isDir()) {
            rmdir($dir->getPathname());
        } else {
            unlink($dir->getPathname());
        }
    }
    rmdir($path);

    header('Location: userlist.php');
    exit();
    
}else{
    header('Location: error.php?code=10');
    exit();
}


?>
