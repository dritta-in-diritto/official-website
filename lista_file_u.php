<?php

//verifica login
session_start();
include 'common/verifica_login.php';
//fine verifica login


include 'common/dbmanager.php';
$managerSql = new dbManager();
$utente = $managerSql->get_utente($_SESSION['id']);
if(empty($utente)){
    header('Location: error.php?code=3');
    exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista file caricati</title>
</head>

<body>
<p>Lista dei file caricati dell'utente <?php echo $utente['username'] ?></p>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Pagamento</th>
        <th>Ore Consulenza Restanti</th>
    </tr>

    <?php

    $lista_file = $managerSql->lista_file_by_utente($utente);
    $num_file = count($lista_file);

    for($i=0; $i<$num_file; $i++){
        $file=$lista_file[$i];
        $ore_restanti=0; //qualsiasi numero maggiore di 2 ossia dei giorni di consulenza
        if($file['data_certificazione']){

            //$differenza=(strtotime(date('Y-m-d')) - strtotime($file['data_certificazione']))/(86400);
            $arr_data_time = explode(" ", $file['data_certificazione']);
            $data = $arr_data_time[0];
            $ora = $arr_data_time[1];
            $arr_data = explode("-",$data);
            $arr_ora = explode(':', $ora);
            $differenza =floor((mktime(date('H')+2, date('i'), date('s'), date('m'), date('d'), date('Y'))-
                         mktime($arr_ora[0], $arr_ora[1], $arr_ora[2], $arr_data[1], $arr_data[2], $arr_data[0]))/(60*60));

            if( $differenza>48 ){
                $ore_restanti = 0;
            }else{
                $ore_restanti=48-$differenza;
            }
        }
        echo "<tr>
                <td>{$file['id_file_caricato']}</td>
                <td><a href=\"utenti/{$utente['username']}/{$file['id_file_caricato']}/{$file['nome_file']}\">{$file['nome_file']}</a></td>
                <td>{$file['pagamento']}</td>
                <td>$ore_restanti</td>
                <td><a href=\"elimina_file.php?id={$file['id_file_caricato']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
            </tr>";
    }

    ?>
</table>

<p>&nbsp;</p>

<form action="file_upload.php" method="post" enctype="multipart/form-data" id="form1">
  <p>Caricamento file da certificare</p>
  <p>File: 
    <input type="file" name="nuovo_file" id="nuovo_file" />
  </p>
  <p>
    <input type="reset" name="reset" id="reset" value="Reset" />
    <input type="submit" name="invia" id="invia" value="Invia" />
  </p>
</form>
<p>&nbsp;</p>





</body>
</html>