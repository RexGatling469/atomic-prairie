<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
  $HTML = str_replace('{NAVBAR}', get_navbar(), $HTML);
  $MAIN = '<div id="box"><p class="lg">ATOMIC PRAIRIE</p> IS A CREATIVE STUDIO. WE BUILD WEBSITES FOR:
<br>
<br>
<li>ARTISTS</li>
<li>SMALL BUSINESSES</li>
<li>POLITICAL CAMPAIGNS</li>
<br>
AND ANYTHING IN BETWEEN. OUR SITES </div>';
  $HTML = str_replace('{MAIN}', $MAIN, $HTML);
}
$HTML = str_replace('{RND}', rand(), $HTML);
echo $HTML;

?>