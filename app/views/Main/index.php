<?php

    ?>
<?php $this->getPart('parts/header'); ?>

<section class="main">
    <div class="main_block">
        <img class="main_photo" src="<?php WWW ?>/assets/img/main.png" alt="">
    </div>
</section>
<section class="quote">
<p class="quote_p"><?php __('quote'); ?></p>
</section>
<section class="about">
    <div class="about_left">

    </div>
    <div class="about_right">

    </div>
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
