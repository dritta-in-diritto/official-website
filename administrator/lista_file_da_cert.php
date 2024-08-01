<?php

include '../common/verifica_adm_mode.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista file</title>
</head>

<body>
<p>Lista file caricati nel sistema
</p>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Nome File</th>
        <th>Pagamento</th>
        <th>Ore Consulenza Restanti</th>
    </tr>

  <?php

  include_once '../common/dbmanager.php';
  $managerSql = new dbManager();

  $lista_file = $managerSql->lista_file_da_certificare();
  $num_file = count($lista_file);
  for($i=0; $i<$num_file; $i++){
      $file = $lista_file[$i];
      $utente = $managerSql->get_utente($file['id_utente']);
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
      echo "  <tr>
                <td>{$file['id_file_caricato']}</td>
                <td>{$utente['username']}</td>
                <td><a href=\"../utenti/{$utente['username']}/{$file['id_file_caricato']}/{$file['nome_file']}\">{$file['nome_file']}</a></td>
                <td>{$file['pagamento']}</td>
                <td>$ore_restanti</td>
                <td><a href=\"elimina_file.php?id={$file['id_file_caricato']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
                <td><a href=\"segnala_certificato.php?id={$file['id_file_caricato']}\" onclick=\"javascript: return confirm('Sei sicuro di voler segnalare il file come ?');\">Segnala come Certificato</a></td>
              </tr>";
  }

  ?>

</table>
<p><a href="lista_file.php">Lista File Completa</a></p>
</body>
</html>