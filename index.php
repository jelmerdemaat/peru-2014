<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Title</title>

	<link rel="stylesheet" href="css/peru.css?v=0.1">

	<script src="js/vendor/modernizr-2.6.3.min.js"></script>
	<script src="//use.typekit.net/pec8lcm.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<?php include_once 'functions.php'; ?>
</head>
<body>
	<header class="charlie">
		<div class="content">
			<h1>Peru 2014</h1>
			<p class="about-me">
				<a href="//twitter.com/jelmerdemaat">@jelmerdemaat</a>
			</p>
		</div>
	</header>

	<!-- <section class="intro alfa">
		<div class="content">
			<p>Dit is een tekst waarin ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. <strong>Heel veeel bedankt</strong> want het is nodig. Jelmer de Maat. Dit is een tekst waarin ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. Heel veeel bedankt want het is nodig. Jelmer de Maat. <em>Dit is een tekst waarin</em> ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. Heel veeel bedankt want het is nodig. <a href="#">Jelmer de</a> Maat.</p>
		</div>
	</section> -->

	<section class="charlie">
		<div class="content">
			<p>Dit is een tekst waarin ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. <strong>Heel veeel bedankt</strong> want het is nodig. Jelmer de Maat. Dit is een tekst waarin ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. Heel veeel bedankt want het is nodig. Jelmer de Maat. <em>Dit is een tekst waarin</em> ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. Heel veeel bedankt want het is nodig. <a href="#">Jelmer de</a> Maat.</p>
		</div>
	</section>

	<section class="bravo goals">
		<div class="content">
			<div class="columns">
				<div class="column three">
					<h2>Goal 1</h2>
					<p>English</p>
				</div>
				<div class="column three">
					<h2>Goal 2</h2>
					<p>Fun</p>
				</div>
				<div class="column three">
					<h2>Goal 3</h2>
					<p>Health</p>
				</div>
			</div>
		</div>
	</section>


	<section class="delta">
		<div class="content">
			<h2>H2 test</h2>
			<h3>H3 test</h3>
			<h4>H4 test</h4>
			<h5>H5 test</h5>
		</div>
	</section>



	<footer class="echo">
		<div class="content">
			<div class="columns">
				<div class="column two">
					<h4>Peru 2014</h4>
					<p>
						Door Jelmer de Maat <br>
						<?php
						$email = encode_email_address('post@jelmerdemaat.nl');
						?>
						Mail naar <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
					</p>
				</div>
				<div class="column two">
					<a target="_blank" href="http://www.freevectormaps.com/peru/PE-EPS-02-0001?ref=atr">Map of Peru</a>
					by
					<a target="_blank" href="http://www.freevectormaps.com/?ref=atr">FreeVectorMaps.com</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
</body>
</html>
