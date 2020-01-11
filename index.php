<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="JtqlLjFb6XBqBorHDcVm6XJ0W65JzgRA7G_5jX_SuO8" />

	<title>
		Developer Student Club - IIT Bhilai
	</title>
	<link rel="stylesheet" type="text/css" href="css/custom_style.css">
	<link rel="stylesheet" href="css/custom/index.css">
	<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body>
	<section id="top"></section>
	<?php require 'header.php'; ?>
	<section id="top1" class="full-page bg-grey">
		<a name='home' href='#'></a>
		<div class="center" style="padding-top:4%; max-height: 100vh;">
			<h4 class="white-text main-text">
				<!-- "Hello World!!" We are<br> -->
				Developer Student Club<br>Powered by Google
				Developers</h4>
			<!-- <p class='white-text'>Google collaborates with university students who are passionate about growing
                developer communities and support them with starting student clubs on their campuses.
            </p> -->
			<img class="main-img" src="img/019-workspace.svg" alt="" style="max-height: 50vh; margin: 15px auto;">

		</div>
	</section>
	<section class="whyDSC bg-grey">
		<div class="row container" style="width:90%; padding-top: 30px;margin-bottom:0px;">
			<div class="col s12 l6">
				<p class="subtopic" style="">Why DSC? </p>
				<p style='font-size:1.15em;'>A Developer Students Club is a globally recognized student body
					which helps students to have the opportunity to not only learn development skills, but it also acts as
					a medium to apply them to real life problems by finding solutions, and then showcasing their work within their
					communities.By developing solutions for local businesses/organizations, the talented college students can now help
					the local community and have a hands-on experience for building real world applications.</p>
			</div>
			<div class="col s12 l6 floater-group">

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
							<?php echo file_get_contents("img/chip.svg"); ?>
							<br>
							Artificial Intelligence
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<?php echo file_get_contents("img/smartphone.svg"); ?>
							<br>
							App Development
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<?php echo file_get_contents("img/coding.svg"); ?>
							<br>
							Competitve Programming
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<?php echo file_get_contents("img/computer.svg"); ?>
							<br>
							Cloud Development
						</div>
					</div>
					<div class="col s12 l4">
						<div class="floater card floating-cards">
							<?php echo file_get_contents("img/ui.svg"); ?>
							<br>
							UI/UX Design
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>
	<!-- events start -->
	<section class="bg-white" style='background-color: #fafafa;'>
		<a name='events' href='#'></a>
		<!-- <div class="col s12 container" style="width:90%"> -->
		<div class="row container" style="width: 90%;">
			<div class="col s6 m6">
				<p class="subtopic">Events </p>
			</div>
			<!-- <div class="col s6 m6">
                <p class="right" style="margin-top:6%;"><a href="events.php" class="grey-text text-darken-1">All
                        Events</a></p>
            </div> -->
		</div>

		<div class="main-carousel" data-flickity='{ "wrapAround":true, "autoPlay":3000}'>
			<div class="carousel-cell"><img class="responsive-img" src="img/codingNinjas_Workshop.jpg"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/cloud-study.jpg"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_8036-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_7838-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_0363-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_7861-min.JPG"></div>
			<div class="carousel-cell"><img class="responsive-img" src="img/IMG_0326-min.JPG"></div>
		</div>

		<div class="row container" style="width:90%;margin-top:50px !important;">

			<a href='codingNinjas_Workshop.php'>
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable event-card">
						<div class="card-image">
							<img src="img/codingNinjas_Workshop.jpg">
							<span class="card-title overlay-txt"><small>18<sup>th</sup> Jan 2020</small><br> Workshop with Coding Ninjas (Competitive Programming + DS & Algo)
							</span>
						</div>

						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large" href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20200118T060000Z%2F20200118T120000Z&text=Coding%20Ninjas%20Workshop&location=B-107%2C%20Academic%20Building%2C%20IIT%20Bhilai&details=" rel="noreferrer" target="_blank"><i class="material-icons">event</i></a>

						<div class="card-content">


							<p>DSC IIT Bhilai is collaborating with Coding Ninjas to conduct a workshop on "Data Structures, Algorithms and Competitive Programming". For registrations and more details, click 'Know More'.
							</p>
						</div>
						<div class="card-action">
							<a href='codingNinjas_Workshop.php'>Know More</a>
						</div>
					</div>
				</div>
			</a>

			<a href='https://forms.gle/x93gvUD1MRo7RHmQA' target="_blank">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable event-card">
						<div class="card-image">
							<img src="img/cloud-study.jpg">
							<span class="card-title overlay-txt"><small>17<sup>th</sup> Aug 2019</small><br>Cloud Study
								Jam
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large" href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20190817T053000Z%2F20190817T120000Z&text=Cloud%20Study%20Jam&location=Room%20107%2C%20207%20and%20Computer%20Centre&details=Cloud%20Study%20Jam%20organized%20by%20Developer%20Student%20club%2C%20Indian%20Institute%20of%20Technology%2C%20Bhilai" rel="noreferrer" target="_blank"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Cloud Study Jam under Google Cloud Fest in IIT Bhilai.
							</p>
						</div>
						<div class="card-action">
							<a href='#'>Know More</a>
						</div>
					</div>
				</div>
			</a>
			<a href="event_Basics.php">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable event-card">
						<div class="card-image">
							<img src="img/IMG_0495-min.JPG">
							<span class="card-title overlay-txt"><small>28<sup>th</sup> July
									2019</small><br>Fundamentals of Programming using Python
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Workshop for Fundamentals of programming through Python.</p>
						</div>
						<div class="card-action">
							<a href="event_Basics.php">Know More</a>
						</div>
					</div>
				</div>
			</a>
			<a href="event_ML_WS1.php">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable event-card">
						<div class="card-image">
							<img src="./img/ML_WS1-min.JPG">
							<span class="card-title overlay-txt"><small>21<sup>st</sup> April
									2019</small><br>Introduction to
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
	</section>
	<section class="FAQ bg-grey" style='padding-bottom:20px;'>
		<a name='faq' href='#'></a>

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
					<div class="collapsible-body"><span>Developer Student Clubs or DSC is a University Program
							kickstarted by Google Developers to train thousands of student developers globally and work
							with their communities to solve real-life problems. DSC IIT Bhilai was set-up primarily to
							ensure that we can bridge the divide between a student’s eagerness to learn and the
							technology evolving every day.
						</span></div>
				</li>
				<li>
					<div class="collapsible-header">What do we do ?</div>
					<div class="collapsible-body"><span> DSC IIT Bhilai conducts workshops, seminars and technical showcases for IIT Bhilai as well as other colleges in Raipur.
							In addition to workshops, DSC IIT Bhilai also provides an opportunity for students to apply their newly gained skills to develop solutions for local organizations and then provide visibility via showcases.
							From learning about new technologies with materials provided by Google Developers to
							attending talks, events, DevFests and connecting with developers around the world, DSC will
							help the students get it.
						</span></div>
				</li>
				<!-- <li>
                    <div class="collapsible-header">How can I be a Member ?</div>
                    <div class="collapsible-body"><span>Forms will be circulated on specific occasions.In case of
                            unawareness,interested students of IIT Bhilai can contact to the DSC core
                            Members for the same.</span></div>
                </li> -->
				<li>
					<div class="collapsible-header">What are the advantages of being a Member ?</div>
					<div class="collapsible-body"><span>Advantages of being a Member:
							<ol>
								<li>Core Members will select people for any projects from the Members of the club.
								</li>
								<li>Any information related to opportunities that we have, like some nominations for
									internships, will be rolled out to the members.</li>
								<li>Active Members will be preferred for the selection as Core Members.</li>
								<li>Members get certificates and recognition if they do handle responsibilities during
									the
									events, workshops or projects.</li>
							</ol> </span></div>
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

		const selectorsToUse = [
			// ['.floater-group', 150],
			// ['.FAQ', 150],
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

		// var instance = M.Sidenav.getInstance(document.querySelectorAll('.sidenav')[0]);
		// console.log(instance);
	</script>
</body>
<?php require 'footer.php'; ?>


</html>
