$(document).on('click','#login_btn',function(){
	//alert(window.location.href);
	//alert(URL);
	$('#email_login').val('');
	$('#pass_login').val('');
	$('#footer_login').children('i').remove();
	$('#footer_login').children('span').remove();
});
$('#login_modal').on('shown.bs.modal', function () {
    $('#email_login').focus();
});
function enterEvent(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13'){
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
					$('#login_group').append('<div class="col-sm-12 remove-padding" style="margin-bottom: 10px;">'+
								'<div class="dropdown">'+ 
                        			'<a id="dropdown_profile" data-toggle="dropdown" class="btn btn-warning btn-block dropdown-toggle" style="border-radius: 4px;">'+ 
                        				'Xin chào bạn: <i class="fa fa-user"></i> '+ user_name +' <span class="caret"></span>'+
                        			'</a>'+
                        			'<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdown_profile">'+
									    '<li role="presentation"><a role="menuitem" tabindex="-1" href="'+URL+'clientsetting"><i class="fa fa-wrench"></i> Quản lý tài khoản</a></li>'+
									    '<li role="presentation" class="divider"></li>'+
									    '<li role="presentation"><a role="menuitem" tabindex="-1" onclick="javascript:logout()" style="cursor: pointer;"><i class="fa fa-power-off"></i> Thoát</a></li>'+
									'</ul>'+
								'</div>'+                  		                        			
                        	'</div>');
                    var http_path = window.location.href.replace('http:','');
			        var https_path = window.location.href.replace('https:','');	       
			        if(http_path != URL && https_path != URL){
			        	window.location = URL;
			        }
				}
			}
		});
	}else{
		$('#footer_login').children('span').remove();
		$('#footer_login').prepend('<span class="text-danger"><small><i> Hãy nhập email và mật khẩu!</small></i></span>');
	}
}

function logout(){
	$.ajax({
		url: URL + 'clientlogin/clientLogout',
		complete : function(){
			$('#login_group').children().remove();
			$('#login_group').append('<div class="col-sm-5 remove-padding">'+
	                        		   '<button id="login_btn" class="btn btn-block login-btn" data-toggle="modal" data-target="#login_modal" type="button">Đăng nhập</button>'+
	                        		 '</div>'+
	                        		 '<div class="col-sm-2"></div>'+
	                        		 '<div class="col-sm-5 remove-padding">'+
	                            	   '<button class="btn btn-block login-face-btn" type="button">Login Face</button>'+
	                       		 	 '</div>');
	        var http_path = window.location.href.replace('http:','');
	        var https_path = window.location.href.replace('https:','');	       
	        if(http_path != URL && https_path != URL){
	        	window.location = URL;
	        }
		}
	});
}
