$(document).ready(function() {
	loadServiceList();
});
$(document).on('click', '#login_btn', function() {
	//alert(window.location.href);
	//alert(URL);
	$('#email_login').val('');
	$('#pass_login').val('');
	$('#footer_login').children('i').remove();
	$('#footer_login').children('span').remove();
});
$('#login_modal').on('shown.bs.modal', function() {
	$('#email_login').focus();
});
/*
 LOAD SERVICE LIST
 */
function loadServiceList() {
	$.ajax({
		url : URL + 'index/loadServiceList',
		type : 'post',
		dataType : 'json',
		success : function(response) {
			console.log(response);
			var html = '';
			$.each(response, function(key, value) {
				html += '<div class="col-sm-6 col-md-4 top_service_items" style="display : none;">';
				html += '<div class="item">';
				html += '<input id="user_service_id" name="user_service_id" type="hidden" value="'+value.user_service_id+'"/>';
				html += '<p align="center" class="name" data-toggle="modal" data-target="#service_detail">';
				html += value.user_service_name.toUpperCase();
				html += '</p>';
				html += '<div class="clearfix svl-01">';
				html += '<span class="rating pull-left"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>';
				html += '<span class="count-rating pull-right">';
				html += '345 lượt bình chọn';
				html += '</span>';
				html += '</div>';
				html += '<div class="image" class="clearfix"  data-toggle="modal" data-target="#service_detail">';
				html += '<img class="img-responsive" alt="Responsive image" src="'+ URL +'public/assets/img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />';
				html += '</div>';
				html += '<div class="clearfix">';
				html += '<span class="price pull-left">'+value.user_service_sale_price+' VNĐ</span>';
				html += '<span class="sale-percent pull-right"> <i class="fa fa-arrow-down"></i>'+ ' GIẢM '+ Math.floor((value.user_service_full_price-value.user_service_sale_price)/value.user_service_full_price*100)+'%</span>';
				html += '</div>';
				html += '<p class="description">' + value.user_service_description;
				html += '</p>';
				html += '<div class="clearfix">';
				html += '<button data-toggle="modal" data-target="#service_detail" class="btn btn-sm btn-orange pull-right book-now-btn">';
				html += 'BOOK NOW';
				html += '</button>';
				html += '<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>';
				html += '</div>';
				html += '</div>';
				html += '</div>';
			});
			if(response[0] == null){
				$('#top_service').append('<div id="error_loading" style="color : #A1A1A1;display : none" class="text-center"><h4>Xin lỗi quý khách, hiện không có dịch vụ nào cả!</h4></div>');
				setTimeout(function(){
					$('#error_loading').fadeIn();
				},600);			
			}else{
				$('#error_loading').remove();
			}
			$('#top_service').append(html);
		},
		complete : function(){
			$('#waiting_for_top_service').fadeOut(function(){
				$('.top_service_items').fadeIn();
			});
			
			$('.top_service_items').on('click',function(){
				USER_SERVICE_ID = $(this).find('#user_service_id').val();
				console.log(USER_SERVICE_ID);
			});
		}
	});
}

/*
 END LOAD SERVICE LIST
 */

/*
 LOGIN
 */
function enterEvent(event) {
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if (keycode == '13') {
		login();
	}
}

function login() {
	var email_login = $('#email_login').val();
	var pass_login = $('#pass_login').val();
	var login_flg;
	var user_name;
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
					user_name = response[0].client_username;
				}
			},
			complete : function() {
				if (login_flg == 0) {
					$('#footer_login').children('i').remove();
					$('#footer_login').prepend('<span class="text-danger"><small><i> Đăng nhập thất bại!</small></i></span>');
				} else if (login_flg == 1) {
					$('#footer_login').children('i').remove();
					$('#login_modal').modal('hide');
					//window.location = URL;
					$('#login_group').children().remove();
					$('#login_group').append('<div class="col-sm-12 remove-padding" style="margin-bottom: 10px;">' + '<div class="dropdown">' + '<a id="dropdown_profile" data-toggle="dropdown" class="btn btn-warning btn-block dropdown-toggle" style="border-radius: 4px;">' + 'Xin chào bạn: <i class="fa fa-user"></i> ' + user_name + ' <span class="caret"></span>' + '</a>' + '<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdown_profile">' + '<li role="presentation"><a role="menuitem" tabindex="-1" href="' + URL + 'clientsetting"><i class="fa fa-wrench"></i> Quản lý tài khoản</a></li>' + '<li role="presentation" class="divider"></li>' + '<li role="presentation"><a role="menuitem" tabindex="-1" onclick="javascript:logout()" style="cursor: pointer;"><i class="fa fa-power-off"></i> Thoát</a></li>' + '</ul>' + '</div>' + '</div>');
					var http_path = window.location.href.replace('http:', '');
					var https_path = window.location.href.replace('https:', '');
					if (http_path != URL && https_path != URL) {
						window.location = URL;
					}
				}
			}
		});
	} else {
		$('#footer_login').children('span').remove();
		$('#footer_login').prepend('<span class="text-danger"><small><i> Hãy nhập email và mật khẩu!</small></i></span>');
	}
}

function logout() {
	$.ajax({
		url : URL + 'clientlogin/clientLogout',
		complete : function() {
			$('#login_group').children().remove();
			$('#login_group').append('<div class="col-sm-5 remove-padding">' + '<button id="login_btn" class="btn btn-block login-btn" data-toggle="modal" data-target="#login_modal" type="button">Đăng nhập</button>' + '</div>' + '<div class="col-sm-2"></div>' + '<div class="col-sm-5 remove-padding">' + '<button class="btn btn-block login-face-btn" type="button">Login Face</button>' + '</div>');
			var http_path = window.location.href.replace('http:', '');
			var https_path = window.location.href.replace('https:', '');
			if (http_path != URL && https_path != URL) {
				window.location = URL;
			}
		}
	});
}

/*
 END LOGIN
 */