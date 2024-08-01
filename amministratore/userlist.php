<?php

include '../common/verifica_adm_mode.php';

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
          
          	<link href="../css/style_beckend.css" rel="stylesheet" type="text/css" media="screen" />
           	<link href="../css/style_form.css" rel="stylesheet" type="text/css" media="screen" />
         
		</head>

        <body>
        
               
        	<div id="navigation">
            
                <div id="nav_box">
					<!--BOX DI NAVIGAZIONE-->
                    <a class="nav_voice" href="admin.php">ADMIN PAGE</a>&nbsp;/
                </div>
                
            </div>
            
            <div id="header">
            </div>
            
            <div id="content">
            
            	<div id="admin_box">
                	<img src="../image/admin_box/Sticker_aministrazione.png" style="margin-left:50px; margin-top:30px;" />
                    
                </div>
                <img src="../image/admin_box/Sticker_hrimage.png" style="margin-left:30px;" />
                <div id="userlist_box">
                
                	<table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <!--
                          <tr>
                            <td class="td_user"><span class="noaction">provaALBERTO MARA'</span></td>
                            <td><span class="action">MODIFICA</span></td>
                            <td><span class="action">ELIMINA</span></td>
                          </tr>
                            -->
                 <?php

                  include_once '../common/dbmanager.php';
                  $managerSql = new dbManager();

                  $utenti = $managerSql->lista_utenti();
                  $num_utenti = count($utenti);
                  for($i=0; $i<$num_utenti; $i++){
                      $utente = $utenti[$i];
                      echo "  <tr>
                                <td class=\"td_user, noaction\">{$utente['id_utente']}</td>
                                <td class=\"td_user, noaction\">{$utente['nome']}</td>
                                <td class=\"td_user, noaction\">{$utente['cognome']}</td>
                                <td class=\"td_user, noaction\">{$utente['email']}</td>
                                <td class=\"td_user, noaction\">{$utente['username']}</td>
                                <td class=\"td_user, action\"><a href=\"profilo_modifica.php?id={$utente['id_utente']}\">Modifica</a></td>
                                <td class=\"td_user, action\"><a href=\"elimina_utente.php?id={$utente['id_utente']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare l\'utente?');\">Elimina</a></td>
                                <td class=\"td_user, action\">Invia Mail</td>
                              </tr>";
                  }

                  ?>
                    </table>
                    
                </div>
            
            
            <img src="../image/admin_box/Sticker_hrimage.png" style="margin-left:30px;" />
            </div>
            
            
           
           <br /><br /><br />  
           	
    
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