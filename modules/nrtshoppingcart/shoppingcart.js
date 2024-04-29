/* global $, prestashop */

/**
 * This module exposes an extension point in the form of the `showModal` function.
 *
 * If you want to override the way the modal window is displayed, simply define:
 *
 * prestashop.blockcart = prestashop.blockcart || {};
 * prestashop.blockcart.showModal = function myOwnShowModal (modalHTML) {
 *   // your own code
 *   // please not that it is your responsibility to handle closing the modal too
 * };
 *
 * Attention: your "override" JS needs to be included **before** this file.
 * The safest way to do so is to place your "override" inside the theme's main JS file.
 *
 */

$(document).ready(function () {

	prestashop.buy_now_cart = false;

	$('body').on('click', '[data-button-action=add-to-cart]', function (event) {
		console.log('event: ', event);
		if ($(this).closest('form').find('input[name=qty]').val() > 0) {
			if ($(this).hasClass('js-buy-now')) {
				prestashop.buy_now_cart = true;
			}
			$(this).addClass('loading');
		}
	});

	$('body').on('click', '[data-link-action="delete-from-cart"], [data-link-action="remove-voucher"]', function (event) {
		$('body').addClass('cart-processing');
	});

	$('body').on('click', '[data-link-action="delete-all-cart"]', function (event) {
		var refreshURL = opShoppingCart.ajax;
		var requestData = {};
		requestData = {
			action: 'delete-all-cart'
		};
		$('body').addClass('cart-processing');
		$.post(refreshURL, requestData).then(function (resp) {
			$('[data-link-action="delete-from-cart"]').first().click();
		});
	});

	$('.js-cart-nbr').text(prestashop.cart.products_count);

	$('.js-cart-amount').text(prestashop.cart.subtotals.products.value);

	prestashop.on('updatedCart', function (event) {
		if ($(event.resp.cart_detailed).find('.empty-products').length > 0) {
			$('body').addClass('cart-is-empty');
			if (typeof (prestashop.page.page_name) != 'undefined' && prestashop.page.page_name == 'checkout') {
				location.assign(prestashop.urls.pages.index);
			}
		} else {
			$('body').removeClass('cart-is-empty');
		}
	});

	prestashop.on(
		'updateCart',
		function (event) {
			var refreshURL = opShoppingCart.ajax;
			var requestData = {};

			if (event && event.reason && typeof event.resp !== 'undefined' && !event.resp.hasError) {
				requestData = {
					id_customization: event.reason.idCustomization,
					id_product_attribute: event.reason.idProductAttribute,
					id_product: event.reason.idProduct,
					action: event.reason.linkAction
				};
			}

			if (prestashop.buy_now_cart || (!opShoppingCart.has_ajax && event.reason.linkAction == 'add-to-cart')) {
				location.assign(prestashop.urls.pages.order);
			} else {

				$('body').addClass('cart-processing');

				if (event && event.resp && event.resp.hasError) {
					prestashop.emit('showErrorNextToAddtoCartButton', { errorMessage: event.resp.errors.join('<br/>') });
				}

				$.post(refreshURL, requestData).then(function (resp) {
					console.log('resp: ', resp);
					Verificar_Credito(function (x) {
						console.log('result: ', x);
						$('body').removeClass('cart-processing');

						$('[data-button-action="add-to-cart"]').removeClass('loading');

						$('.js-shopping-cart').replaceWith($(resp.canvas).find('.js-shopping-cart'));

						$('.js-cart-canvans-title').replaceWith($(resp.canvas).find('.js-cart-canvans-title'));

						$('.js-cart-nbr').replaceWith($(resp.preview).find('.js-cart-nbr'));

						$('.js-cart-amount').replaceWith($(resp.preview).find('.js-cart-amount'));

						if ($('#quantity_wanted').length) {
							$('#quantity_wanted').change();
						}

						prestashop.emit('updateCarted', null);
						if (resp.modal) {
							if (opShoppingCart.action_after == 'canvas') {
								$('.modal').modal('hide');
								setTimeout(function () {
									prestashop.emit('show_canvas_widget', $('#canvas-mini-cart'));
								}, 250);
							} else {
								if ($(resp.modal).find('span').length) {
									toastr["success"](resp.modal);
								} else {
									toastr["error"](resp.modal);
								}
							}

							prestashop.emit('mustUpdateLazyLoad', null);
						}
						if (x.success) {

							$(".INDEX_PR_C_BUTTONS_CONTADO").hide();
							$(".INDEX_PR_C_PRICE_CONTADO").hide();
							$(".INDEX_PR_C_BUTTONS_CREDITO").addClass("col-12");
							$(".INDEX_PR_C_BUTTONS_CREDITO").show();
							$(".INDEX_PR_C_PRICE_CREDITO").show();

							
							$(".CART_PRICE_CONTADO").empty();
							$(".CART_PRICE_TOTAL_CONTADO").empty();
							$(".CART_SUBTOTAL_TEXT").text("12 cuotas de");

							var totalPriceCredit = 0;
							var cartItems = document.querySelectorAll('.cart-item-product');
							cartItems.forEach(function (item) {
								var priceElement = item.querySelector('.CART_PRICE_CREDIT .price');
								var priceText = priceElement.textContent.trim().replace('$', '').replace(',', '.');
								var price = parseFloat(priceText);
								var quantityElement = item.querySelector('.CART_PRODUCT_CANT');
								var quantity = parseInt(quantityElement.value);
								totalPriceCredit += price * quantity;
							});
							var formattedPrice = totalPriceCredit.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
							$(".CART_PRICE_TOTAL_CREDITO_VAL").text(formattedPrice);

						} else {
							$(".CART_PRICE_CREDIT").empty();
							$(".CART_PRICE_TOTAL_CREDITO").empty();

						}
					});



				}).fail(function (resp) {
					$('[data-button-action="add-to-cart"]').removeClass('loading');
					prestashop.emit('handleError', { eventType: 'updateShoppingCart', resp: resp });
				});

			}
		}
	);


	function Verificar_Credito(callback) {
		var url = "index.php?fc=module&module=" + name_salvacero + "&controller=ajax";

		$.ajax({
			url: url,
			dataType: 'json',
			type: "POST",
			data: {
				action: "getDataCustomer",
				customerEmail: prestashop.customer.email,
				total: prestashop.cart.totals.total.amount

			},
			success: function (result) {
				callback(result)

			},
			error: (jqXHR, exception) => {

			}
		});
	}
});


