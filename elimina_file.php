<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica login
session_start();
include 'common/verifica_login.php';
//fine verifica login


include 'common/dbmanager.php';
$managerSql = new dbManager();
$utente = $managerSql->get_utente($_SESSION['id']);
if(empty($utente)){
    header('Location: error.php?code=3');
    exit();
}


if( $file = $managerSql->cerca_file_by_id($_GET['id']) ){
    
    if( $file['id_utente'] == $utente['id_utente'] ){
        if( $managerSql->elimina_file($file['id_file_caricato']) ){

            $path = "utenti/{$utente['username']}/{$file['id_file_caricato']}/";
            $dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
            for ($dir->rewind(); $dir->valid(); $dir->next()) {
                if ($dir->isDir()) {
                    rmdir($dir->getPathname());
                } else {
                    unlink($dir->getPathname());
                }
            }
            rmdir($path);

            header('Location: myprofile.php?id='. $utente['id_utente']);
            exit();
        }else{
            header('Location: error.php?code=11');
            exit();
        }
        
    }else{
        header('Location: error.php?code=10');
        exit();
    }

}else{
    header('Location: error.php?code=9');
    exit();
}

?>
