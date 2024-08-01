<?php
/*
if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}
*/

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
                  
                
                
                
                
        	<!--NAVIGAZIONE-->
	<div id="navigation">
		<div id="nav_box">
		
		
			
			<div style="margin-top:10px;">
			<a class="nav_voice" href="index.php">
				<img src="common/menu/home_off.png" onmouseover='this.src = "common/menu/home_on.png";' onmouseout='this.src="common/menu/home_off.png";'/>
			</a>
			
			<a class="nav_voice" href="areadownload.php">
				<img src="common/menu/download_off.png" onmouseover='this.src = "common/menu/download_on.png";' onmouseout='this.src="common/menu/download_off.png";'/>
			</a>
			
			<a class="nav_voice" href="download/Contratto.pdf">
				<img src="common/menu/note_off.png" onmouseover='this.src = "common/menu/note_on.png";' onmouseout='this.src="common/menu/note_off.png";'/>
			</a>
			
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
                  
                
                
                
                
            <!--BOX DATI UTENTE-->
			<div id="content">
            	
                <div id="user_box">
                	
                        <img src="image/user_box/sticker_userbox.png" style="margin-left:-30px;" /><br />
                        
                        <!--rendi invisibile-->
                        <img src="image/user_box/sticker_modprofile.png" style="cursor:pointer; position:absolute; margin-top:-30px; margin-left:240px;" onclick="showHide_UsermodBox()"  />
                        
                        <br />
                        
                        <div id="user_datileft">
                        
                            <p class="nodato">NOME</p>
                            <p class="nodato">COGNOME</p>
                            <p class="nodato">CODICE FISCALE / PIVA</p>
                            <p class="nodato">CAP</p>
                            <p class="nodato">CITTA'</p>
                            <p class="nodato">INDIRIZZO</p>
                            <p class="nodato">EMAIL</p>
                            <p class="nodato">USERNAME</p>
                        
                        </div>
                        
                        <div id="arrowwrap">
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                            <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                        </div>
                        
                        <div id="user_datiright">
                        
                            <p id="_name"><?php echo $utente['nome']; ?></p>
                            <p id="_surname"><?php echo $utente['cognome']; ?></p>
                            <p id="_fiscode"><?php echo $utente['codice_fiscale']; ?></p>
                            <p id="_address"><?php echo $utente['cap']; ?></p>
                            <p id="_address"><?php echo $utente['citta']; ?></p>
                            <p id="_address"><?php echo $utente['indirizzo']; ?></p>
                            <p id="_mail"><?php echo $utente['email']; ?></p>
                            <p id="_user"><?php echo $utente['username']; ?></p>
                            <br />
                        
                        </div>
                        
                </div>
                  
                
                
                
                
                <!--BOX NEWS (PROFILO)-->
                <div id="news_box">
                	
                    <img src="image/news_box/sticker_newsbox.png" style=" margin-left:-10px;" /><br />
                    <!--vai a lista news completa-->
                    <a href="areanews.php">
                    <img src="image/news_box/sticker_ultimenews.png" style=" position:absolute; margin-top:-35px; margin-left:230px; z-index:10" />
                    </a>
                    <br />
                    
                        <div id="news_slide">
                            <?php
                            $news = $managerSql->get_ultime_news(3);
                            for($i=0; $i<count($news); $i++){
                                $notizia = $news[$i];
                                $notizia['testo'] = substr($notizia['testo'], 0, 200);

                                echo "<div class=\"news\">
                                     <p class=\"newstitle\">{$notizia['titolo']}</p>
									 <br />
                                     <p class=\"newscontent\">{$notizia['testo']}</p>
                                    </div>";
                            }
                            ?>
                        </div>
                    
                </div>
                  
                
                
                
                
                <br /><br /><br />
                  
                
                
                
                
                <!--BOX LISTA FILE-->
                <div id="uploadfile_box">
                	
                    <img src="image/uploadlist_box/sticker_uploadfile.png" style="margin-left:-33px; margin-top:0px;" /><br />
                    
                    <!--rendi invisibile-->
                    <img src="image/uploadlist_box/sticker_inviacifile.png" style="cursor:pointer; position:absolute; margin-top:-235px; margin-left:613px; z-index:12" onclick="showHide_UploadnowBox()"/>
                    <br />
            
                    
                    <table id="tablelist" cellspacing="0" cellpadding="0" >
                      
                      <!--titoli tabella-->
                      <tr class="trlist">
                        <th scope="col">&nbsp;</th>
                        <th scope="col">ID</th>
                        <th scope="col"><p class="tabletitle">NOME FILE</p></th>
                        <th scope="col"><p class="tabletitle">STATO</p></th>
                        <th scope="col"><p class="tabletitle">ORE CONSULENZA</p></th>
                        <th scope="col">&nbsp;</th>
                      </tr>
            
                      <!--Riga file no file
                      <tr class="trlist">
                        <td class="tdlist">&nbsp;</td>
                        <td class="tdnomefile"><p class="tablenormal">Al momento non hai inviato nessun file</p></td>
                        <td class="tdlist"><p class="tablenormal">&nbsp;</p></td>
                        <td class="tdlist"><p class="tablenormal">FERMO</p></td>
                        <td class="tdlist"><p class="tablenormal">&nbsp;</p></td>
                        <td class="tdlist"><p class="tablenormal">--------</p></td>
                      </tr>-->
                      
                      <!--Riga file da pagare
                      <tr class="trlist">
                        <td class="tdlist"><img src="image/uploadlist_box/sticker_uploaded.png" /></td>
                        <td class="tdnomefile"><p class="tablenormal">NOMEFILE.ZIP</p></td>
                        <td class="tdlist"><p class="tablenormal"><a href="#" id="_paynow">$$&nbsp;PAGA ORA</a></p></td>
                        <td class="tdlist"><p class="tablenormal">FERMO</p></td>
                        <td class="tdlist"><p class="tablenormal"><a href="QUI IL FILE DA SCARICARE">SCARICA</a></p></td>
                        <td class="tdlist"><p class="tablenormal"><a href="#" id="_efile">ELIMINA</a></p></td>
                      </tr>-->
            
                      <!--Riga file pagati e in attesa
                      <tr class="trlist">
                        <td class="tdlist"><img src="image/uploadlist_box/sticker_uploaded.png" /></td>
                        <td class="tdnomefile"><p class="tablenormal">NOMEFILE-pagato.ZIP</p></td>
                        <td class="tdlist"><p class="tablenormal"><b>&nbsp;PAGATO&nbsp;&nbsp;OK</b></p></td>
                        <td class="tdlist"><p class="tablenormal"><b>IN ATTESA</b></p></td>
                        <td class="tdlist"><p class="tablenormal">SCARICA</p></td>
                        <td class="tdlist"><p class="tablenormal">ELIMINA</p></td>
                      </tr>-->
            
                      <!--Riga file pagati e da scaricare
                      <tr class="trlist">
                        <td class="tdlist"><img src="image/uploadlist_box/sticker_uploaded.png" /></td>
                        <td class="tdnomefile"><p class="tablenormal">NOMEFILE-pagato.ZIP</p></td>
                        <td class="tdlist"><p class="tablenormal"><b>&nbsp;PAGATO&nbsp;&nbsp;OK</b></p></td>
                        <td class="tdlist"><p class="tablenormal"><b>REGISTRATO</b></p></td>
                        <td class="tdlist"><p class="tablenormal"><a href="QUI IL FILE DA SCARICARE REGISTRATO"><b>SCARICA</b></a></p></td>
                        <td class="tdlist"><p class="tablenormal"><a href="#" id="_efile"><b>ELIMINA</b></a></p></td>
                      </tr>-->

  <?php

    $lista_file = $managerSql->lista_file_by_utente($utente);
    $num_file = count($lista_file);

    for($i=0; $i<$num_file; $i++){
        $file=$lista_file[$i];
        $ore_restanti=0; //qualsiasi numero maggiore di 2 ossia dei giorni di consulenza
        if($file['data_certificazione']){

            //$differenza=(strtotime(date('Y-m-d')) - strtotime($file['data_certificazione']))/(86400);
            $arr_data_time = explode(" ", $file['data_certificazione']);
            $data = $arr_data_time[0];
            $ora = $arr_data_time[1];
            $arr_data = explode("-",$data);
            $arr_ora = explode(':', $ora);
            $differenza =floor((mktime(date('H')+2, date('i'), date('s'), date('m'), date('d'), date('Y'))-
                         mktime($arr_ora[0], $arr_ora[1], $arr_ora[2], $arr_data[1], $arr_data[2], $arr_data[0]))/(60*60));

            if( $differenza>48 ){
                $ore_restanti = 0;
            }else{
                $ore_restanti=48-$differenza;
            }
        }

        $pagamento = "In Attesa...";

        if( strcmp($file['pagamento'],"non pagato")==0 ){
            $pagamento = "<a href=\"paga_ora.php?obj={$file['id_file_caricato']}\">Paga ORA</a>";
        }

        if( strcmp($file['pagamento'],"certificato")==0 ){
            $pagamento = "Certificato";
        }
        echo "<tr class=\"trlist\">
                        <td class=\"tdlist\"><img src=\"image/uploadlist_box/sticker_uploaded.png\" /></td>
                        <td class=\"tdlist\">{$file['id_file_caricato']}</td>
                        <td class=\"tdnomefile\"><p class=\"tablenormal\"><a href=\"utenti/{$utente['username']}/{$file['id_file_caricato']}/{$file['nome_file']}\">{$file['nome_file']}</a></p></td>
                        <td class=\"tdlist\"><p class=\"tablenormal\">$pagamento</p></td>
                        <td class=\"tdlist\"><p class=\"tablenormal\">$ore_restanti</p></td>
                        <td class=\"tdlist\"><p class=\"tablenormal\"><a href=\"elimina_file.php?id={$file['id_file_caricato']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></p></td>
                      </tr>";
    }
    
  ?>

                    </table>
                </div>                   
            
				
             </div>
                  
                
                
                
                
                    <!--BOX MODIFICA I DATI UTENTE-->
                    <div id="usermod_box">
						
						<div id="wrap_pops">	 
                                    
							<!--rendi invisibile-->
							<img src="image/usermod_box/sticker_close.png" style="cursor:pointer; position:absolute; z-index:81694287491; margin-top:0px; margin-left:420px;" onclick="showHide_UsermodBox()" />

							<br />
                        	<form id="form1" method="post" action="salva_modifiche.php">
                            <table style="margin-top:-10px;">
                                <tr>
                                    <td class="nodato">NOME</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="nome" type="text" id="nome" maxlength="100" class="inputmod1" value="<?php echo htmlentities($utente['nome']); ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="nodato">COGNOME</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="cognome" type="text" id="cognome" maxlength="100" class="inputmod1" value="<?php echo htmlentities($utente['cognome']); ?>" /></td>
                                </tr>
                                <tr>
                                    <td class="nodato">CODICE FISCALE / PIVA</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="codice_fiscale" type="text" id="codice_fiscale" maxlength="16" class="inputmod1" value="<?php echo $utente['codice_fiscale']; ?>" /></td>
                                </tr>


                                <tr>
                                    <td class="nodato">CAP</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="cap" type="text" id="cap" maxlength="5" class="inputmod1" value="<?php echo htmlentities($utente['cap']); ?>" /></td>
                                </tr>
                                <tr>
                                    <td class="nodato">CITTA'</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="citta" type="text" id="citta" maxlength="100" class="inputmod1" value="<?php echo htmlentities($utente['citta']); ?>" /></td>
                                </tr>


                                <tr>
                                    <td class="nodato">INDIRIZZO</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="indirizzo" type="text" id="indirizzo" maxlength="150" class="inputmod1" value="<?php echo htmlentities($utente['indirizzo']); ?>" /></td>
                                </tr>
                                <tr>
                                    <td class="nodato">EMAIL</td>
                                    <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" /></td>
                                    <td><input name="email" type="text" id="email" maxlength="200" class="inputmod1" value="<?php echo htmlentities($utente['email']); ?>" /></td>
                                </tr>
                            </table>
                            <input type="hidden" name="modifica" value="fatturazione" />
                            <input class="submit" type="reset" name="ripristina" id="ripristina" value="Ripristina" style="margin-right:18px;" /><input class="submit" type="submit" name="salva" id="salva" value="Salva Modifiche" />
                        </form>

                    <form id="form1" method="post" action="salva_modifiche.php">

                        <table>
                            <tr>
                                <td class="nodato">Username</td>
                                <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px; margin-left:40px; margin-right:2px;" /></td>
                                <td><input name="username" type="text" id="username" maxlength="30" class="inputmod2" value="<?php echo $utente['username']; ?>" readonly /></td>
                            </tr>
                            <tr>
                                <td class="nodato">Vecchia Password</td>
                                <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px; margin-left:40px; margin-right:2px;" /></td>
                                <td><input name="password" type="password" id="password" maxlength="20" class="inputmod2"/></td>
                            </tr>
                            <tr>
                                <td class="nodato">Nuova Password</td>
                                <td><img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px; margin-left:40px; margin-right:2px;" /></td>
                                <td><input name="nuova_password" type="password" id="nuova_password" maxlength="20" class="inputmod2" /></td>
                            </tr>

                        </table>
                        <input type="hidden" name="modifica" value="password" />
                        <input class="submit" type="reset" name="ripristina" id="ripristina" value="Ripristina"  style="margin-right:16px;"/>
                        <input class="submit" type="submit" name="salva" id="salva" value="Modifica Password" />
                    </form>
                                        
                         </div>
                    </div>
                  
                
                
                
                
                    <!--BOX PER L'UPLOAD DEI FILE-->
                    <div id="uploadnow_box">
                        <div id="wrap_pops">	 
                
                            <!--rendi invisibile-->
                            <img src="image/uploadnow_box/sticker_close.png" style="cursor:pointer; position:absolute; margin-left:420px;" onclick="showHide_UploadnowBox()" />
                            
                            
                            
                                <br />
                            
                                <hr />
                                <div id="user_datileft">
                                
                                    <p class="nodato">CERCA IL FILE SUL PC</p>
                                
                                </div>
                                
                                <div id="arrowwrap">
                                    
                                    <img src="image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                                        
                                </div>
                                
                                <div id="form_datiright">
                                    
                                    <form id="modprofile" action="file_upload.php" method="post" enctype="multipart/form-data">
                                        <input name="nuovo_file" id="nuovo_file" class="inputmod1" type="file" /><br />
                                        <input class="submit" type="submit" value="Prosegui - Carica il file" />
                                    </form>
                                
                                </div>
                                <hr />
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