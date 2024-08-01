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
$utente = $managerSql->get_utente($_GET['id']);
if(empty($utente)){
    header('Location: error.php?code=3');
    exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vista del profilo</title>
</head>

<body>
    <p>Profilo dell'utente <?php echo $utente['username'] ?></p>

    <p>Codice identificativo: <?php echo $utente['id_utente']; ?><br/>
        Nome: <?php echo $utente['nome']; ?><br/>
Cognome: <?php echo $utente['cognome']; ?><br/>
Codice Fiscale: <?php echo $utente['codice_fiscale']; ?><br/>
Indirizzo: <?php echo $utente['indirizzo']; ?><br/>
EMail: <?php echo $utente['email']; ?></p>

<p>Username: <?php echo $utente['username']; ?><p>

<p><a href="profilo_modifica.php">Modifica</a></p>

<p><a href="lista_file_u.php">Lista file Caricati</a></p>
</body>
</html>