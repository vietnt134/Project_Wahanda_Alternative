$(document).ready(function() {
	$('#user-nav .a-login').click(function() {
		if ($('#header-login').is(':hidden')) {
			$('#header-login').slideDown();
			$('.button-inside').text('Close');
		} else {
			$('#header-login').slideUp();
			$('.button-inside').text('Log in');
		}
	});
	$('.site-close-form').click(function() {
		$('#header-login').slideUp();
		$('.button-inside').text('Log in');
	});
	$("#business_signup_form").validate({
		errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
		rules : {
			rePassword : {
				equalTo : "#password" // So sánh trường repassword với trường có id là password
			},
		}
	});
	$('#business_signup_form').on('focus', 'input.error', function() {
		$('span.error').hide();
		$(this).siblings().fadeIn(120);
	});
	$('#business_signup_form').on('focusout', 'input.error', function() {
		$('span.error').fadeOut(120);
	});
});
