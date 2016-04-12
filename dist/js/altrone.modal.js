$.fn.modal = function() {
	return this.each(function() {
		$(this).click(function() {
			modal = $('#' + $(this).data('modalHref'));
			modal.css({'margin-top': -modal.height()/2})
			$('.overlay').fadeIn(300);
			modal.fadeIn(350);
		});

		$('.overlay, .closeModal').click(function() {
			$('.modal').fadeOut(200);
			$('.overlay').fadeOut(250);
		})
	})
}