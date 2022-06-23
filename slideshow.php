<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://shibe.online/api/cats?count=3'
);

$body_json = $response->getBody();
$result = json_decode($body_json);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Slideshow Images</title>
        <link rel="stylesheet" href="slideshow.css">
    </head>
    <body>
        <div class="slideshow-container">
            <?php
            echo "
                <div class='mySlides fade'>
                    <img src='$result[0]' style='width:100%'> 
                </div>
                <div class='mySlides fade'>
                    <img src='$result[1]' style='width:100%'> 
                </div>
                <div class='mySlides fade'>
                    <img src='$result[2]' style='width:100%'> 
                </div>
                "
            ?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script type="text/javascript" src="slideshow.js"></script>  
    </body>
</html>