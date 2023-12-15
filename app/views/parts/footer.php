<?php

	?>
<footer>
	<script>
        const PATH = '<?= PATH ?>';
	</script>
	<script src="<?= PATH ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
			integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			crossorigin="anonymous"></script>
	<script src="<?= PATH ?>/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= PATH ?>/assets/js/sweetalert2.js"></script>
	<script src="<?= PATH ?>/assets/js/main.js"></script>
    <script>
        if (typeof showModal !== 'undefined' && showModal) {
            document.getElementById('modal').classList.add('open');
        }

        function chooseStyle() {
            document.getElementById('modal').classList.add('open');
        }

        function closePopup() {
            document.getElementById('modal').classList.remove('open');
        }

        function sendContacts() {
            let inputName = document.getElementById('name').value;
            let inputEmail = document.getElementById('email').value;
            let inputPhone = document.getElementById('phone').value;
            let inputText = document.getElementById('text').value;
            
            switch (true) {
                case !inputName:
                    alert('Fill in the name field!');
                    break;
                case !inputEmail:
                    alert('Fill in the email field!');
                    break;
                case !inputPhone:
                    alert('Fill in the phone field!');
                    break;
                case !inputText:
                    alert('Fill in the message field!');
                    break;
                case inputName && inputEmail && inputText:
                    alert('The message was sent successfully!');
                    break;
            }

        }
    </script>
</footer>
