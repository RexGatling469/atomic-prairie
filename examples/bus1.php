<?php
include 'functions.php';

$dict = array(
    "bus" => array(
        "BANNER" => "Your Business",
        "NAVBAR" => array("Home", "About Us", "Our Projects", "Contact Us"),
        "BODYTOP" => "<img src='Proc.png?v={RND}' alt='Main Picture!' /><div id='bodytopsub'><p class='lgheader'>Let Us Work For You.</p><br><p class='subheader'>A professional, clean, modern look.</p></div>",
        "BODYBOT" => "<p class='header'>Welcome to Your Site!</p><p class='subheader'>Your Products, Projects, and Description Would Be Presented Here.</p><div><div id='botbox'><p>Problem Solving</p><br><img src='planning.jpeg' alt='fist-bump' /></div><div id='botbox'><p>Technology Driven</p><br><img src='technology.jpeg' alt='tech'/></div><div id='botbox'><p>Success Oriented</p><br><img src='fist-bump.jpeg' alt='fist-bump' /></div></div>",
        "BOTTOM" => "Copyright Stuff",
        ),
    "bus_mob" => array(
        "BANNER" => "<p>Your Business</p><button class='w3-bar-item w3-button w3-xlarge w3-hover-theme' onclick='openSidebar()'>&#9776;</button>",
        "NAVBAR" => array("Home", "About Us", "Our Projects", "Contact Us"),
        "BODYTOP" => "
    <div class='w3-content w3-display-container' style='max-width:800px'>
        <img class='mySlides w3-animate-right' src='planning.jpeg' style='width:100%'>
        <img class='mySlides w3-animate-right' src='technology.jpeg' style='width:100%'>
        <img class='mySlides w3-animate-right' src='fist-bump.jpeg' style='width:100%'>
        <div class='w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle' style='width:100%'>

            <span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(1)'></span>
            <span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(2)'></span>
            <span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv(3)'></span>
        </div>
    </div>
<div id='spacer'>
    <div id='bodytopbox'><a><p>Problem Solving</p></a></div>
    <div id='bodytopbox'><a><p>Technology Driven</p></a></div>
    <div id='bodytopbox'><a><p>Success Oriented</p></a></div>
</div>",
        "BODYBOT" => "",
        ),
    );


if(is_mobile()){
    $template = file_get_contents('bus_mob.html');
    foreach($dict["bus_mob"] as $key => $value){
        if($key == "NAVBAR"){
            $banner = "<ul>";
            foreach($value as $subvalue){
                $banner .= "<li><a href='#'>".$subvalue."</a></li>";
            }
            $banner .="<input type=\"text\" name=\"search\" placeholder=\"Search..\"></ul>";
            $template = str_replace('{'.$key.'}', $banner , $template);
        }
        else{
            $template = str_replace('{'.$key.'}', $value , $template);
        }
    }
}
else{
    $template = file_get_contents('bus.html');
    foreach($dict["bus"] as $key => $value){
        if($key == "NAVBAR"){
            $banner = "<ul>";
            foreach($value as $subvalue){
                $banner .= "<li><a href='#'>".$subvalue."</a></li>";
            }
            $banner .="<input type=\"text\" name=\"search\" placeholder=\"Search..\"></ul>";
            $template = str_replace('{'.$key.'}', $banner , $template);
        }
        else{
            $template = str_replace('{'.$key.'}', $value , $template);
        }
    }
}

$HTML = str_replace('{RND}', $rnd, $HTML);
echo $HTML;




?>