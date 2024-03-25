<?php ?>
<header class="header_official">
    <div class="header_section_o">
        <div class="header_section_left_o">
            <img class="header_logo_o" src="<?php WWW ?>/assets/img/logo_o.png" alt="">
        </div>
        <div class="header_section_mid_o">
            <li class='li_item_o'>
                <a class='a_page_o' href="#about"><?php __('header_about'); ?></a>
            </li>
            <li class='li_item_o'>
                <a class='a_page_o' href="#skills"><?php __('header_skills'); ?></a>
            </li>
            <li class='li_item_o'>
                <a class='a_page_o' href="#exp"><?php __('header_exp'); ?></a>
            </li>
        </div>
        <ul class='header_section_right_o'>
            <button class="btn_off" onclick="chooseStyle()">
                <?php __('header_style'); ?>
            </button>

            <a class='a_page_o' href=""><?php new \app\widgets\language\LanguageO() ?></a>
        </ul>
    </div>
</header>
