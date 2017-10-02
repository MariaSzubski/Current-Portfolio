<?php
	$dir = '../';
	$h1 = 'Style Guide';
	$h2 = 'Documentation Website';
	$himg = ['../img/style_guide/lg/banner.png', 'Style Guide Banner'];
	$prev = 'insight.php';
	$next = 'js.php';
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
					The Style Guide is a template for a documentation website for a brand or project. It displays font styles, color palette, web components, pattern recommendations.

					It is built with AJAX and PHP and is responsive at all device sizes. If JavaScript is disabled the site works as standard HTML.
				</p>
				<p>
					View this project on <a href="https://github.com/MariaSzubski/style-guide" target="_blank">GitHub</a>.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>JavaScript / jQuery</dd>
					<dd>AJAX</dd>
					<dd>Local Storage</dd>
					<dd>PHP</dd>
					<dd>HTML5 / LESS</dd>
					<dd>Responsive Design</dd>
					<dd>Git</dd>
				</dl>
			</div>
		</section>
		<section id="ratio_guitar" class="slides">
			<h1>Responsive Layout</h1>
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
				<a href="../img/style_guide/lg/design_01.png"></a>
				<a href="../img/style_guide/lg/design_02.png"></a>
				<a href="../img/style_guide/lg/design_03.png"></a>
				<a href="../img/style_guide/lg/design_04.png"></a>
			</div>
		</section>
		<section class="gist_container final">
			<h1>Pixel / REM Conversion</h1>
			<div class="desc">
				<p>
					Users can choose between pixels or rem units. This setting applies site-wide and is saved to local storage. The values are calculated on the fly.
				</p>
			</div>
			<div>
				<script src="https://gist.github.com/MariaSzubski/59d14242ba7a24cffc601315f68b7c8c.js"></script>
			</div>
		</section>

		<section class="slides endSummary final">
			<h1>Interactive Demo</h1>
			<div class="links">
				<a href="../assets/style-guide" class="button" target="_blank">Style Guide Website</a>
				<a href="https://github.com/MariaSzubski/style-guide" class="button" target="_blank">Project Files on GitHub</a>
			</div>
		</section>

		<?php include '../template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
