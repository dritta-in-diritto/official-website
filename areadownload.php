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
			
			<a class="nav_voice" href="myprofile.php">
				<img src="common/menu/myprof_off.png" onmouseover='this.src = "common/menu/myprof_on.png";' onmouseout='this.src="common/menu/myprof_off.png";'/>
			</a><img src="common/menu/space.png" />
			
			<a class="nav_voice"  href="download/Contratto.pdf">
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
            	
                
                <!--BOX LISTA FILE-->
                <div id="uploadfile_box">
                	
                    <img src="image/download_box/sticker_download.png" style="margin-left:-33px; margin-top:45px;" /><br />
                    
                    <table id="tablelist" cellspacing="0" cellpadding="0" >
                      
                      <!--titoli tabella-->
                      <tr class="trlist">
                        <th scope="col"><p class="tabletitle">NOME FILE</p></th>
                        <th scope="col" style="text-align:center;"><p class="tabletitle">ESTENSIONE</p></th>
                        <th scope="col">&nbsp;</th>
                      </tr>

              <?php

                $path = 'download/';
                if ($dh = opendir($path)) {
                    while ((( $file = readdir($dh)) !== false)  ) {
                        if ( !is_dir($path.$file) ){
                            $name_array = explode('.', $file);
                            $estensione = $name_array[count($name_array)-1];
                            $url_encode_filename = urlencode($file);
                            $indirizzo = $path . $file;

                            switch ($estensione) {
                                case 'pdf':
                                    $image = " <img src=\"image/download_box/icopdf.png\" /> ";
                                    break;
                                case 'zip':
                                    $image = " <img src=\"image/download_box/icozip.png\" /> ";
                                    break;

                                default:
                                    $image = " <img src=\"image/download_box/icobo.png\" /> ";
                                    break;
                            }
                            
                            echo "<tr class=\"trlist\">
                <td class=\"tdnomefile\"><p class=\"tablenormal\"><b>$file</b></p></td>
                <td class=\"tdlist\" style=\"text-align:center;\">$image</td>
                <td class=\"tdlist\" style=\"text-align:right;\"><p class=\"tablenormal\"><a href=\"$indirizzo\"><b>SCARICA</b></a></p></td>
              </tr>";
                        }
                    }
                    closedir($dh);
                }
            ?>
            
                    </table>
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