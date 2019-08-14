<div class="preloader">
    <div class="loading">
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
        <div class="loading-bar"></div>
    </div>
</div>
<style>
.preloader {
    background-color: white;
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: 9999;
}

.loading {
    position: absolute;
    bottom: 50%;
    left: calc(50% - 21px);
}

.loading-bar {
    display: inline-block;
    width: 7px;
    height: 7px;
    border-radius: 4px;
    animation: loading 1s ease-in-out infinite;
}

.loading-bar:nth-child(1) {
    background-color: #3498db;
    animation-delay: 0;
}

.loading-bar:nth-child(2) {
    background-color: #c0392b;
    animation-delay: 0.1s;
}

.loading-bar:nth-child(3) {
    background-color: #f1c40f;
    animation-delay: 0.2s;
}

.loading-bar:nth-child(4) {
    background-color: #27ae60;
    animation-delay: 0.3s;
}

@keyframes loading {
    0% {
        height: 7px;
    }

    20% {
        height: 32px;
    }

    40% {
        height: 7px;
    }
}
</style>

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<!-- icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Custome CSS-->
<link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

<!-- navbar -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper white">
            <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only left"><i
                    class="material-icons">menu</i></a>

            <a href="index.php" class="brand-logo">
                <img src="img/logo_small.png" alt="">
            </a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php $curr = basename($_SERVER['PHP_SELF']); ?>
                <li>
                    <a href="index.php" class="grey-text text-darken-1 active">Home</a>
                </li>
                <li><a href="index.php#events" class="grey-text text-darken-1">Events</a></li>
                <li><a href="index.php#faq" class="grey-text text-darken-1">FAQ</a></li>
                <!-- <li><a href="projects.php" class="grey-text text-darken-1">Projects</a></li> -->
                <li><a href="aboutus.php" class="grey-text text-darken-1">About us</a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- Sidebar -->
<ul class="sidenav hide-on-large-only" id="slide-out">
    <li><a href="index.php" class="waves-effect">Home</a></li>
    <li><a href="index.php#events" class="waves-effect">Events</a></li>
    <li><a href="index.php#faq" class="waves-effect">FAQ</a></li>
    <li><a href="aboutus.php" class="waves-effect">About us</a></li>
</ul>
