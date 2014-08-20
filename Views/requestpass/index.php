<div id="site_container" class="container">
	<div class="row well">
		<div class="col-sm-offset-1 col-sm-8" id="content">
			<h4 class="page-header"><strong>Yêu cầu mật khẩu</strong></h4>
			<form class="form-horizontal" id="password_request_form" name="password_request_form" method="post">
				<div class="form-group">
					<p class="col-sm-12 text-muted">
						Quên mật khẩu? Đừng lo lắng, chúng tôi sẽ giúp bạn đăng nhập trong nháy mắt - 
						chỉ cần nhập địa chỉ email của bạn vào ô bên dưới, sau đó đi kiểm tra hộp thư đến của bạn. 
						Chúng tôi sẽ gửi một đường dẫn cho phép bạn nhập mật khẩu mới.
					</p>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">E-mail của bạn</label>
					<div class="col-sm-5">
						<input class="form-control" type="text" name="email_address" id="email_address">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button class="btn btn-danger pull-right" type="submit">
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
	* {
		border-radius: 0px !important;
	}
</style>