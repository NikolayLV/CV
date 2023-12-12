<?php

	use wfm\View;

	/** @var $this View */
?>
<div id="modal" class="modal">
	<div class="modal_box">
		<h1>Выбирете стиль сайта</h1>
		<h3>Choose style of site</h3>
		<form method="post" class="style_form">
			<label>
				<input type="radio" name="options" value="creative">
				Creative
			</label>

			<label>
				<input type="radio" name="options" value="official">
				Official
			</label>
			<br/>
			<label>
				<input type="radio" name="languages" id="en" value="english">
				English
			</label>

			<label>
				<input type="radio" name="languages" id="de" value="german">
				German
			</label>
			<input type="submit" onclick="btnSubmit()" value="Отправить">
		</form>
	</div>
</div>