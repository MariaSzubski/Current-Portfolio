<?php
	$dir = '../';
	$h1 = 'JCPenney Findmore<sup>&trade;</sup> Storefront';
	$h2 = 'In-Store Shopping Kiosk';
	$himg = ['../img/proj_findmore.jpg', 'JCPenney Findmore Kiosk Banner'];
	$prev = 'kca.php';
	$next = 'insight.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maria Szubski • Front End Developer &amp; UX Designer • Design Portfolio</title>
		<link rel="stylesheet" href="../css/build/typestyles.css">
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
					JCPenney’s Findmore&trade; is a large-format kiosk that shoppers can use to find, compare, and purchase products. I worked with several other co-op students and the IT Innovations Department to design an engaging and cohesive user experience.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>UI Design</dd>
					<dd>Animated Prototype in After Effects</dd>
				</dl>
			</div>
		</section>

		<section class="details">
			<h1>Design Details</h1>
			<div>
				<h2>Concept</h2>
				<p>
					The Findmore&trade; Storefront is a screensaver that highlights kiosk features and encourages shoppers to interact. The banners at the top of the screen show the latest sales and  interactive style guides.
				</p>
			</div>
			<div>
				<h2>Considerations</h2>
				<p>
					All Findmore&trade; designs have a sense of depth, adaptable color palette, and emphasis on imagery. Our team designed a cohesive look and feel that scales to any type kiosk content.
					The Storefront composition groups elements by functionality and is immediately intuitive as soon as shoppers approach the kiosk.
				</p>
			</div>
			<div>
				<h2>Challenges</h2>
				<p>
					A large-format, portrait-oriented touch screen presents unique usability challenges. Designs have to be engaging from far away, but still usable when shoppers interact with the kiosk.
					I had to account for the height, viewing angle, and reach of the average user. In each design, the primary content is in the middle 70% of the screen to remain readable and tappable to most shoppers.
				</p>
			</div>
		</section>



		<section class="slides endSummary final">
			<h1>Storefront Motion Test</h1>
			<div id="ratio_jcp" class="video">
				<iframe src="https://player.vimeo.com/video/16132942?color=e3a730&amp;byline=0&amp;portrait=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</section>

		<?php include '../template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</body>
</html>
