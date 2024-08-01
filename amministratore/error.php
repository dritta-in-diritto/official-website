<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Errore</title>
</head>

<body>

<?php

//se l'accesso alla pagina avviene senza fornire un codice
if( empty($_GET['code']) ){
    $code = 0;
}


$code = $_GET['code'];

switch ($code) {
    case 0:
        echo 'errore nell accesso alla pagina';
        break;

    case 1:
        echo 'i dati non sono stati forniti in modo corretto';
        break;

    case 2:
        echo 'i dati per l\'accesso non sono corretti';
        break;

    case 3:
        echo 'non hai i diritti d\'accesso alla pagina' ;
        break;

    case 4:
        echo 'utente non presente' ;
        break;

    case 5:
        echo 'non è stato possibile eliminare l\'utente' ;
        break;

    case 6:
        echo 'non è stato possibile eliminare il file' ;
        break;

    case 7:
        echo 'non è stato possibile accedere al file' ;
        break;

    case 8:
        echo 'non è stato possibile modificare lo stato del pagamento del file' ;
        break;

    case 9:
        echo 'non è stato possibile aggiungere la notizia' ;
        break;

    case 10:
        echo 'non è stato possibile eliminare la notizia' ;
        break;

    case 11:
        echo 'non è stato possibile recuperare la notizia' ;
        break;

    case 12:
        echo 'non è stato possibile modificare la notizia' ;
        break;

    case 13:
        echo 'non è stato possibile caricare il file nell\'area download';
        break;

    case 14:
        echo 'non è stato possibile rimuovere il file dall\'area download';
        break;
    
    default:
        break;
}

?>


</body>
</html>