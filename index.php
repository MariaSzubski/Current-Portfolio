<?php $dir = '';
	  $aws = 'https://s3.us-east-2.amazonaws.com/msz-portfolio/' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maria Szubski • Front-End Web Developer • Independent Contractor</title>
		<link rel="stylesheet" href="css/build/typestyles.css">
		<link rel="stylesheet" href="css/build/master.css">
		<link rel="stylesheet" href="css/build/intro.css">
		<?php include 'template/tracker.inc.php' ?>
	</head>
	<body id="idxContainer">

		<nav class="mainnav home">
			<div id="nav">
				<a>Menu</a>
				<a href="#workSamples">Work Samples</a>
				<a href="#experience">Experience</a>
				<a href="#aboutMe">About Me</a>
				<a href="#involveRec">Classes &amp; Recognition</a>
				<a href="assets/MariaSzubski_Resume.pdf" download>Resume (PDF)</a>
			</div>
		</nav>

		<header id="intro">
			<img 	srcset="<?=$aws?>index/headshot.jpg,
							<?=$aws?>index/headshot@2x.jpg 2x,
							<?=$aws?>index/headshot@3x.jpg 3x,
							<?=$aws?>index/headshot@4x.jpg 4x"
					src="<?=$aws?>index/headshot@3x.jpg" alt="Maria Szubski Headshot">
			<h1>Maria Szubski</h1>
			<p>Front-End Web Developer</p>
			<ul id="social">
				<li><a href="https://www.linkedin.com/in/MariaSzubski" target="_blank"><img src="img/soc_linkedin.svg" alt="LinkedIn" title="LinkedIn"></a></li>
				<li><a href="https://github.com/MariaSzubski" target="_blank"><img src="img/soc_github.svg" alt="GitHub" title="GitHub"></a></li>
				<li><a href="https://twitter.com/MariaSzubski" target="_blank"><img src="img/soc_twitter.svg" alt="Twitter" title="Twitter"></a></li>
				<li><a href="mailto:hello@mariaszubski.com" target="_blank"><img src="img/soc_email.svg" alt="Email" title="Email"></a></li>
			</ul>
			<a href="assets/MariaSzubski_Resume.pdf" class="button" download>Download Resume</a>
		</header>

		<section id="workSamples">
			<h1>Work Samples</h1>

			<div id="wsContainer">

				<div class="caseStudy" id="ws_1">
					<a href="projects/insight.php">
						<img 	srcset="<?=$aws?>index/proj_insight.jpg 357w,
										<?=$aws?>index/proj_insight@2x.jpg 713w,
										<?=$aws?>index/proj_insight@3x.jpg 1079w"
								src="<?=$aws?>index/proj_insight@3x.jpg" alt="Insight: Rethinking Standardized Testing">
						<div class="label">
							<h2>Insight: Rethinking Standardized Testing</h2>
							<p>UX Design • PhoneGap • jQuery • HTML</p>
						</div>
					</a>
				</div>
				<div id="wsGroup_1">
					<div class="caseStudy" id="ws_2">
						<a href="projects/style_guide.php">
							<img  	srcset="<?=$aws?>index/proj_style_guide.png 240w,
											<?=$aws?>index/proj_style_guide@2x.png 480w,
											<?=$aws?>index/proj_style_guide@3x.png 720w"
									src="<?=$aws?>index/proj_style_guide@3x.png" alt="Style Guide Template">
							<div class="label">
								<h2>Style Guide Template</h2>
								<p>PHP • AJAX • Git • Responsive Design</p>
							</div>
						</a>
					</div>
					<div class="caseStudy" id="ws_3">
						<a href="projects/js.php">
							<img   	srcset="<?=$aws?>index/pproj_codeSnippets.png 257w,
											<?=$aws?>index/proj_codeSnippets@2x.png 513w"
									src="<?=$aws?>index/proj_codeSnippets@2x.png" alt="JavaScript Code Snippets">
							<div class="label">
								<h2>JavaScript Snippets</h2>
								<p>JavaScript • jQuery</p>
							</div>
						</a>
					</div>
				</div>
				<div id="wsGroup_2">
					<div class="caseStudy" id="ws_4">
						<a href="projects/ikea.php">
							<img   	srcset="<?=$aws?>index/proj_ikea.png 240w,
											<?=$aws?>index/proj_ikea@2x.png 480w,
											<?=$aws?>index/proj_ikea@3x.png 720w"
									src="<?=$aws?>index/proj_ikea@3x.png" alt="IKEA RFID Experience">
							<div class="label">
								<h2>IKEA RFID Experience</h2>
								<p>UX Design • Wayfinding • Animation</p>
							</div>
						</a>
					</div>
					<div class="caseStudy" id="ws_5">
						<a href="projects/guitar.php">
							<img    srcset="<?=$aws?>index/proj_guitar.png 180w,
											<?=$aws?>index/proj_guitar@2x.png 360w"
									src="<?=$aws?>index/proj_guitar@2x.png" alt="Guitar Practice Log">
							<div class="label">
								<h2>Guitar Practice Log</h2>
								<p>JavaScript • Mobile UX • Invision</p>
							</div>
						</a>
					</div>
				</div>
				<div class="caseStudy" id="ws_6">
					<a href="projects/espn.php">
						<img   	srcset="<?=$aws?>index/proj_titleix.jpg 240w,
										<?=$aws?>index/proj_titleix@2x.jpg 480w,
										<?=$aws?>index/proj_titleix@3x.jpg 720w"
								src="<?=$aws?>index/proj_titleix@3x.jpg" alt="espnW: The Power of IX">
						<div class="label">
							<h2>espnW: The Power of IX Mosaic</h2>
							<p>UX Design • Branding</p>
						</div>
					</a>
				</div>
				<div class="caseStudy" id="ws_7">
					<a href="projects/nbc.php">
						<img   	srcset="<?=$aws?>index/proj_nbc.png 240w,
										<?=$aws?>index/proj_nbc@2x.png 480w,
										<?=$aws?>index/proj_nbc@3x.png 720w"
								src="<?=$aws?>index/proj_nbc@3x.png" alt="NBC Universal Careers Website">
						<div class="label">
							<h2>NBCUniversal Careers</h2>
							<p>UX Design • Branding</p>
						</div>
					</a>
				</div>
				<div class="caseStudy" id="ws_8">
					<a href="projects/urbanwalls.php">
						<img    srcset="<?=$aws?>index/proj_urbanWalls.jpg 240w,
										<?=$aws?>index/proj_urbanWalls@2x.jpg 480w,
										<?=$aws?>index/proj_urbanWalls@3x.jpg 720w"
								src="<?=$aws?>index/proj_urbanWalls@3x.jpg" alt="Urban Walls: Community Revitalization">
						<div class="label">
							<h2>Urban Walls Story</h2>
							<p>Motion Graphics • Video Editing</p>
						</div>
					</a>
				</div>
				<div class="caseStudy" id="ws_9">
					<a href="projects/kca.php">
						<img    srcset="<?=$aws?>index/proj_kca.png 240w,
										<?=$aws?>index/proj_kca@2x.png 480w,
										<?=$aws?>index/proj_kca@3x.png 720w"
								src="img/proj_kca@.png" alt="Wishlist Generator for Kmart">
						<div class="label">
							<h2>Wishlist Generator for Kmart</h2>
							<p>UX Design • Branding</p>
						</div>
					</a>
				</div>
			</div>
		</section>




		<section id="experience">

			<div id="expContainer">
        <h1>Professional Experience</h1>
				<article>
					<div>
						<h2>Front-End Web Developer</h2>
						<h3><a href="https://mariaszubski.com/" title="Maria Szubski Digital, LLC" target="_blank">Maria Szubski Digital, LLC</a> • Independent Contractor</h3>
						<h4>Work with clients to strategize and build web applications, with an emphasis on front-end development, JavaScript, and the implementation of responsive design.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="location">Cincinnati, OH
						</h5>
						<h6>
              <img src="img/i_date.svg" alt="date">Jan 2018 – Present
						</h6>
					</div>
				</article>
        <article>
					<div>
						<h2>Chapter Leader & Instructor</h2>
						<h3><a href="https://www.girldevelopit.com/chapters/cincinnati" title="Girl Develop It" target="_blank">Girl Develop It</a> • Cincinnati Chapter</h3>
						<h4>Responsible for leading and supporting a vibrant community of instructors, volunteers, and students. Plan quarterly course schedule, promote events, foster community partnerships, grow the chapter, and run day-to-day operations. Event co-ordinator in charge of overseeing organizers. Instructor for the Intro to HTML/CSS classes.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="location">Cincinnati, OH
						</h5>
						<h6>
              <img src="img/i_date.svg" alt="date">Apr 2018 – Present
						</h6>
					</div>
				</article>
				<article>
					<div>
						<h2>UX Designer</h2>
						<h3><a href="http://www.nielsen.com/" title="Nielsen" target="_blank">Nielsen</a> • User Experience Team </h3>
						<h4>Governed Nielsen’s collection of big data applications to ensure brand cohesion, consistency, and ease of use. Designed interfaces across multiple frameworks including AngularJS, Sencha, MicroStrategy, and D3. Created mobile applications that adhere to iOS and Material Design guidelines. Built and maintained UX Standards documentation website using PHP and AJAX.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="Location" title="Location">Cincinnati, OH
						</h5>
						<h6>
              <img src="img/i_date.svg" alt="Time Period" title="Time Period"> Nov 2012 – Dec 2017
						</h6>
					</div>
				</article>
          <h1>Internships</h1>
				<article>
					<div>
						<h2>Design Intern</h2>
						<h3><a href="http://momentdesign.com" title="Moment Design" target="_blank">Moment Design</a> • Digital Product Design Firm</h3>
						<h4>Created designs that improved usability and consistency of data-driven web and mobile products. Researched rapid prototyping tools to accelerate output.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="Location" title="Location">New York, NY
						</h5>
						<h6>
              <img src="img/i_date.svg" alt="Time Period" title="Time Period">Winter 2012
						</h6>
					</div>
				</article>
				<article>
					<div>
						<h2>Interactive Design Intern</h2>
						<h3><a href="http://www.antfarm.net/" title="The Ant Farm" target="_blank">The Ant Farm</a> • Entertainment Advertising Agency</h3>
						<h4>Developed jQuery-based site to promote company accomplishments. Created assets for ad campaigns, including website designs and social media themes.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="Location" title="Location">Los Angeles, CA
						</h5>
						<h6>
							<img src="img/i_date.svg" alt="Time Period" title="Time Period">Winter &amp; Summer 2011
						</h6>
					</div>
				</article>
				<article>
					<div>
						<h2>Digital Design Intern</h2>
						<h3><a href="http://www.jcpenney.com/" title="JCPenney" target="_blank">JCPenney</a> • IT Innovations Department</h3>
						<h4>Improved customers’ shopping experience by redesigning large-format kiosk and iPad app interfaces. Pitched concepts for digital shopping experiences.</h4>
					</div>
					<div>
						<h5>
              <img src="img/i_location.svg" alt="Location" title="Location">Dallas, TX
						</h5>
						<h6>
							<img src="img/i_date.svg" alt="Time Period" title="Time Period">Summer 2010
						</h6>
					</div>
				</article>
				<article>
					<div>
						<h2>Design Intern</h2>
						<h3><a href="http://www.chesapeakegrp.com/" title="The Chesapeake Group" target="_blank">The Chesapeake Group</a> • Packaging &amp; Branding Firm</h3>
						<h4>Assembled packaging samples for user tests. Shot photography for sales materials. Pitched concepts for a line of educational toys.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="Location" title="Location">Cincinnati, OH
						</h5>
						<h6>
              <img src="img/i_date.svg" alt="Time Period" title="Time Period">Winter 2010
						</h6>
					</div>
				</article>
				<article>
					<div>
						<h2>Web Design Intern</h2>
						<h3><a href="http://www.evenflo.com/" title="Evenflo" target="_blank">Evenflo</a> • Marketing Department</h3>
						<h4>Built interactive guides in Flash that walked customers through installation and use of company’s products. Maintained internal CMS and social networks. </h4>
					</div>
					<div>
						<h5>
							<img src="img/i_location.svg" alt="Location" title="Location">Miamisburg, OH
						<h6>
							<img src="img/i_date.svg" alt="Time Period" title="Time Period">Summer 2009
						</h5>
						</h6>
					</div>
				</article>

				<h1>Volunteer Experience</h1>
        <article>
					<div>
						<h2>Class Organizer</h2>
						<h3><a href="https://www.girldevelopit.com/" title="Girl Develop It" target="_blank">Girl Develop It</a> • Cincinnati Chapter</h3>
						<h4>Work with Chapter Leaders to plan quarterly curriculum and and events. Secure venues and promote classes on social media. Award scholarships. Provide mentoring to students. Assist with class setup and operations.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_date.svg" alt="date">Jul 2017 – Apr 2018
						</h5>
					</div>
				</article>
				<article>
					<div>
						<h2>Teaching Assistant</h2>
						<h3><a href="https://www.girldevelopit.com/" title="Girl Develop It" target="_blank">Girl Develop It</a> • Cincinnati Chapter</h3>
						<h4>Assist class Instructors by providing mentoring to students during class.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_date.svg" alt="date">Nov 2015 – Jul 2017
						</h5>
					</div>
				</article>


				<h1>Education</h1>

				<article>
					<div>
						<h2>Bachelor of Science in Digital Design</h2>
						<h3>University of Cincinnati: College of Design, Architecture, Art &amp; Planning</h3>
						<h4>Participated in the Professional Practice program, alternating quarters of classes with quarters of work experience in the field of Digital Design.</h4>
					</div>
					<div>
						<h5>
							<img src="img/i_date.svg" alt="date">Class of 2012
						</h5>
					</div>
				</article>
			</div>
		</section>




		<section id="aboutMe">
			<h1>About Me</h1>
			<div>
				<p>
					I am a Front-End Web Developer who loves tinkering with code and building easy-to-use products. I focus on usability and creative problem solving and enjoy seeing the impact of my work on the people who use the products I create.
        </p>
        <p>
          I'm also a Chapter Leader and Instructor with Girl Develop It Cincinnati, a non-profit that provides accessible web development and technology classes to empower women.
				</p>
			</div>
			<div id="skills">
				<dl>
					<dt>Development Skills</dt>
					<dd>HTML5, CSS3, SCSS, LESS</dd>
					<dd>ES6, AJAX, jQuery</dd>
					<dd>Git, GitHub</dd>
					<dd>Bootstrap, Wordpress</dd>
				</dl>
				<dl>
					<dt>Design Skills</dt>
					<dd>Web &amp; Mobile UI Design</dd>
					<dd>UX Architecture</dd>
					<dd>Responsive Design</dd>
					<dd>Usability Testing</dd>
				</dl>
			</div>
		</section>


		<section id="involveRec">
      <h1>Classes Taught</h1>
      <div id="classContainer">
        <article>
          <div class="cl_01"><img src="img/i_presentation.svg" alt="publication" title="Class"></div>
          <div class="cl_02"><h2>Code Your First Website</h2></div>
          <div class="cl_03">Girl Develop It Cincinnati</div>
          <div class="cl_04">April 2018</div>
        </article>

        <article>
          <div class="cl_01"><img src="img/i_presentation.svg" alt="publication" title="Class"></div>
          <div class="cl_02"><h2>Code Your First Website: New Year's Edition</h2></div>
          <div class="cl_03">Girl Develop It Cincinnati</div>
          <div class="cl_04">January 2018</div>
        </article>
      </div>


      <h1>Recognition</h1>
			<div id="invContainer">
					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Quantifying the Business Value of User Experience</h2>
							<h3>Whitepaper Published at Nielsen</h3>
							<h4>September 12, 2014</h4>
							<img src="img/i_pub.svg" alt="publication" title="Publication">
						</div>
						<div class="layer2">
							<p>This internal publication provides methods of evaluating UX design work while addressing the benefits and challenges of positioning UX within an organization.</p>
						</div>
					</article>

					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Simply Excellent Award</h2>
							<h3>Nielsen Author Series Presentation</h3>
							<h4>November 2014</h4>
							<img src="img/i_presentation.svg" alt="presentation" title="Presentation">
						</div>
						<div class="layer2">
							<p>Awarded for an engaging and dynamic presentation, one of the highest-attended Whitepaper events to date. Our team discussed Quantifying the Business Value of User Experience. <a href="assets/NielsenAuthorSeries_Article.pdf" target="_blank">This article (pdf)</a> provides details about the presentation.</p>
						</div>
					</article>


					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Simply Excellent Award</h2>
							<h3>Nielsen Family</h3>
							<h4>December 2015</h4>
							<img src="img/i_award.svg" alt="award" title="Recognition">
						</div>
						<div class="layer2">
							<p>"Maria's outstanding work resulted in a superior and comprehensive upgrade and will ensure an improved panelist experience and achieve associated project productivity."</p>
						</div>
					</article>


					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Kudos Award</h2>
							<h3>Requirements Management Presentation</h3>
							<h4>February 2014</h4>
							<img src="img/i_presentation.svg" alt="presentation" title="Presentation">
						</div>
						<div class="layer2">
							<p>Awarded for a “visually appealing, eye-opening” presentation regarding UX engagement in project requirements and planning.</p>
						</div>
					</article>



					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Simply Excellent Award</h2>
							<h3>Nielsen Employee Engagement</h3>
							<h4>July 2015</h4>
							<img src="img/i_award.svg" alt="award" title="Recognition">
						</div>
						<div class="layer2">
							<p>"Maria was a valued member of the Employee Engagement Team who was constantly engaged, provided great guidance &amp; was extremely diligent at meeting timelines. We definitely could not have made this happen without her."</p>
						</div>
					</article>


					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Simply Excellent Award</h2>
							<h3>C-DAR Nielsen Item Coding App</h3>
							<h4>October 2014</h4>
							<img src="img/i_award.svg" alt="award" title="Recognition">
						</div>
						<div class="layer2">
							<p>Awarded for collaboration and contributions to the accelerated launch of the Nielsen Item Coding mobile app.</p>
						</div>
					</article>


					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Best Overall Design</h2>
							<h3>Nielsen C-DAR Challenge</h3>
							<h4>January 2014</h4>
							<img src="img/i_award.svg" alt="award" title="Recognition">
						</div>
						<div class="layer2">
							<p>Team submission for a consumer-facing data collection app. Awarded for user experience,  organization, and excellent features.</p>
						</div>
					</article>


					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Certificate of Recognition</h2>
							<h3>Segmentation &amp; Market Solutions</h3>
							<h4>May 2014</h4>
							<img src="img/i_award.svg" alt="award" title="Recognition">
						</div>
						<div class="layer2">
							<p>Awarded for demonstrating the core Segmentation &amp; Market Solutions program principles: Keep It Simple, Act With Urgency, and Extend Beyond Your Role.</p>
						</div>
					</article>


					<article>
						<img src="img/i_info.svg" alt="info" title="Details">
						<div class="layer1">
							<h2>Team Innovation Award</h2>
							<h3>Chief Engineering Awards</h3>
							<h4>December 2013</h4>
							<img src="img/i_award.svg" alt="award" title="Recognition">
						</div>
						<div class="layer2">
							<p>Awarded to Nielsen Report Builder team for outstanding performance, innovation, and dedication. The use of Agile methodology influenced the process of future Nielsen products.</p>
						</div>
					</article>


			</div>
		</section>

		<?php include 'template/footer.inc.php'; ?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="scripts/build/js.min.js"></script>
	</body>
</html>
