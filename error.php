  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">


		<head>

         	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         	<meta name="title" content="Dritta in diritto" />
         	<meta name="author" content="Alberto Marà (Marangelo) - Amedeo Ferro" />
          	<meta name="keywords" content="A B C D" />
          	<meta name="robots" content="index" />
          	<meta name="Revisit-after" content="90 days" />

          	<title>Dritta in diritto</title>

          	<link href="css/style_frontend.css" rel="stylesheet" type="text/css" media="screen" />
           	<link href="css/style_form.css" rel="stylesheet" type="text/css" media="screen" />

		</head>

        <body>

	<div id="navigation">
		<div id="nav_box">
		
		
			
			<div style="margin-top:10px;">
			<a class="nav_voice" href="index.php">
				<img src="common/menu/home_off.png" onmouseover='this.src = "common/menu/home_on.png";' onmouseout='this.src="common/menu/home_off.png";'/>
			</a><img src="common/menu/space.png" />
			
			<a class="nav_voice" href="myprofile.php">
				<img src="common/menu/myprof_off.png" onmouseover='this.src = "common/menu/myprof_on.png";' onmouseout='this.src="common/menu/myprof_off.png";'/>
			</a><img src="common/menu/space.png" />
			
			<a class="nav_voice"  href="download/Contratto.pdf">
				<img src="common/menu/note_off.png" onmouseover='this.src = "common/menu/note_on.png";' onmouseout='this.src="common/menu/note_off.png";'/>
			</a><img src="common/menu/space.png" />
			
			<a class="nav_voice" href="contatti.php">
				<img src="common/menu/contact_off.png" onmouseover='this.src = "common/menu/contact_on.png";' onmouseout='this.src="common/menu/contact_off.png";'/>
			</a>
			</div>
		
		</div>
	</div>

            <div id="header">
            </div>

            <div id="content">

            	<!--REGISTRAZIONE-->
                <div id="rec_box"><br />
				<br /><br /><br />
                  <p class="nodato">


<?php

//se l'accesso alla pagina avviene senza fornire un codice
if( empty($_GET['code']) ){
    $code = 0;
}


$code = $_GET['code'];

switch ($code) {
    case 0:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;errore nell accesso alla pagina';
        break;

    case 1:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;i dati non sono stati forniti in modo corretto';
        break;

    case 2:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è stato possibile aggiungere l\'utente' ;
        break;

    case 3:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;utente non presente' ;
        break;

    case 4:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è stato possibile modificare l\'utente' ;
        break;

    case 5:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;username o password errati' ;
        break;

    case 6:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non hai i diritti d\'accesso alla pagina' ;
        break;

    case 7:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è possibile caricare il file fornito' ;
        break;

    case 8:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è possibile spostare il file fornito' ;
        break;

    case 9:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è possibile trovare il file richiesto' ;
        break;

    case 10:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è possibile eliminare il file richiesto</br>non sei il proprietario della risorsa' ;
        break;

    case 11:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è possibile eliminare il file richiesto' ;
        break;

    case 12:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;il file risulta già pagato' ;
        break;

    case 13:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;il codice fiscale fornito non è corretto' ;
        break;

    case 14:
        echo '&nbsp;&nbsp;&nbsp;&nbsp;non è stato possibile fornire una nuova password all\'utente';
        break;

    default:
        break;
}

?>
                      <br/>&nbsp;&nbsp;&nbsp;&nbsp;Torna alla <a href="index.php" >HOME PAGE</a>
                  </p>

                  <p><img src="image/registration_box/Sticker_hrimage.png" style="margin-left: 20px;" /></p>
                </div>

            </div>


                         <br /><br /><br /><br />





			<!--footer-->
             <div id="footer">

                <div id="foot">
					<p class="foot">
                    P.IVA : 04929920652 - property of Dritta in diritto - CSB <br />
					:::<a href="http://www.pixosystems.com/">Created by Pixo Systems - Anzio (RM)</a>:::
                    </p>
                </div>

             </div>


        </body>
    </html>










