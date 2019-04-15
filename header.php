<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
<link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
  media="screen,projection">
<link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<!-- icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- jQuery Library -->
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link rel="icon" type="image/ico" href="dsc_logo.png">

<!-- Compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, options);
});
</script>
<!-- navbar -->
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper white">
      <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only left" style="margin:3.5%;"><i class="material-icons">menu</i></a>
      <a href="index.php#top" class="brand-logo grey-text text-darken-1" style="margin-top:0.7%;margin-left:1%;font-family: 'Arvo', serif;line-height:113%; font-size:120%"> <img src="new_logo.png" height="35%" alt=""> <br><p style="margin:0% 0% 0% 19%;">IIT Bhilai</p></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php $curr = basename($_SERVER['PHP_SELF']); ?>
        <li><a href="index.php#top" class="grey-text text-darken-1 active">Home</a></li>
        <li><a href="index.php#events" class="grey-text text-darken-1">Events</a></li>
        <li><a href="index.php#projects" class="grey-text text-darken-1">Projects</a></li>
        <li><a href="aboutus.php" class="grey-text text-darken-1">About us</a></li>
        <li><a href="contactus.php" class="grey-text text-darken-1">Contact us</a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- Sidebar -->
<ul class="sidenav hide-on-large-only" id="slide-out">
<li><a href="index.php" class="waves-effect">Home</a></li>
<li><a href="index.php#events" class="waves-effect">Events</a></li>
<li><a href="index.php#projects" class="waves-effect">Projects</a></li>
<li><a href="aboutus.php" class="waves-effect">About us</a></li>
<li><a href="contactus.php" class="waves-effect">Contact us</a></li>
</ul>
