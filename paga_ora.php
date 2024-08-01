<?php

if( empty($_GET['obj']) ){
    header('Location: error.php?code=0');
    exit();
}

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

//per verificare ke il pagamento è avvenuto esattamente tramite la pagina attualmente in uso
$_SESSION['item_number'] = $_GET['obj'];

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





        	<!--NAVIGAZIONE-->
	<div id="navigation">
		<div id="nav_box">
		
		
			
			<div style="margin-top:10px;">
			<a class="nav_voice" href="index.php">
				<img src="common/menu/home_off.png" onmouseover='this.src = "common/menu/home_on.png";' onmouseout='this.src="common/menu/home_off.png";'/>
			</a><img src="common/menu/space.png" />
			
			<a class="nav_voice" href="areadownload.php">
				<img src="common/menu/download_off.png" onmouseover='this.src = "common/menu/download_on.png";' onmouseout='this.src="common/menu/download_off.png";'/>
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





			<!--TESTATA-->
            <div id="header">

                <div id="head_box">
					<p class="head">&nbsp;</p>
                </div>

            </div>






			<div id="content">


                	<!--New_box-->
                      <div id="newslist_box">
                      	<img src="image/areanews_box/sticker_news.png" style="margin-left:-33px; margin-top:0px;"" />

                      	<div class="news_list">

                            <!--
                            <p class="news_title">LOREM IMPSUM</p>
                            <p class="news_post">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <br /><br />
                           -->
                           
                           <?php
                           $file = $managerSql->cerca_file_by_id($_GET['obj']);
                           if(!$file){
                               header('Location: error.php?code=9');
                                exit();
                           }
                           if(strcmp($file['pagamento'], "non pagato") != 0){
                               header('Location: error.php?code=12');
                                exit();
                           }

                           ?>
                           <p>Stai pagando il file <?php echo $file['id_file_caricato']; ?> <br />
                           Nome: <?php echo $file['nome_file']; ?> </p>
                           <p>
                               Metodi di pagamento
                           </p>
                           
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
							<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">-->
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="business" value="centro_studi_boccella@yahoo.it">
							<input type="hidden" name="lc" value="IT">
							<input type="hidden" name="item_name" value="file da certificare con marcatura">
							<input type="hidden" name="item_number" value="<?php echo $file['id_file_caricato']; ?>">
							<input type="hidden" name="amount" value="9.90">
							<input type="hidden" name="currency_code" value="EUR">
							<input type="hidden" name="button_subtype" value="services">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
							<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - Il sistema di pagamento online più facile e sicuro!">
							<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
							<!--<input type="image" src="https://www.sandbox.paypal.com/WEBSCR-640-20110429-1/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - Il sistema di pagamento online più facile e sicuro!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/WEBSCR-640-20110429-1/it_IT/i/scr/pixel.gif" width="1" height="1">-->
							</form>


                        </div>

                      </div>


             </div>




             <br /><br /><br />





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