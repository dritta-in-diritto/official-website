<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator INDEX</title>
</head>

<body>
    <?php
    session_start();
    $status = 'OFF';
    if( !empty($_SESSION['adm_mode']) && ($_SESSION['adm_mode']=='ON') ){
        $status = 'ON';
    }
    ?>

<p>Administrator  -  Admin Mode: <?php echo $status; ?></p>
<p><a href="modulo_login_adm.php">LogIn Adm</a></p>
<p><a href="logout_adm.php">LogOut Adm</a></p>
<p><a href="lista_utenti.php">Lista Utenti</a></p>
<p><a href="lista_file.php">Lista File</a></p>
<p><a href="lista_news.php">Lista News</a></p>
<p><a href="lista_download.php">Lista Download</a></p>
<p>--------------------------</p>
<p><a href="../index.php">User Index</a></p>
</body>
</html>