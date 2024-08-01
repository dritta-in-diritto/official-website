<?php

include '../common/verifica_adm_mode.php';

if( array_key_exists('nuovo_file', $_FILES) && ($_FILES['nuovo_file']['error']==0) && ($_FILES['nuovo_file']['size']>0) ){
    $nome = $_FILES['nuovo_file']['name'];

    $path = "../download/";

    if( move_uploaded_file($_FILES['nuovo_file']['tmp_name'], $path . $nome)  ){
        header('Location: lista_download.php');
    }else{
        header('Location: error.php?code=13');
        exit();
    }

}else{
    header('Location: error.php?code=1');
    exit();
}


?>