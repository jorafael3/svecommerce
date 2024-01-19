$(document).ready(function() {	
	
	$('body').on('click', '.ax-swatches-more', function (e) {
		$(this).closest('.js-product-miniature').addClass('ax-show-swatches');
	});
	
	$('body').on('click', '.js-variant', function (event) {
		event.preventDefault();
		var self = this;
        if($(self).hasClass('active')){
            return;
        }
		prestashop.emit('clickAjaxVariant', {
			dataset: self.dataset,
			self: self
		});
	});

	prestashop.on('clickAjaxVariant', function (elm) {
		$(elm.self).append('<span class="variants-loader-icon"><i class="la la-circle-notch la-spin"></i></span>');
		var data = {
			'tplProduct': elm.dataset.tplProduct,
			'imageType': elm.dataset.imageType,
			'idProduct': elm.dataset.idProduct,
			'idProductAttribute': elm.dataset.idProductAttribute
		};

		$.post(elm.dataset.url, data, null, 'json').then(function (resp) {			
			if (resp.success) {
				var $class = '';
				
				if($(elm.self).closest('.js-product-miniature').hasClass('ax-show-swatches')){
					$class = 'ax-show-swatches';
				}
				
				var $elr = $(resp.data.message).find('.js-product-miniature');
				$elr.addClass($class);
				
				$(elm.self).closest('.js-product-miniature').replaceWith($elr);
				
				prestashop.emit('updatedProductAjax', null);
			}						
		}).fail(function (resp) {
			prestashop.emit('handleError', { eventType: 'clickAjaxVariant', resp: resp });
		});
	});

});
