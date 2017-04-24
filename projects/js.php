<?php
	$dir = '../';
	$h1 = 'JavaScript Snippets';
	$h2 = '&nbsp;';
	$himg = ['../img/proj_codeSnippets.png', 'JavaScript Code Snippets Banner'];
	$prev = 'guitar.php';
	$next = 'ikea.php';
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

		<section class="gist_container final">
			<h1>Cut The Sticks</h1>
			<div class="desc">
				<p>
					Given N sticks, reduce the length of each by the length of the smallest stick. Print the number of sticks that are left before each cut operation.
				</p>
			</div>
			<div>
				<script src="https://gist.github.com/MariaSzubski/d92a0dd6028fec76d1c6aea0ee91a344.js"></script>
			</div>
		</section>



		<section class="gist_container final">
			<h1>Array Rotation</h1>
			<div class="desc">
				<p>
					John Watson performs an operation called a 'right circular rotation' on an array of integers. Find the element at index 'm' in the rotated array.
				</p>
			</div>
			<div>
				<script src="https://gist.github.com/MariaSzubski/7b1dfab706267d87d54cef482654265b.js"></script>
			</div>
		</section>



		<section class="gist_container final">
			<h1>Kangaroos</h1>
			<div class="desc">
				<p>
					Compare two jumping kangaroos to see if they are ever at the same position.
				</p>
			</div>
			<div>
				<script src="https://gist.github.com/MariaSzubski/1c5bbe2903c8cda9a82cb3a7192fe654.js"></script>
			</div>
		</section>



		<section class="gist_container final">
			<h1>One Minute Timer</h1>
			<div class="desc">
				<p>
					Simple countdown with a combined start/reset button.
				</p>
			</div>
			<div>
				<script src="https://gist.github.com/MariaSzubski/14e56eaa04da3c7db7f8.js"></script>
			</div>
		</section>



		<section class="gist_container final">
			<h1>Arc Animation</h1>
			<div class="desc">
				<p>
					Animated ring that goes with a one-minute countdown timer using HTML5 canvas.
				</p>
			</div>
			<div>
				<script src="https://gist.github.com/MariaSzubski/508ef018b2ef4a7ed94b.js"></script>
			</div>
		</section>

		<?php include '../template/footer.inc.php'; ?>

	</body>
</html>
