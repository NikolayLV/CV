<div class="dropdown d-inline-block">
	<a href="#" class="dropdown-toggle_o" data-bs-toggle="dropdown">
		<?= \wfm\App::$app->getProperty('language')['code'] ?>
	</a>
	<ul class="dropdown-menu" id="languages">
		<?php foreach ($this->languages as $k => $v): ?>
			<?php if (\wfm\App::$app->getProperty('language')['code'] == $k) continue;?>
			<li>
				<button class="dropdown-item" data-langcode="<?= $k ?>">
					<?= $v['title'] ?>
				</button>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
