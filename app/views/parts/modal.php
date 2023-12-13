<?php

	use wfm\View;

	/** @var $this View */
?>
<div id="modal" class="modal">
	<div class="modal_box">
		<h1>Выбирете стиль сайта</h1>
		<h3>Choose style of site</h3>
		<form method="GET" class="style_form" id="modal_form">
			<label>
				<input type="radio" name="layout" value="creative" id="creative_radio">
				Creative
			</label>
            <br/>
			<label>
				<input type="radio" name="layout" value="official" id="official_radio">
				Official
			</label>
			<br/>
			<input type="submit" onclick="btnSubmit()" value="Отправить">
		</form>
	</div>
</div>