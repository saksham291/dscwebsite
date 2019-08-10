<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Developer Student Club - IIT Bhilai
	</title>
	<style media="screen">
		.video-container {
			position: relative;
			padding-bottom: 56.25%;
			padding-top: 30px;
			height: 0;
			overflow: hidden;
		}

		.video-container iframe,
		.video-container object,
		.video-container embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
	</style>
</head>

<body>
	<?php require 'header.php'; ?>
	<!-- events start -->
	<div class="col s12 container" style="width:90%;margin-bottom:8%;background-color:#f7f7f7;">
		<!-- <div class="col s12 container" style=""> -->
		<p class="login-form-text" style="font-family: 'Arvo', serif; font-size:20px;margin-top:4%;">Events</p>
		<div class="row">
			<div class="col s12 m6 l4">
				<div class="card hoverable">
					<div class="card-image">
						<img src="background.png">
						<span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Inauguration Programme - DSC IIT Bhilai</span>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large" target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&text=Inauguration - DSC IIT Bhilai&dates=20190422T063000Z%2F20190422T073000Z&location=Room 207&ctz=Asia/Kolkata" rel="noreferrer"><i class="material-icons">event</i></a>
					</div>
					<div class="card-content">
						<p>Inauguration of the Developer Students Club at Indian Institute of Technology Bhilai.</p>
					</div>
					<div class="card-action">
						<a href="event_inauguration.php">Know more</a>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card hoverable">
					<div class="card-image">
						<img src="background.png">
						<span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Concepts of Python and Basics of Machine Learning</span>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i class="material-icons">event</i></a>
					</div>
					<div class="card-content">
						<p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML projects by students.</p>
					</div>
					<div class="card-action">
						<a href="#">Know More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4>Inauguration Programme - DSC IIT Bhilai</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/islMT1Hgk1M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
		</div>
		<div class="slider" style="margin:10 10">
			<ul class="slides">
				<li>
					<img src="https://lorempixel.com/580/250/nature/1">
					<div class="caption center-align">
						<h6>Our Team</h6>
						<!-- <h5 class="light grey-text text-lighten-3"></h5> -->
					</div>
				</li>
			</ul>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-blue btn-flat">Close</a>
		</div>
	</div>

	<div id="modal2" class="modal" align="center">
		<div class="modal-content">

			<h4 class=" text-darken-1" style="margin-top:0.7%;margin-left:1%;font-family: 'Arvo', serif;line-height:113%; font-size:120%">Concepts of Python and Basics of Machine Learning</h4>
			<h5 class="text-darken-1">Follow the tutorials before coming :-</h5>
			<!-- <p>A bunch of text</p> -->
			<h5>Windows Users</h5>
			<div class="video-container"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/16fnjNWpGrU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<h5>Ubuntu Users</h5>
			<div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/islMT1Hgk1M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<h5>MAC Users</h5>
			<div class="video-container">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/5jyZb23xWeU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

		</div>

		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
	</div>



</body>
<?php require 'footer.php'; ?>

</html>