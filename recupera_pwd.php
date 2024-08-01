<?php

if( empty ($_POST['email']) ){
    header('Location: error.php?code=1');
    exit();
}


include 'common/dbmanager.php';
$managerSql = new dbManager();

$email = addslashes($_POST['email']);
$utente = $managerSql->get_utente_by_email($email);


if(empty($utente)){
    header('Location: error.php?code=3');
    exit();
}


$new_pwd = uniqid('new_');
$new_pwd_md5 = md5($new_pwd);

if( $managerSql->modifica_password($utente, $new_pwd_md5) ){

    //invia mail con la nuova password
    $testo = "<p>Lo staff di drittaindiritto.it ti ha fornito una nuova password.</p>
            <p>Dati per l'accesso:</p>
            <p>La nuova password è: $new_pwd </p>";

    include 'common/mail/mail.php';
    invia_mail( $testo, 'Recupero password', $utente['email']);

    header('Location: index.php');

}else{
    header('Location: error.php?code=14');
    exit();
}

?>
