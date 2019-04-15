<html>
<head>
  <meta charset="UTF-8">
  <title>
    Developer Student Club - IIT Bhilai
  </title>

</head>

<body>
<?php require 'header.php'; ?>
<section id="top" class="blue" style="height:100%;">
<div class="center" style="padding-top:4%;">
    <h4 class="login-form-text white-text" style="font-family: 'Arvo', serif; font-size:190%;margin-top:1%;margin-bottom:0%;">Contact Us</h4>
</div>
<div class="row" style="width:auto; max-width:40%; align:center; margin-top:60px; margin-bottom:100px">
<div class="col s12">
<div class="card-panel white z-depth-1">
  <form action="https://mail.google.com/mail?view=cm&tf=0&to=saksham291@gmail.com" method="get" enctype="text/plain">
    <div class="row">
      <div class="container">
        <div class="row">
        <div class="input-field col s8 offset-s2">
        <input id="su" type="text" name="su">
        <label for="su">Subject</label>
        </div>
      </div>
        <div class="row">
          <div class="input-field col s8 offset-s2">
            <input id="textarea1" name="body" type="text" class="materialize-textarea">
          <label for="textarea1">Message</label>
          </div>
        </div>
      <br>
<input type = "hidden" name = "view" value = "cm">
<input type = "hidden" name = "tf" value = "0">
        <div class="row center">
          <button class="btn waves-effect waves-light" style="background-color:#db3236;" type="submit" name="to" value="sakshamb@iitbhilai.ac.in">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</div>

</section>
</body>
<?php require 'footer.php'; ?>

</html>
