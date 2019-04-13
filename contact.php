<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
  $HTML = str_replace('{NAVBAR}', get_navbar(), $HTML);
  $MAIN = '<form id="contact">CONTACT US FOR A QUOTE
  <br>
  <br>
  <input type="text" name="name" placeholder="Name">
  <br>
  <input type="email" name="email" placeholder="Email">
  <br>
  <input type="text" name="site" placeholder="Website Address">
  <br>
  <input type="text" name="project" placeholder="Project Type" class="short">
  <input type="text" name="budget" placeholder="Budget" class="short">
  <br>
  <textarea placeholder="Tell us more..."></textarea>
  <br>
  <input type="date" name="date" placeholder="Launch Date" class="short">
  <br>
  <input type="submit" value="Send Email">
  </form>';
  $HTML = str_replace('{MAIN}', $MAIN, $HTML);
}
$HTML = str_replace('{RND}', rand(), $HTML);
echo $HTML;


?>