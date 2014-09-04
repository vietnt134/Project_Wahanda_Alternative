$(document).ready(function() {
	$('#hidden_change_pass').on('click', function() {

		if ($('#client_change_pass').is(':hidden') == false) {
			$('#client_change_pass').slideUp();
			$('#change_pass_btn').children('span').remove();
			$('#client_old_pass').val('');
			$('#client_pass_1').val('');
			$('#client_pass_2').val('');
		} else {
			$('#client_change_pass').slideDown();
			//window.scrollTo(0,document.body.scrollHeight);
			$('body,html').animate({
				scrollTop : ($(document).height()*50/100)
			});
		}
	});
	loadUserDetail();
});
function loadUserDetail() {
	$.ajax({
		url : URL + 'clientsetting/loadUserDetail',
		type : 'post',
		dataType : 'json',
		success : function(response) {
			$.each(response[0], function(key, value) {
				$('p#' + key).text(value);
			});
			if ($('p#client_sex').text() == 0) {
				$('p#client_sex').html('<i class="fa fa-male"></i>');
			} else if ($('p#client_sex').text() == 1) {
				$('p#client_sex').html('<i class="fa fa-female"></i>');
			}
		}
	});
}

function changePass() {
	var check_change_pass;
	$('#change_pass_btn').children('span').remove();
	$('#change_pass_btn').append('<i class="fa fa-refresh"></i>');
	$.ajax({
		url : URL + 'clientsetting/changePass',
		type : 'post',
		data : {
			client_old_pass : $('#client_old_pass').val(),
			client_pass_1 : $('#client_pass_1').val(),
			client_pass_2 : $('#client_pass_2').val(),
		},
		success : function(response) {
			console.log(response);
			if(response == -2){
				$('#change_pass_btn').children('i').remove();
				$('#change_pass_btn').append('<span class="text-danger"><small><i> Mật khẩu cũ không đúng!</small></i></span>');
			}else if(response == -1){
				$('#change_pass_btn').children('i').remove();
				$('#change_pass_btn').append('<span class="text-danger"><small><i> Không được để rỗng các ô nhập!</small></i></span>');
			}else if(response == 0){
				$('#change_pass_btn').children('i').remove();
				$('#change_pass_btn').append('<span class="text-danger"><small><i> Mật khẩu mới phải lớn > hoặc = 6 ký tự!</small></i></span>');
			}else if(response == 1){
				$('#change_pass_btn').children('i').remove();
				$('#change_pass_btn').append('<span class="text-danger"><small><i> Mật khẩu nhập lại không đúng!</small></i></span>');
			}else if(response == 2){
				$('#change_pass_btn').children('i').remove();
				$('#change_pass_btn').append('<span class="text-danger"><small><i> Không thể đổi mật khẩu!</small></i></span>');
			}else if(response == 200){
				$('#change_pass_btn').children('i').remove();
				$('#change_pass_btn').append('<span class="text-success"><small><i> Đổi mật khẩu thành công!</small></i></span>');
				setTimeout(function(){
					$('#client_change_pass').slideUp();
			    }, 800);
			}
		},
		complete : function(){
		}
	});
}
