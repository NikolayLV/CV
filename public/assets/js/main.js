$(function() {

	// CART

	function showCart(cart) {
		$('#cart-modal .modal-cart-content').html(cart);
		const myModalEl = document.querySelector('#cart-modal');
		const modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
		modal.show();

		if ($('.cart-qty').text()) {
			$('.count-items').text($('.cart-qty').text());
		} else {
			$('.count-items').text('0');
		}
	}

	$('#get-cart').on('click', function (e) {
		e.preventDefault();
		$.ajax({
			url: 'cart/show',
			type: 'GET',
			success: function (res) {
				showCart(res);
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	$('#cart-modal .modal-cart-content').on('click', '.del-item', function (e) {
		e.preventDefault();
		const id = $(this).data('id');
		$.ajax({
			url: 'cart/delete',
			type: 'GET',
			data: {id: id},
			success: function (res) {
				const url = window.location.toString();
				if (url.indexOf('cart/view') !== -1) {
					window.location = url;
				} else {
					showCart(res);
				}
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	$('#cart-modal .modal-cart-content').on('click', '#clear-cart', function () {
		$.ajax({
			url: 'cart/clear',
			type: 'GET',
			success: function (res) {
				showCart(res);
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	$('.add-to-cart').on('click', function (e) {
		e.preventDefault();
		const id = $(this).data('id');
		const qty = $('#input-quantity').val() ? $('#input-quantity').val() : 1;
		const $this = $(this);

		$.ajax({
			url: 'cart/add',
			type: 'GET',
			data: {id: id, qty: qty},
			success: function (res) {
				showCart(res);
				$this.find('i').removeClass('fa-shopping-cart').addClass('fa-luggage-cart');
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	// CART

	$('#input-sort').on('change', function () {
		window.location = PATH + window.location.pathname + '?' + $(this).val();
	});

	$('.open-search').click(function(e) {
		e.preventDefault();
		$('#search').addClass('active');
	});
	$('.close-search').click(function() {
		$('#search').removeClass('active');
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('#top').fadeIn();
		} else {
			$('#top').fadeOut();
		}
	});

	$('#top').click(function() {
		$('body, html').animate({scrollTop:0}, 700);
	});

	$('.sidebar-toggler .btn').click(function() {
		$('.sidebar-toggle').slideToggle();
	});

	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled: true
		},
		removalDelay: 500,
		callbacks: {
			beforeOpen: function() {
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		}
	});

	$('#languages button').on('click', function () {
		const lang_code = $(this).data('langcode');
		window.location = PATH + '/language/change?lang=' + lang_code;
	});

	$('.product-card').on('click', '.add-to-wishlist', function (e) {
		e.preventDefault();
		const id = $(this).data('id');
		const $this = $(this);
		$.ajax({
			url: 'wishlist/add',
			type: 'GET',
			data: {id: id},
			success: function (res) {
				res = JSON.parse(res);
				Swal.fire(
					res.text,
					'',
					res.result
				);
				if (res.result == 'success') {
					$this.removeClass('add-to-wishlist').addClass('delete-from-wishlist');
					$this.find('i').removeClass('far fa-heart').addClass('fas fa-hand-holding-heart');
				}
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	$('.product-card').on('click', '.delete-from-wishlist', function (e) {
		e.preventDefault();
		const id = $(this).data('id');
		const $this = $(this);
		$.ajax({
			url: 'wishlist/delete',
			type: 'GET',
			data: {id: id},
			success: function (res) {
				const url = window.location.toString();
				if (url.indexOf('wishlist') !== -1) {
					window.location = url;
				} else {
					res = JSON.parse(res);
					Swal.fire(
						res.text,
						'',
						res.result
					);
					if (res.result == 'success') {
						$this.removeClass('delete-from-wishlist').addClass('add-to-wishlist');
						$this.find('i').removeClass('fas fa-hand-holding-heart').addClass('far fa-heart');
					}
				}
			},
			error: function () {
				alert('Error!');
			}
		});
	});

});


if (typeof showModal !== 'undefined' && showModal) {
	document.getElementById('modal').classList.add('open');
}

function chooseStyle() {
	document.getElementById('modal').classList.add('open');
}

function closePopup() {
	document.getElementById('modal').classList.remove('open');
	setTimeout(function () {
		document.querySelector('.load').style.display = 'none';
	}, 3000);
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

function downloadCV() {
		let filePath = '/public/assets/CV.pdf';

		// Создаем новый XMLHttpRequest объект
		let xhr = new XMLHttpRequest();

		// Открываем запрос на получение файла
		xhr.open('GET', filePath, true);

		// Устанавливаем responseType в "blob"
		xhr.responseType = 'blob';

		// Обработка успешного завершения запроса
		xhr.onload = function() {
			if (xhr.status === 200) {
				// Создаем Blob из полученных данных
				var blob = new Blob([xhr.response], { type: 'application/octet-stream' });

				// Создаем временную ссылку на Blob
				var url = window.URL.createObjectURL(blob);

				// Создаем ссылку для скачивания
				var a = document.createElement('a');
				a.href = url;
				a.download = filePath.substring(filePath.lastIndexOf('/') + 1);

				// Добавляем ссылку на документ
				document.body.appendChild(a);

				// Запускаем скачивание
				a.click();

				// Удаляем ссылку из документа
				document.body.removeChild(a);

				// Очищаем URL объекта
				window.URL.revokeObjectURL(url);
			}
		};

		// Отправляем запрос
		xhr.send();
	};