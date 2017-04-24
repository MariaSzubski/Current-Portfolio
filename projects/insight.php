<?php
	$h1 = 'Insight';
	$h2 = 'Rethinking Standardized Testing';
	$himg = ['../img/proj_insight.jpg', 'Insight: Rethinking Standardized Testing Banner'];
	$prev = 'jcp.php';
	$next = 'guitar.php';
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
					When schools rely on fact memorization to prepare for standardized tests, students lose interest in the subject matter and miss its connection to the real word. This tablet-based alternative tests students’ conceptual knowledge and creative problem solving in an engaging, exploratory format.
				</p>
				<p>
					inSight was my senior capstone project consisting of research, design, user testing, and interactive prototyping. This year-long project was a collaboration with classmate Matt Denzer.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>Mobile UI Design</dd>
					<dd>Research</dd>
					<dd>User Testing</dd>
					<dd>HTML</dd>
					<dd>jQuery</dd>
					<dd>PhoneGap</dd>
				</dl>
			</div>
		</section>


		<section id="research_insight" class="gallery">
			<h1>Research</h1>
			<div>
				<p>
					To narrow the topic of our project from general education to science-based standardized testing, we visited local science museums and researched educational books and iPad apps We also looked into existing test methods and met with local educators to discuss their experiences teaching young students.
				</p>
			</div>
			<img src="../img/insight/sm/research_01.jpg" alt="Insight: Rethinking Standardized Testing Research">
			<img src="../img/insight/sm/research_02.jpg" alt="Insight: Rethinking Standardized Testing Research">
			<img src="../img/insight/sm/research_03.jpg" alt="Insight: Rethinking Standardized Testing Research">
			<img src="../img/insight/sm/research_04.jpg" alt="Insight: Rethinking Standardized Testing Research">
			<img src="../img/insight/sm/research_05.jpg" alt="Insight: Rethinking Standardized Testing Research">
			<img src="../img/insight/sm/research_06.jpg" alt="Insight: Rethinking Standardized Testing Research">
		</section>

		<section class="slides">
			<h1>Wireframes</h1>
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
				<a href="../img/insight/lg/design1_01.png"></a>
				<a href="../img/insight/lg/design1_02.png"></a>
				<a href="../img/insight/lg/design1_03.png"></a>
				<a href="../img/insight/lg/design1_04.png"></a>
				<a href="../img/insight/lg/design1_05.png"></a>
			</div>
			<div class="desc">
				<p>
					The style and content of the app is inspired by game elements and cartoon graphics to make the test more engaging to students.
				</p>
				<p>
					The wireframes focus on two science topics — the effect of plant roots on erosion and the effect of sunlight on plant growth. Each test question is  an interactive piece through which students demonstrate skills and explain their understanding of the subject matter.
				</p>
			</div>

		</section>

		<section class="slides">
			<h1>User Testing</h1>

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
				<a href="../img/insight/sm/testing_01.jpg" data-full="../img/insight/lg/testing_01.jpg"></a>
				<a href="../img/insight/sm/testing_02.jpg" data-full="../img/insight/lg/testing_02.jpg"></a>
				<a href="../img/insight/sm/testing_03.jpg" data-full="../img/insight/lg/testing_03.jpg"></a>
				<a href="../img/insight/sm/testing_04.jpg" data-full="../img/insight/lg/testing_04.jpg"></a>
			</div>
			<div class="desc">
				<p>
					We conducted a scripted user test with seven local students. Using a paper prototype, we asked the students to complete common tasks within the app.
				</p>
				<p>
					The feedback was mostly positive and we revised the designs based on common problems. Details about our test methods and results can be found on pages 23-28 in the <a href="../assets/MSzubski_MDenzer_inSightProcess.pdf" target="_blank">Design Process PDF</a>.
				</p>
			</div>

		</section>

		<section class="slides">
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
				<a href="../img/insight/lg/design2_01.jpg"></a>
				<a href="../img/insight/lg/design2_02.jpg"></a>
				<a href="../img/insight/lg/design2_03.jpg"></a>
				<a href="../img/insight/lg/design2_04.jpg"></a>
				<a href="../img/insight/lg/design2_05.jpg"></a>
				<a href="../img/insight/lg/design2_06.jpg"></a>
				<a href="../img/insight/lg/design2_07.jpg"></a>
				<a href="../img/insight/lg/design2_08.jpg"></a>
			</div>
			<div class="desc">
				<p>
					In the second phase on the project, we refined the interface style and began building the interactive prototype. This demo is a combination of interactive elements and UI animations. It was built in HTML and  jQuery and wrapped in PhoneGap to create a native iPad app.
				</p>
				<p>
					A working demo of inSight was displayed at the University of Cincinnati’s DAAPWorks in 2012.
				</p>
			</div>
		</section>

		<section class="endSummary final">
			<h1>Final Design</h1>
			<div class="desc centered">
				<p>The interactive prototype was built to work in browsers and as a native iOS 5 app.</p>
			</div>
			<div class="links">
				<a href="../assets/insight/index.php" class="button" target="_blank">In-Browser Demo</a>
				<a href="../assets/MSzubski_MDenzer_inSightProcess.pdf" target="_blank" class="button">Design Process (PDF)</a>
				<a href="https://github.com/MariaSzubski/insight" target="_blank" class="button">PhoneGap Files on Github</a>
			</div>
		</section>

		<?php include 'template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
