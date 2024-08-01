<?php

include '../common/verifica_adm_mode.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento senza titolo</title>
</head>

<body>
<p>Lista download</p>

<table border="1">
    <tr>
        <th>Tipo</th>
        <th>Nome file</th>
        <th>&nbsp;</th>
    </tr>
    <?php

    $path = '../download/';
    if ($dh = opendir($path)) {
        while ((( $file = readdir($dh)) !== false)  ) {
            if ( !is_dir($path.$file) ){
                $name_array = explode('.', $file);
                $estensione = $name_array[count($name_array)-1];
                $url_encode_filename = urlencode($file);
                echo "<tr>
                        <td>$estensione</td>
                        <td>$file</td>
                        <td><a href=\"elimina_download.php?nome=$url_encode_filename\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
                     </tr>";
            }
        }
        closedir($dh);
    }
?>
</table>


<p>&nbsp;</p>
<form action="carica_file.php" method="post" enctype="multipart/form-data" id="form1">
  File da caricare 
  <input type="file" name="nuovo_file" id="nuovo_file" />
  <input type="submit" name="invia" id="invia" value="Invia" />
</form>
<p>&nbsp;</p>
</body>
</html>
