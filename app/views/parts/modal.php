<?php

	use wfm\View;

	/** @var $this View */
?>
<div id="modal" class="modal">
	<div class="modal_box">
		<h3><?php __('modal');?></h3>

        <form method="GET" class="form">
            <label for="01"><?php __('modal_creative');?></label>
            <input id="01" type="radio" name="layout" value="creative">
            <label for="02"><?php __('modal_official');?></label>
            <input id="02" type="radio" name="layout" value="official">
            <button type="submit" onclick="closePopup()" class="button_modal"><?php __('modal_btn');?></button>
        </form>

	</div>
</div>