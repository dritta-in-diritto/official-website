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

$file = $managerSql->cerca_file_by_id($_GET['id']);
$utente = $managerSql->get_utente($file['id_utente']);

if( !$file || !$utente ){
    //print_r($file);
    //print_r($utente);
    header('Location: error.php?code=6');
    exit();
}else{
    
        if( $managerSql->elimina_file($file['id_file_caricato']) ){

            $path = "../utenti/{$utente['username']}/{$file['id_file_caricato']}/";
            $dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
            for ($dir->rewind(); $dir->valid(); $dir->next()) {
                if ($dir->isDir()) {
                    rmdir($dir->getPathname());
                } else {
                    unlink($dir->getPathname());
                }
            }
            rmdir($path);

            header('Location: lista_file.php');
            exit();
        }else{
            header('Location: error.php?code=6');
            exit();
        }
        
}

?>
