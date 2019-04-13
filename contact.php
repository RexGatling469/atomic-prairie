<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
  $HTML = str_replace('{NAVBAR}', get_navbar(), $HTML);
  $MAIN = '
  <script>
  function get_action(form){
    var v = grecaptcha.getResponse();
    if(v.length == 0) {
        document.getElementById("captcha").innerHTML="You can\'t leave Captcha Code empty";
        return false;
    } else{
      document.getElementById("captcha").innerHTML="Captcha completed";
      return true;
    }
  }
  </script>
  <form id="contact"><p class="lg">CONTACT US FOR A QUOTE</p>
  <input type="text" name="name" placeholder="Name" required>
  <br>
  <input type="email" name="email" placeholder="Email" required>
  <br>
  <input type="text" name="site" placeholder="Website Address" required>
  <br>
  <input type="text" name="project" placeholder="Project Type" class="short" required>
  <input type="text" name="budget" placeholder="Budget" class="short" required>
  <br>
  <textarea name="details" placeholder="Tell us more..." cols="7"></textarea>
  <br>
  <p class="md">Website Launch Date:&nbsp;&nbsp;</p><input type="date" name="date" class="short2" required>
  <br>
  <div class="g-recaptcha" id="rcaptcha"  data-sitekey="6LcbEJ4UAAAAAAHBHrf0WaoV-LCld4Pcc580qJXx"></div>
  <span id="captcha" style="color:red" /></span>
  <input type="submit" name="submit" value="Send Email">
  </form>';
  $HTML = str_replace('{MAIN}', $MAIN, $HTML);
}
$rnd = rand().'">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
$HTML = str_replace('{RND}">', $rnd, $HTML);
echo $HTML;


?>