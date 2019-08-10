<html>

<head>
  <meta charset="UTF-8">
  <title>
    Developer Student Club - IIT Bhilai
  </title>

</head>

<body>
  <?php require 'header.php'; ?>
  <div class="parallax-container">
    <!-- TODO: Replace with group photo -->
    <div class="parallax"><img src="img/parallax2.jpg"></div>
  </div>
  <section id="top" class="" style="min-height: 70vh;background-color:#f7f7f7;">
    <div class="center" style="padding-top:4%;">
      <h4 class="login-form-text" style="font-family: 'Arvo', serif; font-size:190%;margin-top:5%;margin-bottom:0%;">Contact Us</h4>
    </div>

    <div class="col s11 m6">

      <form action="https://mail.google.com/mail?view=cm&tf=0&to=saksham291@gmail.com" method="get" enctype="text/plain">
        <div class="container">
          <div class="row">
            <div class="input-field col s12 m8 offset-s0 offset-m2">
              <i class="material-icons prefix">subject</i>
              <input id="su" type="text" name="su">
              <label for="su">Subject</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m8 offset-s0 offset-m2">
              <i class="material-icons prefix">message</i>
              <textarea id="textarea1" class="materialize-textarea" name="body"></textarea>
              <label for="textarea1">Message</label>
            </div>
          </div>
          <br>
          <input type="hidden" name="view" value="cm">
          <input type="hidden" name="tf" value="0">
          <div class="row center">
            <button class="btn waves-effect waves-light" style="background-color:#db3236;" type="submit" name="to" value="sakshamb@iitbhilai.ac.in">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>

    </div>


  </section>
</body>
<?php require 'footer.php'; ?>
<script src="js/parallax.js"></script>

</html>
