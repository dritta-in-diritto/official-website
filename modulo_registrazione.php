<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrazione UTENTE</title>
</head>
<body>
<p>Registrazione dell'utente</p>
<form id="form1" method="post" action="registrazione.php">
  <p>--Dati Fatturazione--<br />
    Nome
    <input name="nome" type="text" id="nome" maxlength="100" />
    <br />
    Cognome
    <input name="cognome" type="text" id="cognome" maxlength="100" />
    <br />
    Codice Fiscale
    <input name="codicefiscale" type="text" id="codicefiscale" maxlength="16" />
    <br />
  Indirizzo
  <input name="indirizzo" type="text" id="indirizzo" maxlength="150" />
  <br />
  EMail
  <input name="email" type="text" id="email" maxlength="200" />
  </p>
<p>--Dati Accesso--<br />
  Username
    <input name="username" type="text" id="username" maxlength="30" />
    <br />
  Password
  <input name="password" type="password" id="password" maxlength="20" />
</p>
<p>
  <input type="reset" name="cancella" id="cancella" value="Cancella" />
  <input type="submit" name="registrati" id="registrati" value="Registrati" />
</p>
</form>
<p>&nbsp;</p>
</body>
</html>