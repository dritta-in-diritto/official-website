<?php

include '../common/verifica_adm_mode.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulo aggiunta nuova notizia</title>
</head>

<body>
<p>Nuova News</p>
<form id="form1" method="post" action="add_news.php">
  <p>Titolo
    <input name="titolo" type="text" id="titolo" size="50" maxlength="200" />
  </p>
  <p>
    <textarea name="testo" id="testo" cols="50" rows="10"></textarea>
    <br />
    <input type="submit" name="salva" id="salva" value="Salva" />
    <br />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>