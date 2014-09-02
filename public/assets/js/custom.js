$(document).ready(function(){
	$('#login_btn').click(function(){
		$('#email_login').val('');
		$('#pass_login').val('');
		$('#footer_login').children('i').remove();
		$('#footer_login').children('span').remove();
	});
});
function login() {
	var email_login = $('#email_login').val();
	var pass_login = $('#pass_login').val();
	var login_flg;
	if (email_login != '' && pass_login != '') {
		$('#footer_login').children('span').remove();
		$('#footer_login').prepend('<i class="fa fa-refresh fa-spin"></i>');
		$.ajax({
			url : URL + 'clientlogin/clientLogin',
			type : 'post',
			dataType : 'json',
			data : {
				email : email_login,
				pass : pass_login
			},
			success : function(response) {
				if (response[0] == null) {
					login_flg = 0;
				} else {
					login_flg = 1;
				}
			},
			complete : function() {
				if (login_flg == 0) {
					$('#footer_login').children('i').remove();
					$('#footer_login').prepend('<span class="text-danger"><small><i> Đăng nhập thất bại!</small></i></span>');
				} else if (login_flg == 1) {
					$('#footer_login').children('i').remove();
					$('#login_modal').modal('hide');
					window.location = URL;
				}
			}
		});
	}else{
		$('#footer_login').children('span').remove();
		$('#footer_login').prepend('<span class="text-danger"><small><i> Hãy nhập email và mật khẩu!</small></i></span>');
	}
}
