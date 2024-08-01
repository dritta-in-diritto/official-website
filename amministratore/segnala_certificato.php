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

$file = $managerSql->cerca_file_by_id($_GET['id']);

if( !$file ){
    header('Location: error.php?code=7');
    exit();
}else{
    $stato = 'certificato';

    $file['pagamento'] = 'certificato';
    $file['data_certificazione'] = date('Y-m-d ') . (date('H')+2) . ':' .date('i:s');
    if( $managerSql->modifica_file( $file ) ){


        header('Location: filelist_only.php');
        exit();
    }else{
        header('Location: error.php?code=8');
        exit();
    }
        
}

?>
