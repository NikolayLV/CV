<?php
	if (!isset($_SESSION['visited'])) {
		// Если куки не установлены, отправляем сценарий JavaScript
		echo '<script type="text/javascript">let showModal = true;</script>';

		// Устанавливаем куки, чтобы не показывать модальное окно снова
		$_SESSION['visited'] = true;
	}
    ?>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$this->getPart('parts/header');
	}

     ?>

<?php

    $this->getPart('parts/loading');

    ?>

<?php $this->getPart('parts/modal'); ?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['options'])) {
			$selectedOption = $_POST['options'];
			if ($selectedOption == 'official') {
				sleep(3);
				$this->getLayout('official');
			} else if ($selectedOption == 'creative') {
				sleep(3);
				$this->getLayout('creative');
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
        setTimeout(closeLoad, 3000);
    }
    // function closeLoad() {
    //     document.getElementById('').style.display = 'none';
    // }
</script>
