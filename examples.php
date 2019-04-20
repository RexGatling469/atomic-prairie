<?php
include 'functions.php';

if(is_mobile()){

} else {
  $HTML = file_get_contents('main_temp.html');
  $HTML = str_replace('{NAVBAR}', get_navbar(), $HTML);
  $MAIN = '<div id="box">
    <div class="w3-content w3-display-container">
      <a href="/examples/bus1.php" class="slide" style="width:100%;margin:2% auto" ><img  class="slide" src="/images/bus1.png" title="Business Website #1" alt="Business Website #1" style="width:100%;margin:0" /></a>
      <a href="/examples/bus2.php" class="slide" style="width:100%;margin:2% auto" ><img class="slide" src="/images/bus1.png" title="Business Website #2" alt="Business Website #2" style="width:100%;margin:0" /></a>
      <!--
      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      </div> -->
      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slide");
/*        var dots = document.getElementsByClassName("demo"); */
        if (n > x.length){
            slideIndex = 1;
        }
        if (n < 1){
            slideIndex = x.length;
        }
        for (i = 0; i < x.length; i+=2) {
            x[i].style.display = "none";
            x[i+1].style.display = "none";
        }
/*
        for (i=0;i<dots.length;i+=2){
            dots[i].className = "w3-badge demo w3-border w3-transparent w3-hover-white";
        }
*/
        x[slideIndex-1].style.display = "block";
        x[slideIndex].style.display = "block";
/*        dots[slideIndex-1].className = "w3-badge demo w3-border w3-white"; */
        slideIndex+=2;
    }
    </script>
  </div>';
  $HTML = str_replace('{MAIN}', $MAIN, $HTML);
}
$rnd = rand().'">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .slide{display:none;}
    </style>';
$HTML = str_replace('{RND}">', $rnd, $HTML);
echo $HTML;


?>