$(document).ready(function() {
	$('#client_email').val('');
	$('#client_username').val('');
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
	var eventhandler = function(e) {
		e.preventDefault();
	};
	// $("button").bind('click', eventhandler);
	$('#client_email').focusout(function() {
		var client_email = ($(this).val());
		var e_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var check = e_mail.test(client_email);
		if (check == true) {
			if ($('#client_email').val() !== '') {

				$('#email_check').append(' <i class="fa fa-refresh fa-spin"></i>');
				$.ajax({
					url : URL + 'clientsignup/checkExist',
					type : 'post',
					dataType : 'json',
					data : {
						email : client_email
					},
					success : function(response) {
						if (response[0].count == 0) {
							$('#email_check').children('i').remove();
							$('#email_check').children('span').remove();
							$('#email_check').append('<span class="text-success"><small><i> Email chưa được sử dụng!</small></i></span>');
							$("#submit_reg").unbind('click', eventhandler);
						} else {
							$('#email_check').children('i').remove();
							$('#email_check').children('span').remove();
							$('#email_check').append('<span class="text-danger"><small><i> Email đã tồn tại!</small></i></span>');
							$("#submit_reg").bind('click', eventhandler);
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
			$('#email_check').append('<span class="text-danger"><small><i> Email đã tồn tại hoặc không hợp lệ!</small></i></span>');
			$("#submit_reg").bind('click', eventhandler);
		}
	});
	$('#client_username').focusout(function() {
		var client_username = ($(this).val());
		if ($('#client_username').val() !== '') {

			$('#username_check').append(' <i class="fa fa-refresh fa-spin"></i>');
			$.ajax({
				url : URL + 'clientsignup/checkExist',
				type : 'post',
				dataType : 'json',
				data : {
					username : client_username
				},
				success : function(response) {
					if (response[0].count == 0) {
						$('#username_check').children('i').remove();
						$('#username_check').children('span').remove();
						$('#username_check').append('<span class="text-success"><small><i> Tên đăng nhập chưa được sử dụng!</small></i></span>');
						$("#submit_reg").unbind('click', eventhandler);
					} else {
						$('#username_check').children('i').remove();
						$('#username_check').children('span').remove();
						$('#username_check').append('<span class="text-danger"><small><i> Tên đăng nhập đã tồn tại!</small></i></span>');
						$("#submit_reg").bind('click', eventhandler);
					}
				},
				complete : function() {

				}
			});
		} else {
			$('#username_check').children('span').remove();
		}
	});
});
function hasEmail() {
}
