<!doctype html>
<html lang="en">
<head>
	<base href="<?= base_url() ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= PATH ?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
		  integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= PATH ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= PATH ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?= PATH ?>/assets/css/creative.css">
    <link rel="stylesheet" href="<?= PATH ?>/assets/css/official.css">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= PATH ?>/assets/img/favicon32.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4VQD6GTMXH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4VQD6GTMXH');
    </script>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500&display=swap" rel="stylesheet">
	<?= $this->getMeta() ?>
</head>
<?php

	echo $this->content;
