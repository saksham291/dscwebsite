<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Developer Student Club - IIT Bhilai
    </title>
</head>

<body>
    <?php require 'header.php'; ?>

    <main>
        <div class="container">
            <h3 class="arvo">Inauguration Programme - DSC IIT Bhilai</h3>
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red waves-effect waves-light" target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&text=Inauguration - DSC IIT Bhilai&dates=20190422T063000Z%2F20190422T073000Z&location=Room 207&ctz=Asia/Kolkata" rel="noreferrer">
                    <i class="large material-icons">event</i>
                </a>
            </div>
        </div>
    </main>

    <?php require 'footer.php'; ?>
    <script>
        //slider
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems);
        });
    </script>
</body>

</html>