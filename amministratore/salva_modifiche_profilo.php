<?php

if( empty($_POST['modifica']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica Admin mode
include '../common/verifica_adm_mode.php';
//fine verifica login


include '../common/dbmanager.php';
$managerSql = new dbManager();

//modifica dati fatturazione
if($_POST['modifica'] == "fatturazione"){

    $utente = array();
    $utente['id_utente'] = $_POST['id_utente'];
    $utente['nome'] = addslashes( $_POST['nome'] );
    $utente['cognome'] = addslashes( $_POST['cognome'] );
    $utente['codice_fiscale'] = strtoupper( $_POST['codice_fiscale'] );
    $utente['cap'] = addslashes( $_POST['cap'] );
    $utente['citta'] = addslashes( $_POST['citta'] );
    $utente['indirizzo'] = addslashes( $_POST['indirizzo'] );
    $utente['email'] = addslashes( $_POST['email'] );

    if ( $managerSql->modifica_utente($utente) ){
        header('Location: userlist.php');
    }else{
        header('Location: error.php?code=4');
    }
}


//modifica dati accesso
if($_POST['modifica'] == "password"){
    
    $utente = $managerSql->get_utente( $_POST['id_utente'] );
    if ($managerSql->modifica_password($utente, md5($_POST['nuova_password'])) ){
        header('Location: userlist.php' );
        exit();
    }

}

?>
