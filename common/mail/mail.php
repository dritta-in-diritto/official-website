<?php
require_once('class.phpmailer.php');
include_once("class.smtp.php");


function invia_mail($testo, $oggetto, $indirizzo  ){
	//ob_end_flush();
    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
    $mail->IsSMTP(); // telling the class to use SMTP

    try {
      //$mail->Host       = "smtp.tiscali.it"; // SMTP server
	  
	  $mail->SMTPAuth  = true;
	  $mail->Host       = "smtp.drittaindiritto.it";
	  $mail->Port = 25;
	  $mail->Username ="info@drittaindiritto.it";
	  $mail->Password = "infoingresso";
	  

     // $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)

          $mail->AddAddress($indirizzo);
          $mail->SetFrom('info@drittaindiritto.it', 'Amministrazione | drittaindiritto.it');
          $mail->Subject = $oggetto;
          $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
          //$mail_txt="<style>img { border:none}</style>";

          $mail_txt=file_get_contents('mail_header.html',true);
          //$mail->MsgHTML(file_get_contents('contents.html'));
          $mail_txt.=$testo;
          $mail_txt.=file_get_contents('mail_footer.html',true);
    
          $mail->MsgHTML($mail_txt);
          $mail->Send();
      
      
      return true;
    } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
            //return false;
    } catch (Exception $e) {
          echo $e->getMessage(); //Boring error messages from anything else!
          //return false;
    }

}

?>
