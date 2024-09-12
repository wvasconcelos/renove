<!doctype html>
<html lang="en" data-bs-theme="auto">
	<head>
		<script src="js/color-modes.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Renove Wellness Website">
		<meta name="author" content="Will Davies Vasconcelos">
		<meta name="generator" content="vim">
		<title>Renove Wellness</title>
		<link rel="canonical" href="https://www.renovewellness.com/">
		<link rel="stylesheet" href="css/css.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="manifest" href="manifest.json">
		<!-- Favicons -->
		<link rel="apple-touch-icon" href="ico/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="ico/android-chrome-192x192.png" sizes="192x192" type="image/png">
		<link rel="icon" href="ico/favicon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="ico/favicon-16x16.png" sizes="16x16" type="image/png">
		<link rel="manifest" href="ico/manifest.json">
		<link rel="mask-icon" href="ico/safari-pinned-tab.svg" color="#712cf9">
		<link rel="icon" href="ico/favicon.ico">
		<meta name="theme-color" content="#5AA6A9">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include 'includes/components/nav-header.php'; ?>
		<div class="row content">
		<?php
			$page = ( isset($_GET['page'])?$_GET['page']:'');
			if( $page == '' ) include 'includes/components/home.php';
			else include 'includes/pages/' . $page . '.php';
		?>
		</div>
		<?php include 'includes/components/nav-footer.php'; ?>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>
