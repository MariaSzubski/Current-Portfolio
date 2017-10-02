<?php
	$dir = '../';
	$h1 = 'Wishlist Generator for Kmart';
	$h2 = "An Advertisement for Kmart &amp; the Nickelodeon Kids' Choice Awards";
	$himg = ['../img/kca/design_01.png', 'Wishlist Generator for Kmart Banner'];
	$prev = 'urbanwalls.php';
	$next = 'insight.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maria Szubski • Front End Developer &amp; UX Designer • Design Portfolio</title>
		<link rel="stylesheet" href="../css/build/typestyles.css">
		<link rel="stylesheet" href="../css/build/fotorama.css">
		<link rel="stylesheet" href="../css/build/master.css">
		<link rel="stylesheet" href="../css/build/workSample.css">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-8457306-3', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>

		<?php include '../template/proj_header.inc.php' ?>

		<section class="details">
			<h1>About This Project</h1>
			<div>
				<p>
					Kids can use KMART's Wishlist Generator to find cool products based on their interests and the shows they like. This was an advertisement for KMART and the 2011 Nickelodeon Kids' Choice Awards.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>Web Design</dd>
				</dl>
			</div>
		</section>



		<section class="details">
			<h1>Design Details</h1>
			<div>
				<h2>Concept</h2>
				<p>
					The branding for the KCA 2011 was inspired by Japanese commercial advertising and features bright colors with lots of decorative sticker elements. The Wishlist Generator’s slot machine design makes the ad more fun and engaging.
				</p>
			</div>
			<div>
				<h2>Work Flow</h2>
				<p>
					Kids answer a quick quiz about themselves and their interests. The Generator uses these answers to find relevant KMART products. Kids can drag and drop these items into the list at the bottom of the screen and then share their final list with friends and family.
				</p>
			</div>
		</section>


		<section class="slides final">
			<h1>Final Design</h1>
			<div 	class="fotorama"
					data-width="100%"
					data-fit="contain"
					data-allowfullscreen="true"
					data-transition="dissolve"
					data-loop="true"
					data-keyboard="true"
					data-arrows="true"
					data-click="true"
					data-swipe="true">
				<a href="../img/kca/design_01.png"></a>
				<a href="../img/kca/design_02.png"></a>
				<a href="../img/kca/design_03.png"></a>
				<a href="../img/kca/design_04.png"></a>
				<a href="../img/kca/design_05.png"></a>
				<a href="../img/kca/design_06.png"></a>
				<a href="../img/kca/design_07.png"></a>
				<a href="../img/kca/design_08.png"></a>
			</div>

		</section>

		<?php include '../template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
