<div class="row">
	<div class="col-sm-offset-2 col-sm-8">
		<h1 class="text-center">ĐĂNG KÝ TÀI KHOẢN MIỄN PHÍ</h1>
		<p class="text-center">
			<i>Có được danh sách và tham gia hàng ngàn doanh nghiệp đã có trên Wahanda</i>
		</p>
	</div>

	<div class="well col-sm-offset-2 col-sm-8">
		<div class="row">
			<div class="col-sm-7">
				<form class="form-horizontal" id="business_signup_form" method="post" action="./venuedetail">
					<div class="form-group">
						<p class="col-sm-12">
							<strong>TÊN THƯƠNG MẠI</strong>
						</p>
						<div class="col-sm-12">
							<input name="business_name" class="form-control required" type="text" />
							<small><i>Tên bạn sẽ dùng để quảng cáo với khách hàng</i></small>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>POST CODE</strong>
						</p>
						<div class="col-sm-6">
							<input name="post_code" class="form-control required" type="text" />
						</div>
						<div class="col-sm-6">
							<select name="country_id" class="form-control">
								<option value="234">United Kingdom</option>
								<option value="235">United States</option>
								<option value="87">France</option>
								<option value="94">Germany</option>
								<option value="205">Spain</option>
								<option value="117">Italy</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>HỌ TÊN</strong>
						</p>
						<div class="col-sm-12">
							<input name="full_name" class="form-control required" type="text" />
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>EMAIL</strong>
						</p>
						<div class="col-sm-12">
							<input name="email" class="form-control required email" type="text" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-warning pull-right">
								<span style="color: #000" ><strong>TIẾP TỤC</strong></span>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-5" id="about_me">
				<h4><strong>MỘT CHÚT VỀ CHÚNG TÔI</strong></h4>
				<hr />
				<p><strong><i>1)</i> </strong> We're the world’s fastest growing online health and beauty marketplace </p>
				<p><strong><i>2)</i> </strong> Getting psted improves your web presence, making your business easier to find </p>
				<p><strong><i>3)</i> </strong> Our free onpne booking system makes managing your business simple and gives you the option to sell through Wahanda </p>
				<p><strong><i>4)</i> </strong> Pay just 20% plus  VAT commission on sales we send you and receive payment within 15 days </p>
				<p><strong><i>5)</i> </strong> Any data you share with us belongs to you and we promise to keep it secure </p>
			</div>
		</div>
	</div>
</div>
<!-- Le Transiton -->
<style>
	#business_signup_form *, .well {
		border-radius: 0px !important;	
	}
	#business_signup_form p, #about_me h4 {
		font-weight: normal;
		color: #5B5C56 !important;
	}
	#country_id {
		width: 38%;
		margin-left: 3%;
	}
	input.error {
		position: relative;
		border-left: 2px solid #cc3333;
	}
	span.error {
		position: absolute;
		background-color: #D2322D;
		left: 60%;
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
</html>