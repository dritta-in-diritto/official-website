<?php

include '../common/verifica_adm_mode.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista utenti</title>
</head>

<body>
<p>Lista utenti registrati nel sistema
</p>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Email</th>
    <th>Username</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

  <?php

  include_once '../common/dbmanager.php';
  $managerSql = new dbManager();

  $utenti = $managerSql->lista_utenti();
  $num_utenti = count($utenti);
  for($i=0; $i<$num_utenti; $i++){
      $utente = $utenti[$i];
      echo "  <tr>
                <td>{$utente['id_utente']}</td>
                <td>{$utente['nome']}</td>
                <td>{$utente['cognome']}</td>
                <td>{$utente['email']}</td>
                <td>{$utente['username']}</td>
                <td><a href=\"profilo_modifica.php?id={$utente['id_utente']}\">Modifica</a></td>
                <td><a href=\"elimina_utente.php?id={$utente['id_utente']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare l\'utente?');\">Elimina</a></td>
                <td>Invia Mail</td>
              </tr>";
  }

  ?>

</table>
<p>&nbsp; </p>
</body>
</html>