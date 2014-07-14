<!DOCTYPE html>
<?php 
include "config/menu.php";
?>
<html lang="it">
<head>
<meta charset="utf-8">
<title>InsomniaLab | Hacklab universitario - Media</title>
<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="stylesheets/unsemantic-grid-responsive-rtl.css" />
</head>
<body>
<div id="canvas" class="grid-container">

	<header id="head">
		<a href="index.php" title="InsomniaLab | Hacklab universitario">
		<img width="50%" height="30%" src="images/trasparente-01.png" alt="InsomniaLab | Hacklab universitario" />
		</a>

		<nav>
			<div class="container">
	            <ul id="nav">
	                <?php
	                menu();
	                ?>
            	</ul>
        	</div>
		</nav>

	</header>
	<section id="content" class="grid-100 mobile-grid-100">

		<header>
			<hgroup>
			<h2>Content Box</h2>
			<h3>/Media</h3>
			</hgroup>
		</header>

		<article>
			<p>
				In questa pagina saranno raccolte le "produzioni artistiche" dell' InsomniaLab.

				<div style="text-align: center;">
				<h3>Spottino (In occasione della festa di presentazione di InsomniaLab)</h3>
				<audio controls>
				<source src="media/SpottinoMaster2.ogg" type="audio/ogg">
				</audio>

				<hr>

				<h3>Video InsomniaLab (In occasione della festa di presentazione di InsomniaLab)</h3>
				<video width="520" height="340" controls>
				<source src="media/videosapienza.mp4" type="video/mp4">
				<source src="media/videosapienza2.ogg" type="video/ogg">
				</video>

				<hr>

				<h3>Grafica della prima festa di InsomniaLab</h3>
				<div style="text-align: center;">
				<a href="media/festa143web-01.png"><img src="media/festa143web-01.png" width="20%" height="40%" alt="Festa di Presentazione di InsomniaLab" /></a>
				</div>
			</p>
		</article>
	</section>

	<footer>
	<p>Insomnia Lab - cogitoergohack@autistici.org</p>
	</footer>
</div>
</body>
</html>
