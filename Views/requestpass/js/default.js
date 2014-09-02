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
	var eventhandler = function(e) {
		e.preventDefault();
	};
	$('#email_address').focusout(function() {
		var client_email = ($(this).val());
		var e_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var check = e_mail.test(client_email);
		if (check == true) {
			if ($('#email_address').val() !== '') {
				$('#email_check').children('span').remove();
				$('#email_check').append(' <i class="fa fa-refresh fa-spin"></i>');
				$.ajax({
					url : URL + 'requestpass/checkEmailExistPassRequest',
					type : 'post',
					dataType : 'json',
					data : {
						re_email : client_email
					},
					success : function(response) {
						if (response[0].count != 0) {
							$('#email_check').children('i').remove();
							$('#email_check').append('<span class="text-success"><small><i> Email hợp lệ!</small></i></span>');
							$("#re_submit").unbind('click', eventhandler);
						} else {
							$('#email_check').children('i').remove();
							$('#email_check').append('<span class="text-danger"><small><i> Email yêu cầu không tồn tại! Hãy đăng ký!</small></i></span>');
							$("#re_submit").bind('click', eventhandler);
						}
					},
					complete : function() {

					}
				});
			} else {
				$('#email_check').children('i').remove();
			}
		} else {
			$('#email_check').children('i').remove();
			$('#email_check').children('span').remove();
			$('#email_check').append('<span class="text-danger"><small><i> Email yêu cầu không tồn tại! Hãy đăng ký!</small></i></span>');
			$("#re_submit").bind('click', eventhandler);
		}
	});
}); 