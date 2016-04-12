/*$.fn.tooltip = function() {
	return this.each(function() {
		$(this).mousemove(function(event) {
			console.log('mouseover');
			parent = $(this);
			$('.tooltip').text(parent.data('tooltip')).css({'top': event.pageY + 5, 'left': event.pageX + 5}).fadeIn(150)
		})

		$(this).mouseout(function() {
			console.log('mouseout');
			$('.tooltip').fadeOut(100).text('');
		})
	})
}

$('[data-tooltip]')*/