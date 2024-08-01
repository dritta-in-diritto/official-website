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
            	
                
                	<!--New_box-->
                      <div id="newslist_box">
                      	<img src="image/areanews_box/sticker_news.png" style="margin-left:-33px; margin-top:0px;"" />

                      	<div class="news_list">
                        
                            <!--
                            <p class="news_title">LOREM IMPSUM</p>
                            <p class="news_post">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                            <br /><br />                
                           -->
                                    
            <?php
            include 'common/dbmanager.php';
            $managerSql = new dbManager();

            $news = $managerSql->lista_news();
            $num_news = count($news);
            for($i=0; $i<$num_news; $i++){
                $notizia = $news[$i];
                echo "<p class=\"news_title\">{$notizia['titolo']}</p>
                <p class=\"news_post\">{$notizia['testo']}</p><p>&nbsp;</p>";
            }
            ?>
                        </div>
                        
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