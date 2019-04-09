<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
  $HTML = str_replace('{NAVBAR}', get_navbar(), $HTML);
  $MAIN = "THIS IS THE FEATURE PAGE.  FEATURE STUFF!";
  $HTML = str_replace('{MAIN}', $MAIN, $HTML);
}
$HTML = str_replace('{RND}', rand(), $HTML);
echo $HTML;


?>