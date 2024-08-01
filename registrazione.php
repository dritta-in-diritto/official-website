<?php

if( empty($_POST['nome']) || empty($_POST['cognome']) || empty($_POST['codicefiscale']) || empty($_POST['cap']) || empty($_POST['citta']) || empty($_POST['indirizzo']) || empty($_POST['email']) || empty($_POST['email2']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2']) ){
    header('Location: error.php?code=1');
    exit();
}

if( empty($_POST['accetta_privacy'])){
    header('Location: error.php?code=1');
    exit();
}

if( empty($_POST['accetta_contratto'])){
    header('Location: error.php?code=1');
    exit();
}

if(  strcmp( $_POST['password'], $_POST['password2']) != 0 ){
    header('Location: error.php?code=1');
    exit();
}

if(  strcmp( $_POST['email'], $_POST['email2']) != 0 ){
    header('Location: error.php?code=1');
    exit();
}

include 'common/controllo_cf.php';
if( !ControlloCF($_POST['codicefiscale']) ){
    header('Location: error.php?code=13');
    exit();
}

$utente['nome'] = addslashes( $_POST['nome'] );
$utente['cognome'] = addslashes( $_POST['cognome'] );
$utente['codicefiscale'] = strtoupper( $_POST['codicefiscale'] );
$utente['cap'] = addslashes( $_POST['cap'] );
$utente['citta'] = addslashes( $_POST['citta'] );
$utente['indirizzo'] = addslashes( $_POST['indirizzo'] );
$utente['email'] = addslashes( $_POST['email'] );
$utente['username'] = addslashes( $_POST['username'] );
$utente['password'] = md5( $_POST['password'] );

include 'common/dbmanager.php';
$managerSql = new dbManager();

if ( $id = $managerSql->aggiungi_utente($utente) ){
    //mail di avvenuta registrazione
    $testo = "<p>Lo staff di drittaindiritto.it ti da il benvenuto.</p>
            <p>Dati per l'accesso:</p>
            <p>Username: {$utente['username']}</p>
            <p>Password: {$_POST['password']}</p>";

    include 'common/mail/mail.php';
    invia_mail( $testo, 'Registrazione Effettuata', $utente['email']);

    //login post-registrazione
    session_start();
    session_unset();
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $utente['username'];
    header('Location: myprofile.php?id='.$id);

    mkdir("utenti/{$utente['username']}");
}else{
    header('Location: error.php?code=2');
}

?>
