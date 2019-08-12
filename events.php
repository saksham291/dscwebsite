<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Developer Student Club - IIT Bhilai
	</title>
	<link rel="icon" type="image/png" href="favicon.png">
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
	<div class="col s12 container" style="width:90%;margin-bottom:8%;">
		<!-- <div class="col s12 container" style=""> -->
		<p class="login-form-text" style="font-family: 'Arvo', serif; font-size:20px;margin-top:4%;">Events</p>
		<div class="row container" style="width:90%;margin-top:50px !important;">
			<a href="event_CSJ.php">
				<div class="col s12 m6 l4 ">
					<div class="card medium hoverable">
						<div class="card-image">
							<img src="img/cloud-study.jpg">
							<span class="card-title"><small>17<sup>th</sup> Aug 2019</small><br>
								Google Cloud Study Jam
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large" href="http://www.google.com/calendar/event?action=TEMPLATE&dates=20190817T053000Z%2F20190817T113000Z&text=Cloud%20Study%20Jam&location=Room%20107%2C%20207%20and%20Computer%20Centre&details=Cloud%20Study%20Jam%20organized%20by%20Developer%20Student%20club%2C%20Indian%20Institute%20of%20Technology%2C%20Bhilai" rel="noreferrer" target="_blank"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
								projects by students.</p>
						</div>
						<div class="card-action">
							<a href="event_CSJ">Know More</a>
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
							<p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
								projects by students.</p>
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
							<span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Introduction to Machine Learning with Python
							</span>
						</div>
						<a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i class="material-icons">event</i></a>
						<div class="card-content">
							<p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
								projects by students.</p>
						</div>
						<div class="card-action">
							<a href="event_ML_WS1.php">Know More</a>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</body>
<?php require 'footer.php'; ?>

</html>
