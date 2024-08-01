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
                </div>
                
            </div>
            
            <div id="header">
            </div>
            
            <div id="content">
            	
                <div id="admin_box">

                	<img src="../image/admin_box/Sticker_aministrazione.png" style="margin-left:50px; margin-top:30px;" />
                    
                    
                    
                    <div id="uploadnow_box">
                        <div id="wrap_pops">	 
                
                            <!--rendi invisibile-->
                            <img src="../image/uploadnow_box/sticker_close.png" style="cursor:pointer; position:absolute; margin-left:420px;" onclick="showHide_UploadnowBox()" />
                            
                            
                            
                                <br />
                            
                                <hr />
                                <div id="user_datileft">
                                
                                    <p class="nodato">CERCA IL FILE SUL PC</p>
                                
                                </div>
                                
                                <div id="arrowwrap">
                                    
                                    <img src="../image/user_box/sticker_arrow.png" style="display:block; padding-top:3px;" />
                                        
                                </div>
                                
                                <div id="form_datiright">
                                    
                                    <form id="modprofile" action="carica_file.php" method="post" enctype="multipart/form-data" >
                                        <input class="inputmod1" type="file" name="nuovo_file" /><br />
                                        <input class="submit" type="submit" value="Prosegui - Carica il file" />
                                    </form>
                                
                                </div>
                                <hr />
                		</div>

                </div>
            
            <img src="../image/admin_box/Sticker_hrimage.png" style="margin-left:30px;" />
            <div id="downlist_box">
                <p><span class="action" onclick="showHide_UploadnowBox()">Carica ora un nuovo file</span></p>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                    <!--reply
                    <tr>
                        <td class="td_list"><span class="noaction">NOMEFILE</span></td>
                        <td><span class="action">ELIMINA</span></td>
                 	</tr>
                    stopreply-->
                        
                <?php

                    $path = '../download/';
                    if ($dh = opendir($path)) {
                        while ((( $file = readdir($dh)) !== false)  ) {
                            if ( !is_dir($path.$file) ){
                                $name_array = explode('.', $file);
                                $estensione = $name_array[count($name_array)-1];
                                $url_encode_filename = urlencode($file);
                                echo "<tr>
                                        <td class=\"td_list, noaction\">$estensione</td>
                                        <td class=\"td_list, noaction\">$file</td>
                                        <td class=\"td_list, action\"><a href=\"elimina_download.php?nome=$url_encode_filename\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
                                     </tr>";
                            }
                        }
                        closedir($dh);
                    }
                ?>
                        
                 </table>
             </div>
            
            
            </div>
            
            <img src="../image/admin_box/Sticker_hrimage.png" style="margin-left:30px;" />
            <br /><br /><br />
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