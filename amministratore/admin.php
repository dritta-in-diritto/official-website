<?php
include '../common/verifica_adm_mode.php';
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
            
            <!--show/hide-->
			<script language="javascript" type="text/javascript">
			
				function showHide_UsermodBox()
				{
					var divstyle = new String();
					divstyle = document.getElementById("usermod_box").style.visibility;
					if(divstyle.toLowerCase()=="visible" || divstyle == "")
					{
						document.getElementById("usermod_box").style.visibility = "hidden";
					}
					else
					{
						document.getElementById("usermod_box").style.visibility = "visible";
					}
				}
				
				function showHide_UploadnowBox()
				{
					var divstyle = new String();
					divstyle = document.getElementById("uploadnow_box").style.visibility;
					if(divstyle.toLowerCase()=="visible" || divstyle == "")
					{
						document.getElementById("uploadnow_box").style.visibility = "hidden";
					}
					else
					{
						document.getElementById("uploadnow_box").style.visibility = "visible";
					}
				}
				
			</script> 
         
		</head>

        <body>
        
               
        	<div id="navigation">
            
                <div id="nav_box">
					<!--BOX DI NAVIGAZIONE-->
                    <a class="nav_voice" href="admin.php">ADMIN PAGE</a>&nbsp;/
                    <a class="nav_voice" href="logout_adm.php">LOG OUT</a>&nbsp;
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
                                                
                                    				<select class="inputmod_provincia" name="provincia" >
                                                
                                                    <option value="Agrigento (Sicilia)">				AG</option>
                                                    <option value="Alessandria (Piemonte)">				AL</option>
                                                    <option value="Ancona (Marche)">					AN</option>
                                                    <option value="Aosta (Valle d'Aosta)">				AO</option>
                                                    <option value="Arezzo (Toscana)">					AR</option>
                                                    <option value="Ascoli Piceno (Marche)">				AP</option>
                                                    <option value="Asti (Piemonte)">					AT</option>
                                                    <option value="Avellino (Campania)">				AV</option>
                                                    <option value="Bari (Puglia)">						BA</option>
                                                    <option value="Barletta-Andria-Trani (Puglia)">		BT</option>
                                                    <option value="Belluno (Veneto)">					BL</option>
                                                    <option value="Benevento (Campania)">				BN</option>
                                                    <option value="Bergamo (Lombardia)">				BG</option>
                                                    <option value="Biella (Piemonte)">					BI</option>
                                                    <option value="Bologna (Emilia-Romagna)">			BO</option>
                                                    <option value="Bolzano (Trentino-Alto Adige)">		BZ</option>
                                                    <option value="Brescia (Lombardia)">				BS</option>
                                                    <option value="Brindisi (Puglia)">					BR</option>
                                                    <option value="Cagliari (Sardegna)">				CA</option>
                                                    <option value="Caltanissetta (Sicilia)">			CL</option>
                                                    <option value="Campobasso (Molise)">				CB</option>
                                                    <option value="Carbonia-Iglesias (Sardegna)">		CI</option>
                                                    <option value="Caserta (Campania)">					CE</option>
                                                    <option value="Catania (Sicilia)">					CT</option>
                                                    <option value="Catanzaro (Calabria)">				CZ</option>
                                                    <option value="Chieti (Abruzzo)">					CH</option>
                                                    <option value="Como (Lombardia)">					CO</option>
                                                    <option value="Cosenza (Calabria)">					CS</option>
                                                    <option value="Cremona (Lombardia)">				CR</option>
                                                    <option value="Crotone (Calabria)">					KR</option>
                                                    <option value="Cuneo (Piemonte)">					CN</option>
                                                    <option value="Enna (Sicilia)">						EN</option>
                                                    <option value="Fermo (Marche)">						FM</option>
                                                    <option value="Ferrara (Emilia-Romagna)">			FE</option>
                                                    <option value="Firenze (Toscana)">					FI</option>
                                                    <option value="Foggia (Puglia)">					FG</option>
                                                    <option value="Forlì-Cesena (Emilia-Romagna)">		FC</option>
                                                    <option value="Frosinone (Lazio)">					FR</option>
                                                    <option value="Genova (Liguria)">					GE</option>
                                                    <option value="Gorizia (Friuli-Venezia Giulia)">	GO</option>
                                                    <option value="Grosseto (Toscana)">					GR</option>
                                                    <option value="Imperia (Liguria)">					IM</option>
                                                    <option value="Isernia (Molise)">					IS</option>
                                                    <option value="La Spezia (Liguria)">				SP</option>
                                                    <option value="L'Aquila (Abruzzo)">					AQ</option>
                                                    <option value="Latina (Lazio)">						LT</option>
                                                    <option value="Lecce (Puglia)">						LE</option>
                                                    <option value="Lecco (Lombardia)">					LC</option>
                                                    <option value="Livorno (Toscana)">					LI</option>
                                                    <option value="Lodi (Lombardia)">					LO</option>
                                                    <option value="Lucca (Toscana)">					LU</option>
                                                    <option value="Macerata (Marche)">					MC</option>
                                                    <option value="Mantova (Lombardia)">				MN</option>
                                                    <option value="Massa-Carrara (Toscana)">			MS</option>
                                                    <option value="Matera (Basilicata)">				MT</option>
                                                    <option value="Messina (Sicilia)">					ME</option>
                                                    <option value="Milano (Lombardia)">					MI</option>
                                                    <option value="Modena (Emilia-Romagna)">			MO</option>
                                                    <option value="Monza e della Brianza (Lombardia)">	MB</option>
                                                    <option value="Napoli (Campania)">					NA</option>
                                                    <option value="Novara (Piemonte)">					NO</option>
                                                    <option value="Nuoro (Sardegna)">					NU</option>
                                                    <option value="Olbia-Tempio (Sardegna)">			OT</option>
                                                    <option value="Oristano (Sardegna)">				OR</option>
                                                    <option value="Padova (Veneto)">					PD</option>
                                                    <option value="Palermo (Sicilia)">					PA</option>
                                                    <option value="Parma (Emilia-Romagna)">				PR</option>
                                                    <option value="Pavia (Lombardia)">					PV</option>
                                                    <option value="Perugia (Umbria)">					PG</option>
                                                    <option value="Pesaro e Urbino (Marche)">			PU</option>
                                                    <option value="Pescara (Abruzzo)">					PE</option>
                                                    <option value="Piacenza (Emilia-Romagna)">			PC</option>
                                                    <option value="Pisa (Toscana)">						PI</option>
                                                    <option value="Pistoia (Toscana)">					PT</option>
                                                    <option value="Pordenone (Friuli-Venezia Giulia)">	PN</option>
                                                    <option value="Potenza (Basilicata)">				PZ</option>
                                                    <option value="Prato (Toscana)">					PO</option>
                                                    <option value="Ragusa (Sicilia)">					RG</option>
                                                    <option value="Ravenna (Emilia-Romagna)">			RA</option>
                                                    <option value="Reggio Calabria (Calabria)">			RC</option>
                                                    <option value="Reggio Emilia (Emilia-Romagna)">		RE</option>
                                                    <option value="Rieti (Lazio)">						RI</option>
                                                    <option value="Rimini (Emilia-Romagna)">			RN</option>
                                                    <option value="Roma (Lazio)">						RM</option>
                                                    <option value="Rovigo (Veneto)">					RO</option>
                                                    <option value="Salerno (Campania)">					SA</option>
                                                    <option value="Medio Campidano (Sardegna)">			VS</option>
                                                    <option value="Sassari (Sardegna)">					SS</option>
                                                    <option value="Savona (Liguria)">					SV</option>
                                                    <option value="Siena (Toscana)">					SI</option>
                                                    <option value="Siracusa (Sicilia)">					SR</option>
                                                    <option value="Sondrio (Lombardia)">				SO</option>
                                                    <option value="Taranto (Puglia)">					TA</option>
                                                    <option value="Teramo (Abruzzo)">					TE</option>
                                                    <option value="Terni (Umbria)">						TR</option>
                                                    <option value="Torino (Piemonte)">					TO</option>
                                                    <option value="Ogliastra (Sardegna)">				OG</option>
                                                    <option value="Trapani (Sicilia)">					TP</option>
                                                    <option value="Trento (Trentino-Alto Adige)">		TN</option>
                                                    <option value="Treviso (Veneto)">					TV</option>
                                                    <option value="Trieste (Friuli-Venezia Giulia)">	TS</option>
                                                    <option value="Udine (Friuli-Venezia Giulia)">		UD</option>
                                                    <option value="Varese (Lombardia)">					VA</option>
                                                    <option value="Venezia (Veneto)">					VE</option>
                                                    <option value="Verbano-Cusio-Ossola (Piemonte)">	VB</option>
                                                    <option value="Vercelli (Piemonte)">				VC</option>
                                                    <option value="Verona (Veneto)">					VR</option>
                                                    <option value="Vibo Valentia (Calabria)">			VV</option>
                                                    <option value="Vicenza (Veneto)">					VI</option>
                                                    <option value="Viterbo (Lazio)">					VT</option>
                                                
                                                	</select><br />
                                                
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
                
                	<img src="../image/select_box/Sticker_hrimage.png" style="margin-left:30px;" />
                	
                    <!--	user		-->	<a href="userlist.php">
                    							<img class="selected" src="../image/select_box/sticker_userselect.png" style="margin-left:30px;" />
                                            </a>
                    <!--	file		-->	<a href="filelist.php">
                    							<img class="selected" src="../image/select_box/sticker_fileselect.png" />
                                            </a>
                    
                    <br />
                    
                    <!--	news		-->	<a href="newslist.php">
                    							<img class="selected" src="../image/select_box/sticker_newsselect.png" style="margin-left:30px;" />
                                            </a>
                    <!--	download	-->	<a href="downloadlist.php">
                    							<img class="selected" src="../image/select_box/sticker_downloadselect.png" style="margin-left:40px;" />
                                            </a>
                    
                    <img src="../image/select_box/Sticker_hrimage.png" style="margin-left:30px;" />
                
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