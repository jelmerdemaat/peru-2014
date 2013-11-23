<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Title</title>

	<link rel="stylesheet" href="css/peru.css?v=0.1">

	<script src="js/vendor/modernizr-2.7.0.min.js"></script>
	<script src="//use.typekit.net/pec8lcm.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<?php include_once 'functions.php'; ?>
</head>
<body>
	<header id="home" class="delta">
		<div class="content">
			<div class="columns">
				<div class="column">
					<h1>Peru 2014</h1>
					<p>Dit is een tekst waarin ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. <strong>Heel veeel bedankt</strong> want het is nodig. Jelmer de Maat. Dit is een tekst waarin ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. Heel veeel bedankt want het is nodig. Jelmer de Maat. <em>Dit is een tekst waarin</em> ik praat over naar Peru gaan. Als je wilt helpen kan je mij steunen via dit en dit en dat. Heel veeel bedankt want het is nodig. <a href="#">Jelmer de</a> Maat.</p>
					<p class="about-me">
						<?php $email = encode_email_address('post@jelmerdemaat.nl'); ?>
						<i class="icon ion-social-twitter"></i> <a href="//twitter.com/jelmerdemaat">@jelmerdemaat</a>
						<i class="icon ion-social-facebook"></i> <a href="//www.facebook.com/profile.php?id=100002434562108">Jelmer de Maat</a>
						<i class="icon ion-email"></i> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
					</p>
				</div>
			</div>
		</div>
		<div class="read-more">
			<a href="#wat" class="delta"><i class="icon ion-chevron-down"></i></a>
		</div>
		<nav class="fixed">
			<ul class="unstyled">
				<li><a href="#home">Home</a></li>
				<li><a href="#wat">Wat?</a></li>
				<li><a href="#hoe">Hoe?</a></li>
			</ul>
		</nav>
	</header>

	<section class="fancy-image test">
		<img src="images/jongen.jpg" alt="test">
	</section>

	<section id="wat" class="charlie goals decorative">
		<div class="content">
			<div class="columns">
				<div class="column one middle">
					<h3>Wat ik wil bereiken</h3>
				</div>
				<div class="">
					<div class="column three">
						<h2><i class="maki-college"></i> Engels</h2>
						<h4 class="alternative">Doel 1</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, odio blanditiis facilis <strong>ullam debitis nostrum ad</strong> sapiente fugit vero soluta! Vero cupiditate nostrum excepturi voluptatibus odio autem cum sequi earum.</p>
					</div>
					<div class="column three">
						<h2><i class="maki-school"></i> Sport</h2>
						<h4 class="alternative">Doel 2</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, numquam eos sunt <strong>quae cupiditate magni maxime</strong> dolorum assumenda delectus quaerat. Earum, ducimus perspiciatis nulla necessitatibus minima molestiae vitae commodi ratione.</p>
					</div>
					<div class="column three">
						<h2><i class="icon ion-heart"></i> Gezondheid</h2>
						<h4 class="alternative">Doel 3</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eaque itaque saepe <strong>ea neque unde ex</strong> iusto cupiditate consequatur ipsum odio dicta ducimus eveniet molestias pariatur. A possimus atque consequatur.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="fancy-image test">
		<img src="images/jongen.jpg" alt="test">
	</section>

	<section id="hoe" class="bravo decorative">
		<div class="content">
			<div class="columns">
				<div class="column one middle">
					<h3>Hoe kun je mij helpen?</h3>
				</div>
				<div class="column two">
					<h4>Door financieel bij te dragen</h4>
					<p>Sint officiis illo culpa saepe nam consequatur sunt. Reprehenderit, officia sapiente a quia maiores. Itaque, quia dolores eius. Voluptates, maiores, tempore, reiciendis dicta sed maxime officia fugiat commodi incidunt quod itaque doloribus quis non qui ad optio eligendi illo nesciunt quae dolores impedit distinctio.</p>
				</div>
				<div class="column two">
					<h4>Door als school mee te doen</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, saepe veniam rem nemo iure possimus. Exercitationem, nisi, optio, nihil voluptates consectetur saepe deleniti facilis consequatur numquam fugit odit hic qui illum ea reprehenderit. Deleniti, quisquam, dolores sint officiis illo culpa saepe nam consequatur sunt.</p>
				</div>
				<div class="column one">
					<h4>(To be continued)</h4>
				</div>
			</div>
		</div>
	</section>



	<footer class="echo decorative">
		<div class="content">
			<div class="columns">
				<div class="column two">
					<h4>Peru 2014</h4>
					<p>
						Door Jelmer de Maat <br>
						<?php $email = encode_email_address('post@jelmerdemaat.nl'); ?>
						Mail naar <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
					</p>
				</div>
				<div class="column two">
				</div>
			</div>
		</div>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/plugins.js"></script>
	<script src="js/peru.js"></script>

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
