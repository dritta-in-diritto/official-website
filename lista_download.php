<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Area Download</title>
</head>

<body>
<p>Lista download</p>

<table border="1">
    <tr>
        <th>Tipo</th>
        <th>Nome file</th>
    </tr>
    <?php

    $path = 'download/';
    if ($dh = opendir($path)) {
        while ((( $file = readdir($dh)) !== false)  ) {
            if ( !is_dir($path.$file) ){
                $name_array = explode('.', $file);
                $estensione = $name_array[count($name_array)-1];
                $url_encode_filename = urlencode($file);
                $indirizzo = $path . $file;
                echo "<tr>
                        <td><a href=\"$indirizzo\">$estensione</a></td>
                        <td>$file</td>
                     </tr>";
            }
        }
        closedir($dh);
    }
?>
</table>

<p>&nbsp;</p>
</body>
</html>
