$(document).ready(function() {


	/* Modal Plugin */
	$('[data-modal-href]').click(function() {
		var overlay_disable = $(this).data('overlayDisable');		
		var modal = $('#' + $(this).data('modalHref'));
		modal.css({'margin-top': -modal.height()/2})
		$('.overlay').fadeIn(300);
		modal.fadeIn(350);

		if (overlay_disable === true) {
			$('.closeModal').click(function() {
				hideModal();
			});
		} else {
			$('.overlay, .closeModal').click(function() {
				hideModal();
			});
		}		
	});	

	function hideModal() {
		$('.modal').fadeOut(200);
		$('.overlay').fadeOut(250);
	}


	/* Tooltip Plugin */

	$('[data-tooltip]').mousemove(function(event) {
		var title = $(this).data('tooltipTitle');
		var position = $(this).data('tooltipPosition');
		/*
		Вверх-Право: -30, +5
		Вверх-Слева: -30, width - 5
		Вниз-справа: +30, +5
		Вниз-Слева: -30, width - 5
		 */
		var title_html = '';
		if (title) {
			title_html = '<h1>' + title + '</h1>';
		} else {
		}
		parent = $(this);
		$('.tooltip').html(title_html + parent.data('tooltip'))
		var y_shift = -30
		var x_shift = 5
		var wdt = $(this).width();
		if (position == 'top-left') {
			y_shift = -30;
			x_shift = -wdt/2;
		} else if (position == 'bottom-right') {
			y_shift = 30;
			x_shift = 5;
		} else if (position == 'bottom-left') {
			y_shift = 30;
			x_shift = -wdt + 5;
		}
		$('.tooltip').css({'top': event.pageY + y_shift, 'left': event.pageX + x_shift}).fadeIn(150);
		console.log(wdt);
	})

	$('[data-tooltip]').mouseout(function() {
		$('.tooltip').fadeOut(100).html('');
	})



	/* Accordion Plugin */
	function disableAccordion(accordion) {
		accordion.find('.item .header').removeClass('active');
		accordion.find('.item .content').slideUp(300);
	}

	$('.accordion .item .header').click(function() {
		parentAccordion = $(this).parent().parent();
		is_multi_selectable = parentAccordion.data('accordionMultiSelectable');
		if ($(this).hasClass('active')) {
			if (!is_multi_selectable) {
				disableAccordion(parentAccordion);
			} else {
				currentItem = $(this).parent();
				currentItem.find('.header').removeClass('active');
				currentItem.find('.content').slideUp(300);
			}
		} else {
			if (!is_multi_selectable) {
				disableAccordion(parentAccordion);
			} 
			currentItem = $(this).parent();
			currentItem.find('.header').addClass('active');
			currentItem.find('.content').slideDown(300);
		}
	});

	/* Tabs Plugin */
	function disableTabs(tabs) {
		tabs.find('li.active').removeClass('active');
	}
	$('[data-tabs] li').click(function() {
		tabs = $(this).parent();
		disableTabs(tabs);
		if ($(this).data('link')) {
			document.location.href=$(this).data('link');
		}
		$(this).addClass('active');
	});

	/* Button Toggle Plugin */
	$('[data-button-toggle]').click(function() {
		$(this).toggleClass('active');
		console.log('toogle');
	});


	/* Dropdown Plugin */
	var menu_parent;
	$('*:not(:has([data-dropdown-target]))').click(function() {
		$('.dropdown').slideUp(150);
		$('#' + $(this).data('dropdownTarget') + ' > li').click(function() {				
			if (menu_parent.hasClass('hamburger')) {
				menu_parent.removeClass('active');
			}
		})	
	});

	$('[data-dropdown-target]').click(function() {
		$('.dropdown').slideUp(150);		
		var dropdown = $('#' + $(this).data('dropdownTarget'));
		if (!dropdown.is(':visible')) {
			var position = $(this).position();
			dropdown.css({'top': position.top + $(this).outerHeight() + 10, 'left': position.left});
			dropdown.slideDown(150);
			var menu_parent = $(this);
			$('#' + $(this).data('dropdownTarget') + ' > li').click(function() {				
				if (menu_parent.hasClass('hamburger')) {
					menu_parent.removeClass('active');
				}
			})	
		}	
	});

	/* Гамбургер-меню */
	$('.hamburger').click(function() {
		$(this).toggleClass('active');
	});

	/* Toast-уведомления */
	$('[data-toast-text]').click(function() {
		var text = $(this).data('toastText');
		var icon = $(this).data('toastIcon');
		var color = $(this).data('toastColor');
		var time = $(this).data('toastTime');

		showToast(text, icon, color, time);
	});

	function showToast(text, icon, color, time) {		
		if (!time) {
			time = 2.5;
		}

		var data = "";
		if (icon) {
			data += "<div class='icon'><i class='" + icon + "'></i></div>";
		}
		data += text;
		if (color) {
			$('.toast').addClass(color);
		} else {
			$('.toast').removeClass('red').removeClass('orange').removeClass('yellow').removeClass('olive').removeClass('green').removeClass('teal').removeClass('blue').removeClass('violet').removeClass('purple').removeClass('pink').removeClass('brown').removeClass('white');
		}
		$('.toast').html(data);
		$('.toast').show();
		$('.toast').css({ opacity: "0"});
		
		$('.toast').animate({			
			opacity: "1",
			bottom: "50px",
		}, 500);

		
		setTimeout(function() {
			$('.toast').animate({				
				opacity: "0",
				bottom: "75px",
			}, 1000, function() {
				$('.toast').hide();
				$('.toast').css({ bottom: "0"});
			});
		}, (time + 1) * 1000);

	}
});