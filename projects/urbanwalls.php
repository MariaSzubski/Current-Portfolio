<?php
	$dir = '../';
	$h1 = 'Urban Walls';
	$h2 = 'Public Art &amp; Community Revitalization';
	$himg = ['../img/urbanwalls/showcase.png', 'Urban Walls: Community Revitalization Banner'];
	$prev = 'nbc.php';
	$next = 'kca.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maria Szubski • Front End Developer &amp; UX Designer • Design Portfolio</title>
		<link rel="stylesheet" href="../css/build/typestyles.css">
		<link rel="stylesheet" href="../css/build/fotorama.css">
		<link rel="stylesheet" href="../css/build/master.css">
		<link rel="stylesheet" href="../css/build/workSample.css">
		<?php include '../template/tracker.inc.php' ?>
	</head>
	<body>

		<?php include '../template/proj_header.inc.php' ?>

		<section class="details">
			<h1>About This Project</h1>
			<div>
				<p>
					In the 1970s Carl Solway and Jack Boulton commissioned local artists to paint super graphics on the sides of buildings in downtown Cincinnati, OH. Forty years later, public art projects continue to be an important part of urban revitalization in neighborhoods throughout the city.
				</p>
				<p>
					This narrative project was a collaboration by the 2011 Digital Design class at the University of Cincinnati, with the goal of recounting the impact of the Urban Walls project. My team created a motion piece that discusses the impact of public art and focus the super graphic designed by Gordon Salchow.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>Motion Graphics</dd>
					<dd>Video Editing</dd>
					<dd>Research</dd>
					<dd>Storytelling</dd>
				</dl>
			</div>
		</section>


		<section id="research_uw" class="gallery">
			<h1>Research</h1>
			<div>
				<p>
					As part of our research, we visited the local library and found prints of the original wall designs, along with microfilm newspaper articles about Urban Walls. We also took photos of other super graphics and community art projects in downtown Cincinnati. These projects led us to local public art groups, including Artworks and Keep Cincinnati Beautiful.
				</p>
			</div>
			<img src="../img/urbanwalls/research_03.jpg" alt="Urban Walls: Community Revitalization Research">
			<img src="../img/urbanwalls/research_04.jpg" alt="Urban Walls: Community Revitalization Research">
			<img src="../img/urbanwalls/research_01.jpg" alt="Urban Walls: Community Revitalization Research">
			<img src="../img/urbanwalls/research_02.jpg" alt="Urban Walls: Community Revitalization Research">
			<img src="../img/urbanwalls/research_05.jpg" alt="Urban Walls: Community Revitalization Research">
		</section>


		<section class="slides">
			<h1>Project Details</h1>
			<div 	class="fotorama"
					data-width="100%"
					data-ratio="700/426"
					data-fit="cover"
					data-transition="dissolve"
					data-loop="true"
					data-keyboard="true"
					data-arrows="true"
					data-click="true"
					data-swipe="true">
				<a href="https://player.vimeo.com/video/30635338">Design Transition</a>
				<a href="https://player.vimeo.com/video/30635741">Outro</a>
			</div>
			<div class="desc">
				<h2>Motion Graphic Snippets</h2>
				<p>
					Gordon Salchow’s design started as a series of three walls to be painted on the back of the Mabley &amp; Carew building at West Fourth Street. Due to financial constraints only one wall was actually painted.  The first animation show the transition from Salchow’s initial concept to the final, single-wall design.
				</p>
				<p>
					The segment transitions were inspired by the microfilm articles we found while researching this project. The newspaper articles take the viewer from the Urban Walls segment to the discussion about present-day public art.
				</p>
			</div>
		</section>

		<section class="slides endSummary final">
			<h1>Final Story</h1>

			<div id="ratio_uw" class="video">
				<iframe src="https://player.vimeo.com/video/24535567?color=e3a730&amp;byline=0&amp;portrait=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>

			<div class="links">
				<a href="../assets/UrbanWalls_ProcessBook.pdf" class="button" target="_blank">Design Process (PDF)</a>
				<a href="http://urbanwalls.publicinterfaces.com/" class="button" target="_blank">Other Urban Walls Projects</a>
			</div>


		</section>

		<?php include '../template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
