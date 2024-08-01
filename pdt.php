
<?php

//verifica login
session_start();
include 'common/verifica_login.php';
//fine verifica login


// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-synch';

$tx_token = $_GET['tx'];

$auth_token = "IqYG-tL86m5FyQc86D0NkYj-ys04SqzU4sz1pwvsb_x-8vEfkSyfuczmJ18";

$req .= "&tx=$tx_token&at=$auth_token";


// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
//$fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
// If possible, securely post back to paypal using HTTPS
// Your PHP server will need to be SSL enabled
 $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

if (!$fp) {
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
// read the body data
$res = '';
$headerdone = false;
while (!feof($fp)) {
$line = fgets ($fp, 1024);
if (strcmp($line, "\r\n") == 0) {
// read the header
$headerdone = true;
}
else if ($headerdone)
{
// header has been read. now read the contents
$res .= $line;
}
}

// parse the data
$lines = explode("\n", $res);
$keyarray = array();
if (strcmp ($lines[0], "SUCCESS") == 0) {
for ($i=1; $i<count($lines);$i++){
list($key,$val) = explode("=", $lines[$i]);
$keyarray[urldecode($key)] = urldecode($val);
}


// check the payment_status is Completed
if( strcmp($keyarray['payment_status'], "Completed") != 0 ){
    exit('Il pagamento non è andato a buon fine... Riprovare o contattare l\'amministratore');
}

// check item_number is $_SESSION['item_number']
if( !empty($_SESSION['item_number']) && (strcmp($keyarray['item_number'], $_SESSION['item_number'] ) != 0) ){
    exit('Pagamento effettuato in modo illegale');
}

// check that txn_id has not been previously processed
// check that receiver_email is your Primary PayPal email
if( strcmp($keyarray['receiver_email'], "centro_studi_boccella@yahoo.it") != 0 ){
    exit('Pagamento effettuato in modo illegale');
}

// check that payment_amount/payment_currency are correct
if( strcmp($keyarray['mc_gross'], "9.90") != 0 ){
    exit('Pagamento effettuato in modo illegale');
}


// process payment
include 'common/dbmanager.php';
$managerSql = new dbManager();
$file = $managerSql->cerca_file_by_id($_SESSION['item_number']);
if( !$file ){
    header('Location: error.php?code=7');
    exit();
}else{
    $file['pagamento'] = "Pagato il {$keyarray['payment_date']}";
    if( !$managerSql->modifica_file( $file ) ){
        header('Location: error.php?code=8');
        exit();
    }
}



$firstname = $keyarray['first_name'];
$lastname = $keyarray['last_name'];
$itemname = $keyarray['item_name'];
$itemnumber = $keyarray['item_number'];
$amount = $keyarray['mc_gross'];

echo ("<p><h3>Grazie per il pagamento</h3></p>");

echo ("<b>Dettagli del pagamento</b><br>\n");
echo ("<li>Name: $firstname $lastname</li>\n");
echo ("<li>Item: $itemname</li>\n");
echo ("<li>Item number: $itemnumber</li>\n");
echo ("<li>Amount: $amount</li>\n");

//pagamento andato a buon fine. è possibile tornare alla pagina del profilo
header('Location: myprofile.php');
exit();

}
else if (strcmp ($lines[0], "FAIL") == 0) {
// log for manual investigation
    echo 'Sono avvenuti errori nel pagamento... Contattare l\'amministratore';
}

}

fclose ($fp);

?>