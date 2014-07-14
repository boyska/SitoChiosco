<!DOCTYPE html>
<?php 
include "config/menu.php";
?>
<html lang="it">
<head>
<meta charset="utf-8">
<title>InsomniaLab | Hacklab universitario - Chi Siamo</title>
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
			<h3>/Chi Siamo</h3>
			</hgroup>
		</header>

		<article>
			<p>
			<h2>HackLab</h2>
			Una (breve) storia di alcuni insonni.<br />
			Una sera alcune individualità della Sapienza, affetti da una grave forma
			di inquietudine e inadeguatezza nei confronti dei mezzi digitali e
			inclini all'alcolismo, si ritrovarono, quasi per caso, in un postaccio
			da poco occupato dentro le mura della città universitaria.
			Il nome non li ispirava affatto, "Lucernario Occupato" recitavano
			scritte sui muri vicini. Loro avevano sempre disprezzato la luce, non si
			trovavano a loro agio in quel bagno di colori. Li attraeva invece la
			penombra, le luci al neon che delimitano una stanza, con la presenza
			esterna di una rassicurante notte. Un antro vasto quanto il mondo in cui
			nascondersi, in cui il loro desiderio di anonimato potesse essere
			sperabilmente garantito.
			Erano nati così, come una scalcinata banda di bonaventura, e cercavano
			di orientarsi in quelle mura che, piano piano, stavano diventando familiari.
			I primi passi del lato oscuro di quello scalcinato ma vitale postaccio
			in cui si erano ritrovati erano stati fatti. Ora non c'era che da
			aspettare che da quella brodaglia notturna spuntassero fuori altri
			compagni di viaggio, attratti da quella luce al neon e dal costante
			rumore di ventole che li avrebbe cullati nelle loro notti insonni.

			InsomniaLab era nato.</p>
			
			<iframe src="https://mapsengine.google.com/map/embed?mid=zrpVBw_EGjxI.k91w1-mdFic4" width="480" height="320"></iframe>
		</article>
	</section>

	<footer>
	<p>Insomnia Lab - cogitoergohack@autistici.org</p>
	</footer>
</div>
</body>
</html>
