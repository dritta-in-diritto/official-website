<?php

if( empty($_POST['nome']) || empty($_POST['cognome']) || empty($_POST['codicefiscale']) || empty($_POST['indirizzo']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) ){
    header('Location: error.php?code=1');
    exit();
}

$utente['nome'] = addslashes( $_POST['nome'] );
$utente['cognome'] = addslashes( $_POST['cognome'] );
$utente['codicefiscale'] = strtoupper( $_POST['codicefiscale'] );
$utente['indirizzo'] = addslashes( $_POST['indirizzo'] );
$utente['email'] = addslashes( $_POST['email'] );
$utente['username'] = addslashes( $_POST['username'] );
$utente['password'] = md5( $_POST['password'] );

include 'common/dbmanager.php';
$managerSql = new dbManager();

if ( $id = $managerSql->aggiungi_utente($utente) ){
    //mail di avvenuta registrazione

    //login post-registrazione
    session_start();
    session_unset();
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $utente['username'];
    header('Location: profilo_view.php?id='.$id);

    mkdir("utenti/{$utente['username']}");
}else{
    header('Location: error.php?code=2');
}

?>
