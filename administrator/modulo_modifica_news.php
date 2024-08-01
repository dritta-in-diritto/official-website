<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica login
include '../common/verifica_adm_mode.php';
//fine verifica login

include '../common/dbmanager.php';
$managerSql = new dbManager();

$notizia = $managerSql->get_news($_GET['id']);
if( ! $notizia ){
    header('Location: error.php?code=11');
    exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo modifica notizia</title>
</head>

<body>
<p>Modifica News</p>
<form id="form1" method="post" action="modifica_news.php">

    <p>Id notizia <input name="id_news" type="text" id="id_news" value="<?php echo $notizia['id_news']; ?>" readonly /><br/>
      Titolo
      <input name="titolo" type="text" id="titolo" size="50" maxlength="200" value="<?php echo htmlentities($notizia['titolo']); ?>" />
  </p>
  <p>
    <textarea name="testo" id="testo" cols="50" rows="10"><?php echo $notizia['testo']; ?></textarea>
    <br />
    <input type="submit" name="salva" id="salva" value="Salva" />
    <br />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>