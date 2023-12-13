<?php if (isset($_SESSION['visited'])) {
	sleep(2);
    if ($_GET['layout'] == 'official') {
        $this->getPart('parts/headerOfficial');
        $this->getLayout('official');
    } else {
		$this->getPart('parts/headerCreative');
		$this->getLayout('creative');
    }
}

	if (!isset($_SESSION['visited'])) {
		// Если куки не установлены, отправляем сценарий JavaScript
		$this->getPart('parts/loading');
		$this->getPart('parts/modal');
		echo '<script type="text/javascript">let showModal = true;</script>';

		// Устанавливаем куки, чтобы не показывать модальное окно снова
		$_SESSION['visited'] = true;
	}

	$this->getPart('parts/footer');
    ?>

<script>
    if (typeof showModal !== 'undefined' && showModal) {
        document.getElementById('modal').classList.add('open');
    }

    function btnSubmit() {
        document.getElementById('modal').classList.remove('open');
        let modal_form = document.getElementById('creative_radio');

        if (modal_form) {
            document.getElementById('creative').style.display = 'block';
            document.getElementById('official').style.display = 'none';
        } else {
            document.getElementById('official').style.display = 'block';
            document.getElementById('creative').style.display = 'none';
        }
    }
</script>

