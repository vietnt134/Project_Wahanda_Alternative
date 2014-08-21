<div class="container">
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="row section-title text-center">
				<h2>- CREATE A COMPANY PROFILE -</h2>
				<span><i class="text-muted">Tell us a bit about yourself and we’ll set up your profile so
					you can post reviews, ask the Wahanda community questions,
					and book even faster next time.</i> </span>
			</div>
			<br />
		</div>
		<div class="col-sm-offset-2 col-sm-8 well" style="border: none;">
			<form class="form-horizontal" method="post" id="register_form">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<p class="col-sm-6">
								EMAIL
							</p>
							<div class="col-sm-12">
								<input class="form-control email required" type="email" id="email_address" name="email_address">
							</div>
						</div>
						<div class="form-group">
							<p class="col-sm-6">
								HỌ
							</p>
							<div class="col-sm-12">
								<input class="form-control required" type="text" id="first_name" name="first_name">
							</div>
						</div>
						<div class="form-group">
							<p class="col-sm-6">
								TÊN
							</p>
							<div class="col-sm-12">
								<input class="form-control required" type="text" id="last_name" name="last_name">
							</div>
						</div>
						<div class="form-group">
							<p class="col-sm-6">
								TÊN ĐĂNG NHẬP <i title='Bạn sẽ được biết đến trên cộng đồng Wahanda qua tên đăng nhập, ít nhất 5 ký tự, số hoặc "-".' class="fa fa-question-circle text-muted" id="user_des"></i>
							</p>
							<div class="col-sm-12">
								<input class="form-control required" type="text" id="profile" name="profile">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="checkbox-inline">
									<p>
										<input type="checkbox" name="sex" id="sex" value="1" checked="checked"/>
										Nhận thư thông báo của chúng tôi với các tin tức và độc quyền
										phương pháp điều trị và luôn bên bạn
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<p class="col-sm-6">
								MẬT KHẨU <i title="Ít nhất là 6 ký tự" class="fa fa-question-circle text-muted" id="pass_des"></i>
							</p>
							<div class="col-sm-12">
								<input class="form-control required" minlength="6" type="password" id="password" name="password">
							</div>
						</div>
						<div class="form-group">
							<p class="col-sm-6">
								POST CODE <i title="Cho chúng tôi biết bạn đang ở đâu và chúng tôi sẽ giúp bạn tìm những địa điểm tuyệt vời gần đó." class="fa fa-question-circle text-muted" id="postcode_des"></i>
							</p>
							<div class="col-sm-12">
								<input class="form-control required" type="text" id="postcode" name="postcode">
							</div>
						</div>
						<div class="form-group">
							<p class="col-sm-6">
								BẠN LÀ
							</p>
							<div class="col-sm-12">
								<div class="radio-inline">
									<p>
										<input type="radio" name="sex" id="sex" value="1" checked="checked"/>
										Nữ
									</p>
								</div>
								<div class="radio-inline">
									<p>
										<input type="radio" name="sex" id="sex" value="0" />
										Nam
									</p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<p class="col-sm-6"></p>
							<br />
							<div class="col-sm-12">
								<p>
									<i> Bằng việc gửi form này, bạn đồng ý với 
										<a href="https://www.wahanda.com/info/terms-of-use/" target="_blank">
											<strong> Điều khoản và Điều kiện </strong>
										</a> của chúng tôi 
									</i>
								</p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-warning pull-right">
									<span style="color: #000000">
										<strong>
											GIA NHẬP WAHANDA
										</strong>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- le javascript -->
<script src="<?php echo ASSETS; ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ASSETS; ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo ASSETS; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo ASSETS; ?>/js/messages_vi.js"></script>
<!-- Le Transition -->
<style>
	* {
		border-radius: 0px !important;	
	}
	#register_form{
		border: none !important;
	}
	#register_form p {
		color: #5B5C56;
	}
	#register_form .fa-question-circle:hover{
		color: #000000;
	}
	.tooltip{
		font-size: 13px;
	}
	input.error{
		position: relative;
		border-left: 2px solid #cc3333;
	}
	span.error{
		position:absolute;
		background-color: #D2322D;
		left: 70%;
		bottom: 105%;
		color: #fff;
		padding: 1%;
		border: solid;
		border-color: #f5f5f5 transparent;
		border-width: 0px 0px 12px 12px;
		content: "";
	}
</style>
<script>
	$(document).ready(function() {
		$("#user_des, #pass_des, #postcode_des").tooltip({
			placement : 'right',
			html : true,
			container : 'body',
			delay : 0
		});
	});
	$("#register_form").validate({
		errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
		rules : {
			rePassword : {
				equalTo : "#password" // So sánh trường repassword với trường có id là password
			},
		}
	});
</script>