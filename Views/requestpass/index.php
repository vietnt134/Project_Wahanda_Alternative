<div id="site_container" class="container">
	<div class="row well">
		<div class="col-sm-offset-1 col-sm-8" id="content">
			<h4 class="page-header"><strong>Yêu cầu mật khẩu</strong></h4>
			<form class="form-horizontal" id="password_request_form" name="password_request_form" action="<?php echo URL; ?>requestpass/sendRequestPassword" method="post">
				<div class="form-group">
					<p class="col-sm-12">
						Quên mật khẩu? Đừng lo lắng, chúng tôi sẽ giúp bạn đăng nhập trong nháy mắt - 
						chỉ cần nhập địa chỉ email của bạn vào ô bên dưới, sau đó đi kiểm tra hộp thư đến của bạn. 
						Chúng tôi sẽ gửi một đường dẫn cho phép bạn nhập mật khẩu mới.
					</p>
				</div>
				<div class="form-group">
					<p class="col-sm-12" id="email_check">E-mail của bạn</p>
					<div class="col-sm-6">
						<input class="form-control required email" type="text" name="email_address" id="email_address">
					</div>
					<div class="col-sm-6"></div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button class="btn btn-danger pull-right" id="re_submit" type="submit">
							<span>Gửi yêu cầu đổi mật khẩu</span>
						</button>
					</div>
				</div>
			</form>
			<p id="login_message_authentication_error" class="error" style="display:none">
				Sorry, we couldn't log you in.
			</p>
			<p id="login_message_external_authentication_required" class="error" style="display:none">
				Sorry. This account is accessed using facebook connect
			</p>
		</div>
	</div>
</div>
<!-- Le Transition -->
<style>
	#password_request_form *, .well {
		border-radius: 0px !important;
	}
	#password_request_form{
		border: none !important;
	}
	#password_request_form p {
		font-weight: normal;
		color: #5B5C56;
	}
	input.error{
		position: relative;
		border-left: 3px solid #cc3333;
	}
	span.error{
		position:absolute;
		background-color: #D2322D;
		left: 65%;
		bottom: 115%;
		color: #fff;
		padding: 1%;
		border: solid;
		border-color: #f5f5f5 transparent;
		border-width: 0px 0px 12px 12px;
		content: "";
		box-shadow: -3px -3px 3px #9A9797;
	}
</style>