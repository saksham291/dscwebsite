<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
<!-- <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
<!-- <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
<!-- <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<!-- icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- jQuery Library -->
<!-- <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script> -->
<!-- CORE CSS-->
<link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">

<link rel="icon" type="image/ico" href="img/dsc_logo.png">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Custome CSS-->
<link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

<!-- navbar -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper white">
            <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only left"><i class="material-icons">menu</i></a>

            <a href="index.php" class="brand-logo">
                <img src="img/logo_small.png" alt="">
            </a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php $curr = basename($_SERVER['PHP_SELF']); ?>
                <li><a href="index.php" class="grey-text text-darken-1 active">Home</a></li>
                <li><a href="events.php" class="grey-text text-darken-1">Events</a></li>
                <li><a href="projects.php" class="grey-text text-darken-1">Projects</a></li>
                <li><a href="aboutus.php" class="grey-text text-darken-1">About us</a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- Sidebar -->
<ul class="sidenav hide-on-large-only" id="slide-out">
    <li><a href="index.php" class="waves-effect">Home</a></li>
    <li><a href="events.php" class="waves-effect">Events</a></li>
    <li><a href="projects.php" class="waves-effect">Projects</a></li>
    <li><a href="aboutus.php" class="waves-effect">About us</a></li>
</ul>