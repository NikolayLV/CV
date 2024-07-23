<?php
	namespace app\controllers;

	if (isset($_SESSION['visited'])) {
		$this->getPart('parts/headerCreative');
		$this->getLayout('creative');
}

	if (!isset($_SESSION['visited'])) {

		$this->getPart('parts/loading');
		echo '<script type="text/javascript">

				(function (){
                    setTimeout(function () {
					location.reload();
					}, 3000);
				})(1);
				</script>';

		$_SESSION['visited'] = true;
	}
	$this->getPart('parts/modal');
	$this->getPart('parts/footer');
    ?>


