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
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Perora Petshop</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icon -->
        <link rel="icon" type="image/png" href="member/images/icons/favicon.ico"/>
		<!-- animate css -->
		<link rel="stylesheet" href="index/css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="index/css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="index/css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="index/css/templatemo-style.css">
        <link rel="stylesheet" href="slideshow.css">

	</head>
	<body>
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Perora</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="index.php">Home</a></li>
						<li><a href="get_member.php">Daftar Member</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">PERORA PETSHOP</h1>
							<p class="tm-white">Kepedulian anda membuat peliharaan anda lebih sehat dan bahagia!</a></p>
							<!-- <img src="index/images/software-img.png" class="img-responsive" alt="home img"> -->
                            <!-- slideshow -->
                            <div class="slideshow-container" style="width:500px;height:400px">
                                <?php
                                echo "
                                    <div class='mySlides fade'>
                                        <img src='$result[0]' style='max-width:500px;max-height:400px'> 
                                    </div>
                                    <div class='mySlides fade'>
                                        <img src='$result[1]' style='max-width:500px;max-height:400px'> 
                                    </div>
                                    <div class='mySlides fade'>
                                        <img src='$result[2]' style='max-width:500px;max-height:400px'> 
                                    </div>
                                    "
                                ?>
                            </div>
                            <br>
                            <script type="text/javascript" src="slideshow.js"></script>
                            <!-- end slideshow -->
                        </div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © Perora Petshop</p>
				</div>
			</div>
		</footer>
		<!-- end footer -->
        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>