<?php

if( empty($_GET['id']) ){
    header('Location: error.php?code=1');
    exit();
}

//verifica Admin mode
include '../common/verifica_adm_mode.php';
//fine verifica login


include '../common/dbmanager.php';
$managerSql = new dbManager();
$utente = $managerSql->get_utente($_GET['id']);
if(empty($utente)){
    header('Location: error.php?code=4');
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
                <div id="userlist_box">
                
          <p>Profilo dell'utente <?php echo $utente['username'] ?></p>



        <form id="form1" method="post" action="salva_modifiche_profilo.php">
            <p>Codice identificativo:
                <input name="id_utente" type="text" id="id_utente" maxlength="20" value="<?php echo $utente['id_utente']; ?>" readonly /> </p>
      <p>--Dati Fatturazione--<br />
        Nome
        <input name="nome" type="text" id="nome" maxlength="100" value="<?php echo htmlentities($utente['nome']); ?>"/>
        <br />
        Cognome
        <input name="cognome" type="text" id="cognome" maxlength="100" value="<?php echo htmlentities($utente['cognome']); ?>" />
        <br />
        Codice Fiscale
        <input name="codice_fiscale" type="text" id="codice_fiscale" maxlength="16" value="<?php echo $utente['codice_fiscale']; ?>" />
        <br />

        CAP
      <input name="cap" type="text" id="cap" maxlength="5" value="<?php echo htmlentities($utente['cap']); ?>" />
      <br />
      Città
      <input name="citta" type="text" id="citta" maxlength="100" value="<?php echo htmlentities($utente['citta']); ?>" />
      <br />

      Indirizzo
      <input name="indirizzo" type="text" id="indirizzo" maxlength="150" value="<?php echo htmlentities($utente['indirizzo']); ?>" />
      <br />
      EMail
      <input name="email" type="text" id="email" maxlength="200" value="<?php echo htmlentities($utente['email']); ?>" />
      </p>
      <input type="hidden" name="modifica" value="fatturazione" />
      <input type="reset" name="ripristina" id="ripristina" value="Ripristina" />
      <input type="submit" name="salva" id="salva" value="Salva Modifiche" />
    </form>

        <form id="form1" method="post" action="salva_modifiche_profilo.php">
        <p>--Dati Accesso--<br />
      Username
      <input name="username" type="text" id="username" maxlength="30" value="<?php echo $utente['username']; ?>" readonly />
        <br />
      Nuova Password
      <input name="nuova_password" type="password" id="nuova_password" maxlength="20" />
    </p>
    <input type="hidden" name="id_utente" value="<?php echo $utente['id_utente']; ?>" />
    <input type="hidden" name="modifica" value="password" />
    <input type="reset" name="ripristina" id="ripristina" value="Ripristina" />
      <input type="submit" name="salva" id="salva" value="Modifica Password" />
    </form>
                    
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