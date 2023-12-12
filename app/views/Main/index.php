<?php
	if (!isset($_SESSION['visited'])) {
		// Если куки не установлены, отправляем сценарий JavaScript
		echo '<script type="text/javascript">let showModal = true;</script>';

		// Устанавливаем куки, чтобы не показывать модальное окно снова
		$_SESSION['visited'] = true;
	}
    ?>
<?php $this->getPart('parts/header'); ?>
<?php $this->getPart('parts/loading'); ?>

<?php $this->getPart('parts/modal'); ?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['options'])) {
			$selectedOption = $_POST['options'];
			if ($selectedOption == 'official') {
				$this->getLayout('official');
			}
            else {
				$this->getLayout('creative');
            }
		}
	}


?>


<?php $this->getPart('parts/footer'); ?>
<script>
    // Проверяем, нужно ли показать модальное окно
    if (typeof showModal !== 'undefined' && showModal) {
        // Ваш код для отображения модального окна
        document.getElementById('modal').classList.add('open');
    }

    function btnSubmit() {
        document.getElementById('modal').classList.remove('open');
        document.getElementById('load').classList.add('open');
        setTimeout(closeLoad, 5000);
    }
    function closeLoad() {
        document.getElementById('load').classList.remove('open');
    }
</script>
