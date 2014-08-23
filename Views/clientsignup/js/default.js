$(document).ready(function() {
	$("#user_des, #pass_des, #postcode_des").tooltip({// Định dạng các id hiện tooltip
		placement : 'right',
		html : true,
		container : 'body',
		delay : 0
	});
	$("#register_form").validate({
		errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
		rules : {
			rePassword : {
				equalTo : "#password" // So sánh trường repassword với trường có id là password
			},
		}
	});
	$('#register_form').on('focus', 'input.error', function() {
		$('span.error').hide();
		$(this).siblings().fadeIn(120);
	});
	$('#register_form').on('focusout', 'input.error', function() {
		$('span.error').fadeOut(120);
	});
});
