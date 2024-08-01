<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica login
include '../common/verifica_adm_mode.php';
//fine verifica login

include '../common/dbmanager.php';
$managerSql = new dbManager();

$notizia = $managerSql->get_news($_GET['id']);
if( ! $notizia ){
    header('Location: error.php?code=11');
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
                    
                    	
             			<a href="newslist.php" class="action">Torna alla lista</a><br />
						<p class="noaction">ATTENZIONE :: Tornando alla lista senza inviare la news equivale a perderla!</p>
                        <br />
                        
                        <hr />

                        <form id="form1" method="post" action="modifica_news.php">

                        <p>Id notizia <input name="id_news" type="text" id="id_news" value="<?php echo $notizia['id_news']; ?>" readonly /><br/>
                          Titolo
                          <input name="titolo" type="text" id="titolo" size="50" maxlength="200" value="<?php echo htmlentities($notizia['titolo']); ?>" />
                      </p>
                      <p>
                        <textarea name="testo" id="testo" cols="50" rows="10"><?php echo $notizia['testo']; ?></textarea>
                        <br />
                        <input type="submit" name="salva" id="salva" value="Salva" />
                        <br />
                      </p>
                    </form>
                        
                        <hr />
                 	    <br />
             
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