$(document).ready(function() {
	$("#password_request_form").validate({
		errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
		rules : {
			rePassword : {
				equalTo : "#password" // So sánh trường repassword với trường có id là password
			},
		}
	});
	$('#password_request_form').on('focus', 'input.error', function() {
		$('span.error').hide();
		$(this).siblings().fadeIn(120);
	});
	$('#password_request_form').on('focusout', 'input.error', function() {
		$('span.error').fadeOut(120);
	});
}); 