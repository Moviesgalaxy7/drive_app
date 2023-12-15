<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?> - MG drive</title>
	<link rel="stylesheet" type="text/css" href="<?= CSS_PATH . 'semantic.min.css'; ?>">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="<?= JS_PATH . 'semantic.min.js'; ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= CSS_PATH . 'style.css'; ?>">
</head>
<body>
	<div class="ui fixed inverted segment mgnav ">
		<div class="ui inverted secondary menu ">
			<a class="item" href="/"><i class="google drive icon xxlarge"></i></a>
			<div class="right menu large">
				<a href="/" class="item">Home</a>
				<a href="about-us" class="item">About us</a>
				<a class="item"><i class="sign-in icon"></i></a>
			</div>
		</div>
	</div>
	<div class="ui container">