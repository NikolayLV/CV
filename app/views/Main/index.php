<?php
	if (!isset($_SESSION['visited'])) {
		// Если куки не установлены, отправляем сценарий JavaScript
		echo '<script type="text/javascript">let showModal = true;</script>';

		// Устанавливаем куки, чтобы не показывать модальное окно снова
		$_SESSION['visited'] = true;
	}
    ?>
<?php $this->getPart('parts/header'); ?>
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


<div aria-label="Orange and tan hamster running in a metal wheel" role="img" class="wheel-and-hamster">
    <div class="wheel"></div>
    <div class="hamster">
        <div class="hamster__body">
            <div class="hamster__head">
                <div class="hamster__ear"></div>
                <div class="hamster__eye"></div>
                <div class="hamster__nose"></div>
            </div>
            <div class="hamster__limb hamster__limb--fr"></div>
            <div class="hamster__limb hamster__limb--fl"></div>
            <div class="hamster__limb hamster__limb--br"></div>
            <div class="hamster__limb hamster__limb--bl"></div>
            <div class="hamster__tail"></div>
        </div>
    </div>
    <div class="spoke"></div>
</div>


<?php $this->getPart('parts/footer'); ?>
<script>
    // Проверяем, нужно ли показать модальное окно
    if (typeof showModal !== 'undefined' && showModal) {
        // Ваш код для отображения модального окна
        document.getElementById('modal').classList.add('open');
    }

    // function btnSubmit() {
    //     document.getElementById('modal').classList.remove('open');
    //     let LayoutCreative = document.getElementById('radio_creative');
    //     let LayoutOfficial = document.getElementById('radio_official');
    //     if (LayoutCreative.checked) {
    //         document.getElementById('layout_creative').classList.add('show');
    //     } else if (LayoutOfficial.checked) {
    //         document.getElementById('layout_official').classList.add('show');
    //     } else {
    //         document.getElementById('layout_creative').classList.add('show');
    //     }
    // }
</script>
