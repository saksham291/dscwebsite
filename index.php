<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		Developer Student Club - IIT Bhilai
	</title>
	<link rel="stylesheet" type="text/css" href="css/custom_style.css">
	<link rel="stylesheet" href="css/custom/index.css">
	<script src="https://unpkg.com/scrollreveal"></script>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body>
	<section id="top"></section>
	<?php require 'header.php'; ?>
	<section id="top1" class="blue full-page">
		<div class="center" style="padding-top:4%; max-height: 100vh;">
			<h4 class="white-text main-text">
				<!-- "Hello World!!" We are<br> -->
				Developer Student Club<br>Powered by Google
				Developers</h4>
			<!-- <p class='white-text'>Google collaborates with university students who are passionate about growing
                developer communities and support them with starting student clubs on their campuses.
            </p> -->
			<img class="main-img" src="img/019-workspace.svg" alt="" style="max-height: 50vh; margin: 15px 20px;">

		</div>
	</section>
	<section class="whyDSC bg-grey">
		<div class="row container" style="width:90%; padding-top: 30px;margin-bottom:0px;">
			<div class="col s12 l6">
				<p class="subtopic" style="">Why DSC? </p>
				<p style='font-size:1.15em;'>A Developer Students Club is a Google recognized student body at a college
					which directly reports
					to Google for their activities and is supported by the tech giant. A DSC conducts workshops,
					seminars and other fun activities which help the students connect with Google.</p>
			</div>
			<div class="col s12 l6 floater-group load-hidden">

				<!-- <img src="img/chip.svg" alt="AI Chip" class='floater-icon'> -->
				<div class="row">
					<div class="col s12 l4">
						<div class="floater card floating-cards center-align">
							<?php echo file_get_contents("img/web-programming.svg"); ?>
							<br>
							Web Development
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<!-- <img src="img/chip.svg" alt="AI Chip" class='floater-icon'> -->
							<?php echo file_get_contents("img/chip.svg"); ?>
							<br>


							Artificial Intelligence
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<?php echo file_get_contents("img/smartphone.svg"); ?>
							<br>


							<!-- <img src="img/smartphone.svg" alt="AI Chip" class='floater-icon'> -->
							Mobile Applications
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<!-- <img src="img/coding.svg" alt="AI Chip" class='floater-icon'> -->
							<?php echo file_get_contents("img/coding.svg"); ?>
							<br>


							Competitve Coding
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">

							<!-- <img src="img/computer.svg" alt="AI Chip" class='floater-icon'>Cloud Computing -->
							<?php echo file_get_contents("img/computer.svg"); ?>
							<br>

							Cloud Computing
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<!-- <img src="img/ui.svg" alt="AI Chip" class='floater-icon'> -->
							<?php echo file_get_contents("img/ui.svg"); ?>
							<br>


							UI/UX Design
						</div>

					</div>
				</div>
			</div>

		</div>


		<!-- <p class="subtopic">What is DSC ?</p> -->
	</section>
	<!-- events start -->
	<section class="bg-white" style='background-color: #fafafa;'>
		<!-- <div class="col s12 container" style="width:90%"> -->
		<div class="row container" style="width: 90%;">
			<div class="col s6 m6">
				<p class="subtopic">Events </p>
			</div>
			<div class="col s6 m6">
				<p class="right" style="margin-top:6%;"><a href="events.php" class="grey-text text-darken-1">All
						Events</a></p>
			</div>
		</div>

		<div class="main-carousel" data-flickity='{ "wrapAround":true, "autoPlay":3000}'>
			<div class="carousel-cell"><img class="responsive-img" src="img/cloud-study.jpg"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_8036-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_7838-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_0363-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_7861-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_0326-min.JPG"></div>
		</div>

		<div class="row container" style="width:90%;margin-top:50px !important;">
			<a href='https://forms.gle/rGKsn4HCKBKQT5Ge8' target="_blank">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable ">
						<div class="card-image">
							<img src="img/cloud-study.jpg">
							<span class="card-title"><small>17<sup>th</sup> Aug 2019</small><br>Google Cloud Study
								Jam
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large" href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20190817T053000Z%2F20190817T113000Z&text=Cloud%20Study%20Jam&location=Room%20107%2C%20207%20and%20Computer%20Centre&details=Cloud%20Study%20Jam%20organized%20by%20Developer%20Student%20club%2C%20Indian%20Institute%20of%20Technology%2C%20Bhilai" rel="noreferrer" target="_blank"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Cloud Study Jam under Google Cloud Fest in IIT Bhilai Academic Block. Registrations
								Open
								for students of
								all Raipur colleges
								till XX-Aug
							</p>
						</div>
						<div class="card-action">
							<a href='https://forms.gle/rGKsn4HCKBKQT5Ge8' target="_blank">Join Now</a>
						</div>
					</div>
				</div>
			</a>
			<a href="event_Basics.php">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable">
						<div class="card-image">
							<img src="img/IMG_0495-min.JPG">
							<span class="card-title"><small>28<sup>th</sup> July 2019</small><br>Introduction to
								progrmaming basics for Freshers
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Half-day workshop for Introduction to Programming Basics through Python for Freshers
								of
								IIT Bhilai.</p>
						</div>
						<div class="card-action">
							<a href="event_Basics.php">Know More</a>
						</div>
					</div>
				</div>
			</a>
			<a href="event_ML_WS1.php">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable ">
						<div class="card-image">
							<img src="./img/ML_WS1-min.JPG">
							<span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Introduction to
								Machine Learning with Python
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
								projects by Core Members.</p>
						</div>
						<div class="card-action">
							<a href="event_ML_WS1.php">Know More</a>
						</div>
					</div>
			</a>
		</div>
		<!-- </div> -->
	</section>

	<section class="FAQ bg-grey" style='padding-bottom:20px;'>
		<div class="row container" style="width: 90%;">
			<div class="col s6 m6">
				<p class="subtopic">FAQ </p>
			</div>
			<!-- <div class="col s6 m6">
                <p class="right" style="margin-top:6%;"><a href="events.php" class="grey-text text-darken-1">All
                        Events</a></p>
            </div> -->
		</div>

		<div class="container">
			<ul class="collapsible">
				<li class="active">
					<div class="collapsible-header">What is DSC ?</div>
					<div class="collapsible-body"><span>Developer Students’ Club is a Google
							Developers program for
							university students, designed to help them build their development skills in various
							domains. It is an officially recognized Students’ Club.</span></div>
				</li>
				<li>
					<div class="collapsible-header">What do we do ?</div>
					<div class="collapsible-body"><span>Developer Students Club is a Google recognized student
							body at IIT Bhilai which directly reports to Google Developers for their activities and
							is
							supported by the tech giant. DSC-IIT Bh. conducts workshops, seminars and other fun
							activities which help the students connect with Google.
							And we give Google interview
							referrals too!</span></div>
				</li>
				<li>
					<div class="collapsible-header">How can I be a Member ?</div>
					<div class="collapsible-body"><span>Being a member is as easy as registering in our website and
							its completely free of
							cost.</span></div>
				</li>
				<li>
					<div class="collapsible-header">How can I be a Core Member ?</div>
					<div class="collapsible-body"><span>Show your skill and prove yourself to be the </span></div>
				</li>
			</ul>
		</div>
	</section>
	<!-- events end -->


	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.collapsible');
			var instances = M.Collapsible.init(elems);
		});
	</script>

	<script>
		const selectorsToUse = [
			['.floater-group', 150],
			['.FAQ', 150],
			// ['.c', 250],
			// ['.floater-group',350],
		]
		selectorsToUse.forEach((tuple) => {
			const item = tuple[0],
				del = tuple[1];
			ScrollReveal().reveal(item, {
				delay: del
			})
		});
	</script>
</body>
<?php require 'footer.php'; ?>


</html>
