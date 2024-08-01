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
        echo 'non è stato possibile aggiungere l\'utente' ;
        break;

    case 3:
        echo 'utente non presente' ;
        break;

    case 4:
        echo 'non è stato possibile modificare l\'utente' ;
        break;

    case 5:
        echo 'username o password errati' ;
        break;

    case 6:
        echo 'non hai i diritti d\'accesso alla pagina' ;
        break;

    case 7:
        echo 'non è possibile caricare il file fornito' ;
        break;

    case 8:
        echo 'non è possibile spostare il file fornito' ;
        break;

    case 9:
        echo 'non è possibile trovare il file richiesto' ;
        break;

    case 10:
        echo 'non è possibile eliminare il file richiesto</br>non sei il proprietario della risorsa' ;
        break;

    case 11:
        echo 'non è possibile eliminare il file richiesto' ;
        break;

    default:
        break;
}

?>


</body>
</html>