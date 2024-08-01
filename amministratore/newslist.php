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
                 <div id="newsmod_box">
                     <p> <span class="action"><a href="newswrite.php">Scrivi una nuova news</a></span> </p>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <!--reply
                    <tr>
                        <td class="td_list"><span class="noaction"><a href="newscomplete.php">TITOLO NEWS</a></span></td>
                    	<td><span class="action">MODIFICA</span></td>
                        <td><span class="action">ELIMINA</span></td>
                 	</tr>
                    -->
        <?php

        include_once '../common/dbmanager.php';
        $managerSql = new dbManager();

        $news = $managerSql->lista_news();
        $num_news = count($news);
        for($i=0; $i<$num_news; $i++){
            $notizia = $news[$i];
            echo "<tr>
                    <td class=\"td_list, noaction\">{$notizia['id_news']}</th>
                    <td class=\"td_list, noaction\">{$notizia['titolo']}</td>
                    <td class=\"td_list, action\"><a href=\"news_mod.php?id={$notizia['id_news']}\">Modifica</a></td>
                    <td class=\"td_list, action\"><a href=\"elimina_news.php?id={$notizia['id_news']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
                </tr>";

        }

        ?>
                 </table>
                 
             </div>
            
            </div>
            
            <img src="../image/admin_box/Sticker_hrimage.png" style="margin-left:30px;" />
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