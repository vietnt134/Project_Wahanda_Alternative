<div class="container">
	<div class="row">
		<div class="col-md-offset-1 col-md-10 well">
			<h2 class="page-header text-center text-warning"><i class="fa fa-gear"></i>&nbsp;&nbsp;&nbsp;QUẢN LÝ TÀI KHOẢN</i></h2>
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>EMAIL :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_email"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>HỌ TÊN :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_name"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>GIỚI TÍNH :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_sex"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>ĐIỆN THOẠI :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_phone"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>USERNAME :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_username"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>CREDIT POINT :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_creditpoint"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-offset-3 col-md-3"><p class=""><strong>GIFT POINT :</strong></p></div>
				<div class="col-md-6"><p class="text-warning" id="client_giftpoint"></p></div>
			</div>
			<br />
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center text-warning page-header">
						<a id="hidden_change_pass" style="cursor: pointer;"><i class="fa fa-shield"></i>&nbsp;&nbsp;&nbsp;ĐỔI MẬT KHẨU</i></a>
					</h2>
				</div>
			</div>
			<br />
			<div class="row" id="client_change_pass" style="display: none;">
				<!-- <div class="col-md-offset-3 col-md-3"><p class=""><strong>ĐỔI MẬT KHẨU :</strong></p></div> -->
				<div class="col-md-12">
					<form class="form-horizontal">
						<div class="form-group">
							<span class="control-label col-md-4">Mật khẩu cũ : </span>
							<div class="col-md-5">
								<input type="password" class="form-control" name="client_old_pass" id="client_old_pass" placeholder="Nhập mật khẩu cũ..."/>
							</div>
						</div>
						<div class="form-group">
							<span class="control-label col-md-4">Mật khẩu mới (1) : </span>
							<div class="col-md-5">
								<input type="password" class="form-control" name="client_pass_1" id="client_pass_1" placeholder="Nhập mật khẩu mới..."/>
							</div>
						</div>
						<div class="form-group">
							<span class="control-label col-md-4">Mật khẩu mới (2) : </span>
							<div class="col-md-5">
								<input type="password" class="form-control" name="client_pass_2" id="client_pass_2" placeholder="Nhập lại mật khẩu mới..."/>
							</div>
						</div>
						<div class="form-group">
							<span class="control-label col-md-4"></span>
							<div class="col-md-6" id="change_pass_btn">
								<a class="btn btn-warning" onclick="changePass()">Đổi mật khẩu</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			<br />
		</div>
	</div>
</div>
<style>
	p{
		font-size: 16px;
	}
</style>