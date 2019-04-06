<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
}
echo $HTML;

?>
