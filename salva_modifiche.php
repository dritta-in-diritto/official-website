<?php

if( empty($_POST['modifica']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica login
session_start();
include 'common/verifica_login.php';
//fine verifica login


include 'common/dbmanager.php';
$managerSql = new dbManager();

//modifica dati fatturazione
if($_POST['modifica'] == "fatturazione"){

    $utente = array();
    $utente['id_utente'] = $_SESSION['id'];
    $utente['nome'] = addslashes( $_POST['nome'] );
    $utente['cognome'] = addslashes( $_POST['cognome'] );
    $utente['codice_fiscale'] = strtoupper( $_POST['codice_fiscale'] );
    $utente['cap'] = addslashes( $_POST['cap'] );
    $utente['citta'] = addslashes( $_POST['citta'] );
    $utente['indirizzo'] = addslashes( $_POST['indirizzo'] );
    $utente['email'] = addslashes( $_POST['email'] );

    if ( $managerSql->modifica_utente($utente) ){
        header('Location: myprofile.php?id='.$utente['id_utente']);
    }else{
        header('Location: error.php?code=4');
    }
}


//modifica dati accesso
if($_POST['modifica'] == "password"){
    
    $utente = $managerSql->get_utente($_SESSION['id']);
    if( ($utente['username']==$_SESSION['username']) && ($utente['password']==md5($_POST['password'])) ){
        if ($managerSql->modifica_password($utente, md5($_POST['nuova_password'])) ){
            header('Location: myprofile.php?id='.$utente['id_utente']);
            exit();
        }
    }else{
        header('Location: error.php?code=4');
    }
}

?>
