<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
  $HTML = str_replace('{NAVBAR}', get_navbar(), $HTML);
  $MAIN = '<div id="box"><p class="lg">PORTFOLIO</p><br>WE DESIGN AND BUILD YOUR SITE THE WAY YOU WANT IT.
 WE PROVIDE:
  <li>MOBILE FRIENDLY DESIGNS</li>
  <li>SEARCH ENGINE OPIMIZATION</li>
  <li>GRAPHIC DESIGN</li>
  <li>WEB HOSTING</li>
  <li>BLOGS</li>
  <li>SINGLE PAGE SITES</li>
  <li>INFORMATIONAL WEBSITES</li>
  <li>AND MORE!</li>
  <BR>
  HAVE QUESTIONS OR WANT TO GET STARTED? <a href="/contact.php">SEND US AN EMAIL</a>
  </div>';
  $HTML = str_replace('{MAIN}', $MAIN, $HTML);
}
$HTML = str_replace('{RND}', rand(), $HTML);
echo $HTML;


?>