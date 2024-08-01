<?php
session_start();
if( !empty($_SESSION['id']) && !empty($_SESSION['username']) ){
    include 'common/dbmanager.php';
    $managerSql = new dbManager();
    $utente = $managerSql->get_utente($_SESSION['id']);
    if(empty($utente)){
        header('Location: error.php?code=3');
        exit();
    }
}
?>
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
			
			<a class="nav_voice" href="download/Contratto.pdf">
				<img src="common/menu/note_off.png" onmouseover='this.src = "common/menu/note_on.png";' onmouseout='this.src="common/menu/note_off.png";'/>
			</a><img src="common/menu/space.png" />
			
			<a class="nav_voice" href="contatti.php">
				<img src="common/menu/contact_off.png" onmouseover='this.src = "common/menu/contact_on.png";' onmouseout='this.src="common/menu/contact_off.png";'/>
			</a>
			</div>
		
		</div>
                
	</div>
            
	<div id="header"><!--spazia tra navbox e content--></div>
            
	<!--content-->
	<div id="content">

		<!--accesso utenza-->
		<div id="log_box">

			<img src="image/lognow_box/Sticker_lognow.png" style="margin-left:-30px;" />

                    <?php
                    if( empty($_SESSION['id']) || empty($_SESSION['username']) ){

                        echo "<form class=\"login\" id=\"form1\" method=\"post\" action=\"login.php\">

						<p class=\"nodato\">
							Benvenuto utente!
							<br />
							Se sei registrato ACCEDI SUBITO!
						</p>

						<br />

						<p class=\"nodato\">Username&nbsp;<input type=\"text\" name=\"username\" id=\"username\" class=\"input_logereg\" style=\"margin-left:3px;\" /></p>
						<p class=\"nodato\">password&nbsp;<input type=\"password\" name=\"password\" id=\"password\" class=\"input_logereg\" style=\"margin-left:7px;\" /></p>

						<input type=\"submit\" name=\"login\" id=\"login\" class=\"input_logereg\" value=\"ENTRA ORA\" style=\"margin-left:85px;\"/>

					</form>

					<br/>
					<p class=\"nodato\"><a href=\"modulo_recupera_pwd.php\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Hai dimenticato la password?</a></p>
                    ";

					}else{
                        
                        echo "<br /><br />
							<p class=\"nodato\">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benvenuto {$utente['username']} - <a href=\"logout.php\" style=\"font-weight:bold;\">LogOut</a>
                            </p>";
                    }


                    ?>

		</div>

		<!--link alla registrazione-->
		<div id="rec_box_home">
	
			<img src="image/registration_box/Sticker_registration.png" style="margin-left:-30px;" />
	
			<p class="rec_welcome_home">
				Dritta in diritto ti da il benvenuto<br />
				Utilizza subito la registrazione del sito e 
				scopri subito ogni vantaggio che puoi 
				ottenere con il tuo profilo personale!
				<br /><br />
				L'iscrizione è gratuita cosa aspetti?
				<br /><br />
				Pacchetto base <span style="font-weight:bold">9.90 euro</span>,  
				registrati e  scopri i vantaggi riservati ai nostri clienti.
				<br /><br />
	
				<a href="modulo_registrazione.php" style="font-weight:bold; font-size:14px;">REGISTRATI SUBITO - CLICCA QUI!!</a>
	
			</p>
			
			<br /><br /><br /><br />
	
		</div>
					
		<!--cos'è drittaindiritto-->		
		<div id="info_box">
			
			<img src="image/info_box/sticker_info.png" style="margin-left:40px;" />
				
				<p class="infobox_title">
					COSE' DRITTA IN DIRITTO?                    
				 </p>
	
				<p class="infobox_write">
					Dal mix dell'evulozione delle tecnologie informatiche e le continue spinte di ammodernamento
					della legislazione europea nasce il sistema di certificazione che permette
					di dimostrare , se serve anche in giudizio, di aver composto, creato, progettatto, pensato ...
					<br/><br />
					Con pochi e semplici click potrai tutelare le tue idee con la tranquillità, di una consulenza legale
					sulla validità e opponibilità del procedimento di datazione usato e il sostegno di un network di esperti
					in diritto economia e informatica coordinati dal supporto tecnico e informatico del CSB
				</p>
		</div>
            
            
	</div>
	<!--/content-->
            
            
            
           	
    
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