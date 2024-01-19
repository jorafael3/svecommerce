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
		if($(this).closest('form').find('input[name=qty]').val() > 0){
			if($(this).hasClass('js-buy-now')){
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
	
	prestashop.on('updatedCart',function (event) {
		if($(event.resp.cart_detailed).find('.empty-products').length > 0){
			$('body').addClass('cart-is-empty');
			if(typeof (prestashop.page.page_name) != 'undefined' && prestashop.page.page_name == 'checkout'){
				location.assign(prestashop.urls.pages.index);
			}
		}else{
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

			if(prestashop.buy_now_cart || (!opShoppingCart.has_ajax && event.reason.linkAction == 'add-to-cart')){
				location.assign(prestashop.urls.pages.order);
			}else{

				$('body').addClass('cart-processing');

				if (event && event.resp && event.resp.hasError) {
					prestashop.emit('showErrorNextToAddtoCartButton', { errorMessage: event.resp.errors.join('<br/>')});
				}

				$.post(refreshURL, requestData).then(function (resp) {

					$('body').removeClass('cart-processing');

					$('[data-button-action="add-to-cart"]').removeClass('loading');

					$('.js-shopping-cart').replaceWith($(resp.canvas).find('.js-shopping-cart'));

					$('.js-cart-canvans-title').replaceWith($(resp.canvas).find('.js-cart-canvans-title'));

					$('.js-cart-nbr').replaceWith($(resp.preview).find('.js-cart-nbr'));

					$('.js-cart-amount').replaceWith($(resp.preview).find('.js-cart-amount'));

                    if($('#quantity_wanted').length){
                        $('#quantity_wanted').change();
                    }

					prestashop.emit('updateCarted', null);

					if (resp.modal) {						
						if( opShoppingCart.action_after == 'canvas' ){
							$('.modal').modal('hide');
							setTimeout(function(){
								prestashop.emit('show_canvas_widget', $('#canvas-mini-cart'));
							}, 250);
						}else{
							if($(resp.modal).find('span').length){
								toastr["success"](resp.modal);
							}else{
								toastr["error"](resp.modal);
							}
						}
												
						prestashop.emit('mustUpdateLazyLoad', null);
					}

				}).fail(function (resp) {
					$('[data-button-action="add-to-cart"]').removeClass('loading');
					prestashop.emit('handleError', {eventType: 'updateShoppingCart', resp: resp});
				});

			}
		}
	);
});