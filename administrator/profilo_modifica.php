<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica Admin mode
include '../common/verifica_adm_mode.php';
//fine verifica login


include '../common/dbmanager.php';
$managerSql = new dbManager();
$utente = $managerSql->get_utente($_GET['id']);
if(empty($utente)){
    header('Location: error.php?code=4');
    exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modifica del profilo</title>
</head>

<body>
    <p>Profilo dell'utente <?php echo $utente['username'] ?></p>

    

    <form id="form1" method="post" action="salva_modifiche_profilo.php">
        <p>Codice identificativo: 
            <input name="id_utente" type="text" id="id_utente" maxlength="20" value="<?php echo $utente['id_utente']; ?>" readonly /> <br/>
  <p>--Dati Fatturazione--<br />
    Nome
    <input name="nome" type="text" id="nome" maxlength="100" value="<?php echo htmlentities($utente['nome']); ?>"/>
    <br />
    Cognome
    <input name="cognome" type="text" id="cognome" maxlength="100" value="<?php echo htmlentities($utente['cognome']); ?>" />
    <br />
    Codice Fiscale
    <input name="codice_fiscale" type="text" id="codice_fiscale" maxlength="16" value="<?php echo $utente['codice_fiscale']; ?>" />
    <br />
  Indirizzo
  <input name="indirizzo" type="text" id="indirizzo" maxlength="150" value="<?php echo htmlentities($utente['indirizzo']); ?>" />
  <br />
  EMail
  <input name="email" type="text" id="email" maxlength="200" value="<?php echo htmlentities($utente['email']); ?>" />
  </p>
  <input type="hidden" name="modifica" value="fatturazione" />
  <input type="reset" name="ripristina" id="ripristina" value="Ripristina" />
  <input type="submit" name="salva" id="salva" value="Salva Modifiche" />
</form>

    <form id="form1" method="post" action="salva_modifiche_profilo.php">
    <p>--Dati Accesso--<br />
  Username
  <input name="username" type="text" id="username" maxlength="30" value="<?php echo $utente['username']; ?>" readonly />
    <br />
  Nuova Password
  <input name="nuova_password" type="password" id="nuova_password" maxlength="20" />
</p>
<input type="hidden" name="id_utente" value="<?php echo $utente['id_utente']; ?>" />
<input type="hidden" name="modifica" value="password" />
<input type="reset" name="ripristina" id="ripristina" value="Ripristina" />
  <input type="submit" name="salva" id="salva" value="Modifica Password" />
</form>
<p>
  
</p>


</body>
</html>