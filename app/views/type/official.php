<?php

?>
<body class="body_official">
<section class="about_o">
    <div class="about_block_o">
        <h1 class="about_h1_o">
			<?php __('about_o'); ?>
        </h1>
        <p class="about_p_o">
			<?php __('about_p'); ?>
        </p>
        <p class="about_p_o">
			<?php __('about_p2'); ?>
        </p>
        <p class="about_p_o">
			<?php __('about_p3'); ?>
        </p>
        <p class="about_p_o">
			<?php __('about_p4'); ?>
        </p>
        <p class="about_p_o">
			<?php __('about_p5'); ?>
        </p>
    </div>

</section>
<section class="skills_o">
    <div class="skills_block_o">
        <h1 class="skills_h1_o">
			<?php __('skills_o'); ?>
        </h1>
        <p class="skills_p_o">
			<?php __('skills_p'); ?>
        </p>
        <p class="skills_p_o">
			<?php __('skills_p2'); ?>
        </p>
        <p class="skills_p_o">
			<?php __('skills_p3'); ?>
        </p>
        <p class="skills_p_o">
			<?php __('skills_p4'); ?>
        </p>
        <p class="skills_p_o">
			<?php __('skills_p5'); ?>
        </p>
        <p class="skills_p_o">
			<?php __('skills_p6'); ?>
        </p>
    </div>
</section>
<section class="exp_o">
    <div class="exp_block_o">
        <h1 class="exp_h1_o">
			<?php __('exp_o'); ?>
        </h1>
        <p class="exp_p_o">
			<?php __('exp_p'); ?>
        </p>
        <p class="exp_p_o">
			<?php __('exp_p2'); ?>
        </p>
        <p class="exp_p_o">
			<?php __('exp_p3'); ?>
        </p>
        <p class="exp_p_o">
			<?php __('exp_p4'); ?>
        </p>
        <p class="exp_p_o">
			<?php __('exp_p5'); ?>
        </p>
    </div>
</section>
<section class="contacts_o">
    <div class="contacts_left_o">
        <h1 class="contacts_h1_o"><?php __('contacts_h1_o')?></h1>
        <div class="contacts_info_o">
            <img class="contacts_img_o" src="<?php PATH ?>/assets/img/contacts1o.png" alt="">
            <a class="contacts_a_o" href="https://www.instagram.com/nikolaydlv/">@Nikolaydlv</a>
        </div>
        <div class="contacts_info_o">
            <img class="contacts_img_o" src="<?php PATH ?>/assets/img/contacts2o.png" alt="">
            <a class="contacts_a_o" href="https://t.me/nikolaydlv">@Nikolaydlv</a>
        </div>
        <div class="contacts_info_o">
            <img class="contacts_img_o" src="<?php PATH ?>/assets/img/contacts3o.png" alt="">
            <a class="contacts_a_o" href="https://github.com/NikolayLV">@NikolayLV</a>
        </div>
        <div class="contacts_info_o">
            <img class="contacts_img_o" src="<?php PATH ?>/assets/img/contacts4o.png" alt="">
            <a class="contacts_a_o" href="mailto:nikolayd2002@gmail.com">nikolayd2002@gmail.com</a>
        </div>
    </div>

    <div class="contacts_container_o">
        <div class="form_area_o">
            <form action="" method="post" class="contact_form">
                <div class="contacts_form_group_o">
                    <label class="contacts_sub_title_o" for="name">Name</label>
                    <input placeholder="<?php __('contacts_input_name'); ?>" name="name" id="name" class="contacts_form_style_o" type="text" required>
                </div>
                <div class="contacts_form_group_o">
                    <label class="contacts_sub_title_o" for="email">Email</label>
                    <input placeholder="<?php __('contacts_input_email'); ?>" name="email" id="email" class="contacts_form_style_o" type="email" required>
                </div>
                <div class="contacts_form_group_o">
                    <label class="contacts_sub_title_o" for="password">Phone</label>
                    <input placeholder="<?php __('contacts_input_phone'); ?>" name="phone" id="phone" class="contacts_form_style_o" type="text" required>
                </div>
                <div class="contacts_form_group_o">
                    <label class="contacts_sub_title_o for="password">Message</label>
                    <textarea placeholder="<?php __('contacts_input_text'); ?>" name="text" id="text" class="contacts_form_style_o" cols="30" rows="10" required></textarea>
                </div>
                <div>
                    <button onclick="sendContacts()" class="contacts_btn_o"><?php __('contacts_input_text'); ?></button>
            </form>
			<?php
				if (isset($_SESSION['contacts_data'])) {
					unset($_SESSION['contacts_data']);
				}
			?>
        </div>
    </div>
</section>
</body>


