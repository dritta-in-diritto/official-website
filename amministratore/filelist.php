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
                                    
                                    <form id="modprofile">
                                        <input class="inputmod1" type="file" /><br />
                                        <input class="submit" type="submit" value="Prosegui - Carica il file" />
                                    </form>
                                
                                </div>
                                <hr />
                		</div>

                </div>
            
            
            
				<img src="../image/admin_box/Sticker_hrimage.png" style="margin-left:30px;" />
            
            
            

             <div id="upload_box">
                 <p><span class="action"><a href="filelist_only.php">Visualizza solo da certificare</a></span></p>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">

                <tr>
                    <th  class="td_list, noaction">ID</th>
                    <th class="td_list, noaction">Username</th>
                    <th class="td_list, noaction">Nome File</th>
                    <th class="td_list, noaction">Pagamento</th>
                    <th class="td_list, noaction">Ore Consulenza Restanti</th>
                </tr>

                <?php

                  include_once '../common/dbmanager.php';
                  $managerSql = new dbManager();

                  $lista_file = $managerSql->lista_file();
                  $num_file = count($lista_file);
                  for($i=0; $i<$num_file; $i++){
                      $file = $lista_file[$i];
                      $utente = $managerSql->get_utente($file['id_utente']);
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
                      echo "  <tr>
                                <td class=\"td_list, noaction\">{$file['id_file_caricato']}</td>
                                <td class=\"td_list, noaction\">{$utente['username']}</td>
                                <td class=\"td_list, noaction\"><a href=\"../utenti/{$utente['username']}/{$file['id_file_caricato']}/{$file['nome_file']}\">{$file['nome_file']}</a></td>
                                <td class=\"td_list, noaction\">{$file['pagamento']}</td>
                                <td class=\"td_list, noaction\">$ore_restanti</td>
                                <td class=\"td_list, action\"><a href=\"elimina_file.php?id={$file['id_file_caricato']}\" onclick=\"javascript: return confirm('Sei sicuro di voler eliminare il file?');\" >Elimina</a></td>
                              </tr>";
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