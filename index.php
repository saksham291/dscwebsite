<html>

<head>
  <meta charset="UTF-8">
  <title>
    Developer Student Club - IIT Bhilai
  </title>
<link rel="stylesheet" type="text/css" href="css/custom_style.css">
</head>

<body>
  <section id="top"></section>
  <?php require 'header.php'; ?>
  <section id="top1" class="blue full-page">
    <div class="center" style="padding-top:4%;">
      <h4 class="white-text main-text"><small class="small-text">Indian Institute of Technology Bhilai</small><br>Developer Student Club<br>Powered by Google Developers</h4>
      <img class="main-img" src="019-workspace.svg" alt="">
    </div>
  </section>
  <section id="events"></section>
  <!-- events start -->
  <section style="background-color:#f7f7f7">
    <div class="col s12 container" style="width:90%">
      <div class="row">
        <div class="col s6 m6">
          <p class="login-form-text" style="font-family: 'Arvo', serif; font-size:20px;margin-top:6%;margin-bottom:0%;">Events </p>
        </div>
        <div class="col s6 m6">
          <p class="right" style="margin-top:6%;"><a href="events.php" class="grey-text text-darken-1">All Events</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m6 l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="background.png">
              <span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Inauguration Programme - DSC IIT Bhilai</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red btn-large" target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&text=Inauguration - DSC IIT Bhilai&dates=20190422T063000Z%2F20190422T073000Z&location=Room 207&ctz=Asia/Kolkata"><i class="material-icons">event</i></a>
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
  </section>
  <!-- events end -->

  <section id="projects"></section>
  <!-- projects start -->
  <section id="project" style="background-color:#ffffff;">
    <div class="col s12 container" style="padding-bottom:1%;padding-top:3%;width:90%">
      <div class="row">
        <div class="col s6 m6">
          <p class="login-form-text" style="font-family: 'Arvo', serif; font-size:20px;margin-top:6%;margin-bottom:0%;">Projects </p>
        </div>
        <div class="col s6 m6">
          <p class="right" style="margin-top:6%;"><a href="projects.php" class="grey-text text-darken-1">All Projects</a></p>
        </div>
      </div>
      <div class="row">

        <div class="col s12 m6 l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="background.png">
              <span class="card-title">Project 1</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6 l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="background.png">
              <span class="card-title">Project 2</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6 l4">
          <div class="card hoverable">
            <div class="card-image">
              <img src="background.png">
              <span class="card-title">Project 3</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- projects end -->
</body>
<?php require 'footer.php'; ?>


</html>
