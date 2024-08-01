<?php

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


if( array_key_exists('nuovo_file', $_FILES) && ($_FILES['nuovo_file']['error']==0) && ($_FILES['nuovo_file']['size']>0) ){
    
    $nome = $_FILES['nuovo_file']['name'];

    $path = "utenti/{$utente['username']}/";

    if( move_uploaded_file($_FILES['nuovo_file']['tmp_name'], $path . $nome)  ){
        if ($id_file = $managerSql->aggiungi_file($utente, $nome) ){
            mkdir("$path/$id_file");
            rename($path . $nome, $path . $id_file . '/' .$nome );
            header('Location: lista_file_u.php');
        }
    }else{
        header('Location: error.php?code=8');
        exit();
    }

}else{
    header('Location: error.php?code=7');
    exit();
}





?>
