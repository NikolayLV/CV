<?php
	namespace app\controllers;

	if (isset($_SESSION['visited'])) {
    if (!isset($_GET['layout'])) {
		$_GET['layout'] = 'official';
    }
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
		echo '<script type="text/javascript">


				(function (){
                    setTimeout(function () {
		location.reload();
	}, 3000);
				})(1);
				</script>';
		// Устанавливаем куки, чтобы не показывать модальное окно снова
		$_SESSION['visited'] = true;
	}
	$this->getPart('parts/modal');
	$this->getPart('parts/footer');
    ?>


