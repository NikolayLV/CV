<?php

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
	<?= $this->getMeta() ?>
</head>
<body>

<header class="fixed-top">
    <div class="header-top py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <a href="tel:380688888888">
                        <span class="icon-phone">&#9743;</span> 38 068-888-88-88
                    </a>
                </div>
                <div class="col">
                    <ul class='navbar-nav-middle ms-auto mb-2 mb-lg-0' style="display: flex">
                        <li class='navbar-nav' style="margin: 0 20px 0 20px;">
                            <a class='nav-link' href="https://onlybuy.shop/"><?php __('tpl_home_link'); ?></a>
                        </li>
                        <li class='navbar-nav' style="margin: 0 20px 0 20px;">
                            <a class='nav-link' href='page/o-magazine' style="white-space: nowrap;"><?php __('tpl_about_link'); ?></a>
                        </li>
                        <li class='navbar-nav' style="margin: 0 20px 0 20px;">
                            <a class='nav-link' href='page/oplata-i-dostavka' style="white-space: nowrap;"><?php __('tpl_pay_link'); ?></a>
                        </li>
                        <li class='navbar-nav' style="margin: 0 20px 0 20px;">
                            <a class='nav-link' href='page/kontakty' style="white-space: nowrap;"><?php __('tpl_contact_link'); ?></a>
                        </li>
                        <li class='navbar-nav' style="margin: 0 20px 0 20px;">
                            <a class='nav-link' href='blogs' style="white-space: nowrap;"><?php __('tpl_blog_link'); ?></a>
                        </li>
                        <li class='navbar-nav' style="margin: 0 20px 0 20px;">
                            <a class='nav-link' href='reviews' style="white-space: nowrap;"><?php __('tpl_reviews_link'); ?></a>
                        </li>
                    </ul>
                </div>
					<?php new \app\widgets\language\Language() ?>

                </div>
            </div>
        </div>

</header>

<section class="first">
	<h1><?php __('test'); ?></h1>
</section>

<script>
    const PATH = '<?= PATH ?>';
</script>
<script src="<?= PATH ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="<?= PATH ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= PATH ?>/assets/js/sweetalert2.js"></script>
<script src="<?= PATH ?>/assets/js/main.js"></script>
