<?php

include '../common/verifica_adm_mode.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista News</title>
</head>

<body>
    <p>Lista news</p>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>

        <?php

        include_once '../common/dbmanager.php';
        $managerSql = new dbManager();

        $news = $managerSql->lista_news();
        $num_news = count($news);
        for($i=0; $i<$num_news; $i++){
            $notizia = $news[$i];
            echo "<tr>
                    <td>{$notizia['id_news']}</th>
                    <td>{$notizia['titolo']}</td>
                    <td><a href=\"modulo_modifica_news.php?id={$notizia['id_news']}\">Modifica</a></td>
                    <td><a href=\"elimina_news.php?id={$notizia['id_news']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
                </tr>";

        }

        ?>
    </table>

    <p><a href="modulo_add_news.php">Aggiungi News</a></p>
</body>

</html>