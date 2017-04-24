<?php
	$h1 = 'NBCUniversal Careers';
	$h2 = 'A Redesigned Website Proposal';
	$himg = ['../img/proj_nbc.jpg', 'NBC Universal Careers Banner'];
	$prev = 'espn.php';
	$next = 'urbanwalls.php';
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
					Prospective employees use the NBCUniversal Careers website to find jobs, research benefits, and track job applications. This simplified design highlights the company’s culture, achievements, and awards without being too corporate.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>Web Design</dd>
				</dl>
			</div>
		</section>


		<section class="slides final">
			<h1>Design Details</h1>
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
				<a href="../img/nbc/design_01.jpg"></a>
				<a href="../img/nbc/design_02.jpg"></a>
			</div>
			<div class="desc">
				<p>
					This design features prominent imagery and quotes from NBC Universal’s properties to create an emotional connection with job candidates. The style is  bright, clean, and easy to use.
				</p>
				<p>
					The navigation on the landing page is grouped into 4 sections: Search, Job Information, News, and Theme Park Jobs (a separate site). The background images and actors’ quotes rotate to highlight different properties.
				</p>
				<p>
					Users can find details about different roles and responsibilities within the company in <em>Working at NBC</em> section. Each role includes an employee photo, brief job description, and a 'Day In the Life' video.
				</p>
			</div>

		</section>

		<?php include 'template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
