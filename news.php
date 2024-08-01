<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News</title>
</head>

<body>
<p>Lista news</p>

<?php
include 'common/dbmanager.php';
$managerSql = new dbManager();

$news = $managerSql->lista_news();
$num_news = count($news);
for($i=0; $i<$num_news; $i++){
    $notizia = $news[$i];
    echo "<p style=\"font-weight:bold\">{$notizia['titolo']}</p>{$notizia['testo']}<p>&nbsp;</p>";
}
?>

</body>
</html>