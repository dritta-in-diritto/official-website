<?php
    session_start();
    if( !empty($_SESSION['adm_mode']) && ($_SESSION['adm_mode']=='ON') ){
        header('Location: admin.php');
        exit();
    }
    ?>

﻿  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
          
          	<link href="../css/style_beckend.css" rel="stylesheet" type="text/css" media="screen" />
           	<link href="../css/style_form.css" rel="stylesheet" type="text/css" media="screen" />
            
         
		</head>

        <body>
        
               
        	<div id="navigation">
            
                <div id="nav_box">
					<!--BOX DI NAVIGAZIONE-->
                    <a class="nav_voice" href="admin.php">ADMIN PAGE</a>&nbsp;/
                    
                    <a class="nav_voice" href="../index.php">LOG OUT</a>&nbsp;
                </div>
                
            </div>
            
            <div id="header">
            </div>
            
            <div id="content">
            
            	<br />
            	
                <div id="admin_box">
	                
                	<img src="../image/admin_box/Sticker_aministrazione.png" style="margin-left:50px; margin-top:30px;" />
                    
                    
                    <!--BOX MODIFICA I DATI UTENTE-->
                    <div id="usermod_box">
						
						<div id="wrap_pops">	 
                                    
							<!--rendi invisibile-->
							<img src="../image/usermod_box/sticker_close.png" style="cursor:pointer; position:absolute; z-index:81694287491; margin-top:0px; margin-left:420px;" onclick="showHide_UsermodBox()" />

							<br />
                                    
                                    
                            <div id="user_datileft">
                                        
                            	<p class="nodato">NOME</p>
                                <p class="nodato">COGNOME</p>
                                <p class="nodato">LUOGO DI NASCITA</p>
                                <p class="nodato">DATA DI NASCITA</p>
                                <p class="nodato">CODICE FISCALE</p>
                                            
                                <br />
                                            
                                <p class="nodato">Username</p>
                                <p class="nodato">Password</p>
                                <p class="nodato">Ripeti</p>
                                <p class="nodato">Email</p>
                                        
                              </div>
                                        
                              <div id="arrowwrap">
                              	<img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" /><br />
                                
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                                <img src="http://cchosting.altervista.org/_altervista_ht/did/stiker_arrow.png" style="display:block; padding-top:3px;" />
                              </div>
                                        
                              <div id="form_datiright">
                              	<form id="modprofile">
                                	<input class="inputmod_disable" disabled="disabled" type="text" value="Inscerisci il tuo nome reale" /><br />
                                    <input class="inputmod_disable" disabled="disabled" type="text" value="Inscerisci il tuo cognome reale" /><br />
                                    <input class="inputmod1" type="text" value="Inscerisci dove sei nato" />&nbsp;
                                                
                            <br />
                                                
                                    <input class="inputmod1" type="text" value="data" /><br />
                                    <input class="inputmod1" type="text" value="Inscerisci il codice fiscale" /><br />
                                                
                                    <br />
                                                
                                    <input class="inputmod2" type="text" value="Nome utente" /><br />
                                    <input class="inputmod2" type="password" value="Password" /><br />
                                    <input class="inputmod2" type="password" value="Password" /><br />
                                    <input class="inputmod2" type="text" value="es. miaMail@server.it" /><br />
                                                
                                    <br />
                                    
                                    <input class="submit" type="submit" />
                                    </form>
                              </div>
                         </div>
                    </div>
                    
                </div>
                
                <br />
                
                <div id="select_box">
                
                	<p><img src="../image/select_box/Sticker_hrimage.png" style="margin-left:30px;" /></p>
                <form id="form1" method="post" action="login_adm.php">
                  <p>
                    Password
                    <input type="password" name="password" id="password" />
                  </p>
                  <p>
                    <input type="submit" name="login" id="login" value="LogIn" />
                  </p>
                </form>
                	<p><br />

                	  <img src="../image/select_box/Sticker_hrimage.png" style="margin-left:30px;" /></p>
                </div>
            
            <br /><br /><br /><br />
            
            </div>
            
            
            
           	
    
			<!--footer-->    
             <div id="footer">
             	
                <div id="foot">
					<p class="foot">
                    P.IVA : 04929920652 - property of Dritta in diritto - CSB <br />
					:::Designed by Alberto Marà // Developed by Amedeo Ferro:::
                    </p>
                </div>
             
             </div>


        </body>
    </html>