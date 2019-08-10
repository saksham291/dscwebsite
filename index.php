<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Developer Student Club - IIT Bhilai
    </title>
    <link rel="stylesheet" type="text/css" href="css/custom_style.css">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active-slide {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {
            font-size: 11px
        }
    }
    </style>
</head>

<body>
    <section id="top"></section>
    <?php require 'header.php'; ?>
    <section id="top1" class="blue full-page">
        <div class="center container" style="padding-top:4%;">
            <h4 class="white-text main-text"><br>Developer Student Club<br>Powered by Google Developers</h4>
            <!-- <p class='white-text'>Google collaborates with university students who are passionate about growing
                developer communities and support them with starting student clubs on their campuses.
            </p> -->
            <img class="main-img" src="img/019-workspace.svg" alt="" style="max-height: 50vh; margin: 15px;">

        </div>
    </section>
    <section class="whyDSC bg-grey">
        <div class="col s12 container" style="width:90%;">
            <div class="row">
                <div class="col s6 m6">
                    <p class="subtopic">What is DSC ?</p>
                </div>
            </div>


            <div class="row">
                <div class="col s12 m6 l5">
                    <p>A Developer Students Club is a Google recognized student body at a college which directly reports
                        to Google for their activities and is supported by the tech giant. A DSC conducts workshops,
                        seminars and other fun activities which help the students connect with Google.</p>
                </div>
                <div class="col s12 m4 l6 floater-group offset-l1">

                    <!-- <img src="img/chip.svg" alt="AI Chip" class='floater-icon'> -->
                    <div class="row">
                        <div class="floater card col s12 m6 l4 hoverable">

                            <?php echo file_get_contents("img/web-programming.svg"); ?>

                            <!-- <img src="img/web-programming.svg" alt="AI Chip" class='floater-icon'> -->
                            Web Development
                        </div>
                        <div class="floater card col s12 m6 l4 hoverable">
                            <!-- <img src="img/chip.svg" alt="AI Chip" class='floater-icon'> -->
                            <?php echo file_get_contents("img/chip.svg"); ?>

                            Artificial Intelligence
                        </div>
                        <div class="floater card col s12 m6 l4 hoverable">
                            <?php echo file_get_contents("img/smartphone.svg"); ?>

                            <!-- <img src="img/smartphone.svg" alt="AI Chip" class='floater-icon'> -->
                            Mobile Applications
                        </div>
                    </div>
                    <div class="row">
                        <div class="floater card col s12 m6 l4 hoverable">
                            <!-- <img src="img/coding.svg" alt="AI Chip" class='floater-icon'> -->
                            <?php echo file_get_contents("img/coding.svg"); ?>

                            Competitve Coding
                        </div>
                        <div class="floater card col s8 m6 l4 hoverable">

                            <!-- <img src="img/computer.svg" alt="AI Chip" class='floater-icon'>Cloud Computing -->
                            <?php echo file_get_contents("img/computer.svg"); ?>
                            Cloud Computing
                        </div>
                        <div class="floater card col s12 m6 l4 hoverable">
                            <!-- <img src="img/ui.svg" alt="AI Chip" class='floater-icon'> -->
                            <?php echo file_get_contents("img/ui.svg"); ?>

                            UI/UX Design

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- <p class="subtopic">What is DSC ?</p> -->
    </section>
    <!-- events start -->
    <section class="bg-white ">
        <!-- <div class="col s12 container" style="width:90%"> -->
        <div class="row">
            <div class="col s6 m6">
                <p class="subtopic" style="">Events </p>
            </div>
            <div class="col s6 m6">
                <p class="right" style="margin-top:6%;"><a href="events.php" class="grey-text text-darken-1">All
                        Events</a></p>
            </div>
        </div>

        <!-- <script>
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        </script> -->


        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>


        <!-- <div class="carousel carousel-slider center">
            <div class="carousel-fixed-item center">
                <a class="btn waves-effect white grey-text darken-text-2">button</a>
            </div>
            <div class="carousel-item red white-text" href="#one!">

            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <h2>Second Panel</h2>
                <p class="white-text">This is your second panel</p>
            </div>
            <div class="carousel-item green white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
            </div>
        </div> -->

        <!-- <div class="carousel container">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        </div> -->



        <div class="row container" style="width:90%;">



            <a href="event_CSJ.php">
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="background.png">
                            <span class="card-title"><small>17<sup>th</sup> Aug 2019</small><br>Google Cloud Study
                                Jam
                            </span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i
                                    class="material-icons">event</i></a>
                        </div>
                        <div class="card-content">
                            <p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
                                projects by students.</p>
                        </div>
                        <!-- <div class="card-action">
                                <a href="#">Know More</a>
                            </div> -->
                    </div>
                </div>
            </a>
            <a href="event_Basics.php">
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="background.png">
                            <span class="card-title"><small>28<sup>th</sup> July 2019</small><br>Introduction to
                                progrmaming basics for Freshers
                            </span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i
                                    class="material-icons">event</i></a>
                        </div>
                        <div class="card-content">
                            <p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
                                projects by students.</p>
                        </div>
                        <!-- <div class="card-action">
                                <a href="#">Know More</a>
                            </div> -->
                    </div>
                </div>
            </a>
            <a href="event_ML_WS1.php">
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="background.png">
                            <span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Gentle
                                introduction to Machine Learning through Python
                            </span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red btn-large"><i
                                    class="material-icons">event</i></a>
                        </div>
                        <div class="card-content">
                            <p>Half-day workshop on Python and basics of Machine Learning followed by showcase of ML
                                projects by students.</p>
                        </div>
                        <!-- <div class="card-action">
                                <a href="#">Know More</a>
                            </div> -->
                    </div>
                </div>
            </a>
            <a href="event_inauguration.php">
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="background.png">
                            <span class="card-title"><small>21<sup>st</sup> April 2019</small><br>Inauguration
                                Programme
                                - DSC IIT Bhilai</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red btn-large" target="_blank"
                                href="https://calendar.google.com/event?action=TEMPLATE&text=Inauguration - DSC IIT Bhilai&dates=20190422T063000Z%2F20190422T073000Z&location=Room 207&ctz=Asia/Kolkata"><i
                                    class="material-icons">event</i></a>
                        </div>
                        <div class="card-content">
                            <p>Inauguration of the Developer Students Club at Indian Institute of Technology
                                Bhilai.<br><br></p>
                        </div>

                    </div>
                </div>
            </a>


        </div>
        <!-- </div> -->
    </section>
    <!-- events end -->


    <!-- projects start -->
    <!-- <section id="project"  class="bg-white">
    <div class="col s12 container" style="width:90%;">
      <div class="row">
        <div class="col s6 m6">
          <p class="subtopic">Projects </p>
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
  </section> -->
    <!-- projects end -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, {
            fullWidth: true,
            indicators: true
        });
    });
    </script>
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active-slide", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active-slide";
        setTimeout(showSlides, 5 * 1000); // Change image every 2 seconds
    }
    </script>

</body>
<?php require 'footer.php'; ?>


</html>