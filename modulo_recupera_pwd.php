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

            
	<div id="header"><!--spazia tra navbox e content--></div>
            
	<!--content-->
	<div id="content">
            
		<!--registrazione-->
		<div id="rec_box">

			<br /><br /><br /><br />

			<p class="nodato" style="margin-left:50px;">
			Hai dimenticato la password?<br />
			Inserisci l'indirizzo email con cui sei registrato.
			</p>
			
			<div class="tablenormal">
				<form id="form1" method="post" action="recupera_pwd.php">
					<span class="nodato" style="margin-left:50px;">
						EMAIL
						<input name="email" type="text" class="inputmod1" id="email" />
						<input name="richiedi" type="submit" class="submit" id="richiedi" value="Invia" /> 					
					</span>
				</form>
			</div>

			<p>
			<img src="image/registration_box/Sticker_hrimage.png" style="margin-left: 20px;" />
			</p>

		</div>
		
		<br /><br /><br /><br />

	</div>
	<!--/content-->

	<!--footer-->
	<div id="footer">

		<div id="foot">
			<p class="foot">
				P.IVA : 04929920652 - property of Dritta in diritto - CSB <br />
				:::<a href="http://www.pixosystems.com/">Created by Pixo Systems - Anzio (RM)</a>:::
			</p>
		</div>
             
	</div>
	<!--/footer-->

	</body>
</html>