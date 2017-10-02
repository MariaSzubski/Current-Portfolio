<?php
	$dir = '../';
	$h1 = 'Guitar Practice Log';
	$h2 = 'Skill Log and Song Tracker';
	$himg = ['../img/guitar/lg/banner.png', 'Guitar Practice Log Banner'];
	$prev = 'ikea.php';
	$next = 'espn.php';
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
		<?php include '../template/tracker.inc.php' ?>
	</head>
	<body>

		<?php include '../template/proj_header.inc.php' ?>

		<section class="details">
			<h1>About This Project</h1>
			<div>
				<p>
					Guitar Practice Log is a web app that tracks skill progress and displays song details. The <em>1 Minute Chord Changes</em> section logs finger exercises and charts progress over time. The <em>Song List</em> section displays song chords and strumming patterns.
				</p>
				<p>
					Guitar Practice Log is an ongoing project. View this project’s progress on <a href="https://github.com/MariaSzubski/GuitarPractice" target="_blank">GitHub</a> and the <a href="https://github.com/MariaSzubski/GuitarPractice/wiki/01.--What-is-Guitar-Practice-Log%3F" target="_blank">GitHub Project Wiki</a>.
				</p>
				<dl>
					<dt>Demonstrated Skills</dt>
					<dd>JavaScript</dd>
					<dd>GitHub</dd>
					<dd>HTML5</dd>
					<dd>Wireframing</dd>
					<dd>Responsive Design</dd>
					<dd>Data Visualization</dd>
				</dl>
			</div>
		</section>


		<section id="ratio_guitar" class="slides">
			<h1>Wireframes &amp; FlowCharts</h1>
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
					<a href="../img/guitar/sm/sketch_01.png" data-full="../img/guitar/lg/sketch_01.jpg"></a>
					<a href="../img/guitar/sm/sketch_02.png" data-full="../img/guitar/lg/sketch_02.jpg"></a>
					<a href="../img/guitar/sm/sketch_03.png" data-full="../img/guitar/lg/sketch_03.jpg"></a>
			</div>
		</section>


		<section class="details">
			<h1>Project Sections</h1>
			<div>
				<h2>One Minute Chord Changes</h2>
				<p>
					Chord Changes are a finger exercise that builds muscle memory and increases speed. The goal is to switch between two chords as fast as possible for sixty seconds.
				</p>
				<p>
					This section of the app includes a JavaScript timer and the ability to track progress. Users save the number of changes changes for each chord group and view trendlines that show progress over time.
				</p>
			</div>
			<div>
				<h2>Song Notes</h2>
				<p>
					This section displays song chords and strumming patterns. It's meant to be a quick guide rather tahn true guitar tabs. The song list and detail views are built and transitioned using JavaScript and JSON.
				</p>
			</div>
		</section>

		<section class="slides">
			<h1>Mobile App Designs</h1>
			<div 	class="fotorama"
					data-width="100%"
					data-height="640"
					data-fit="contain"
					data-allowfullscreen="true"
					data-transition="dissolve"
					data-loop="true"
					data-keyboard="true"
					data-arrows="true"
					data-click="true"
					data-swipe="true">
					<a href="../img/guitar/sm/design_01.png"></a>
					<a href="../img/guitar/sm/design_02.png"></a>
					<a href="../img/guitar/sm/design_03.png"></a>
					<a href="../img/guitar/sm/design_04.png"></a>
					<a href="../img/guitar/sm/design_05.png"></a>
					<a href="../img/guitar/sm/design_06.png"></a>
					<a href="../img/guitar/sm/design_07.png"></a>
					<a href="../img/guitar/sm/design_08.png"></a>
					<a href="../img/guitar/sm/design_09.png"></a>
					<a href="../img/guitar/sm/design_10.png"></a>
			</div>
		</section>


		<section class="endSummary final">
			<h1>Interactive Demo</h1>
			<div class="desc centered">
				<p>The Guitar Practice Log demo is built in HTML &amp; JavaScript.</p>
			</div>
			<div class="links">
				<a href="https://github.com/MariaSzubski/GuitarPractice" class="button" target="_blank">Project Files on GitHub</a>
			</div>
		</section>

		<?php include '../template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</body>
</html>
