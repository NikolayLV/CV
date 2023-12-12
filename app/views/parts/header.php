<?php

	use wfm\View;

	/** @var $this View */
?>
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
	<link rel="icon" type="image/png" sizes="32x32" href="<?= PATH ?>/assets/img/favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500&display=swap" rel="stylesheet">
	<?= $this->getMeta() ?>
</head>
<body>
<header>
	<div class="header_section">
		<div class="header_section_left">
            <img class="header_logo" src="<?php WWW ?>/assets/img/logo.png" alt="">
        </div>
		<div class="header_section_mid">
            <li class='li_item'>
                <a class='a_page' href="#"><?php __('header_about'); ?></a>
            </li>
            <li class='li_item'>
                <a class='a_page' href="#"><?php __('header_skills'); ?></a>
            </li>
            <li class='li_item'>
                <a class='a_page' href="#"><?php __('header_exp'); ?></a>
            </li>
		</div>
		<ul class='header_section_right'>
            <a class='a_page' href=""><?php new \app\widgets\language\Language() ?></a>
		</ul>
	</div>
</header>