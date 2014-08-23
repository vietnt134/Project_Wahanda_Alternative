<div class="row">
	<div class="col-sm-offset-2 col-sm-8">
		<h1 class="text-center">MỘT CHÚT NỮA THÔI...</h1>
		<p class="text-center">
			<i>Tham gia hàng ngàn doanh nghiệp đã có trên Wahanda</i>
		</p>
	</div>

	<div class="well col-sm-offset-2 col-sm-8">
		<div class="row">
			<div class="col-sm-7">
				<form class="form-horizontal" id="venue_signup_form" method="post" action="./venuedetail">
					<div class="form-group">
						<p class="col-sm-12">
							<strong>TÊN THƯƠNG MẠI</strong>
						</p>
						<div class="col-sm-12" id="business_name">
							<h4><strong>TÊN THƯƠNG MẠI CỦA BẠN</strong></h4>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>LOẠI HÌNH KINH DOANH</strong>
						</p>
						<div class="col-sm-12">
							<select name="business_type" class="form-control">
								<option value="10">Salon</option>
								<option value="21">Hair Salon</option>
								<option value="1">Hotel Spa</option>
								<option value="5">Day Spa</option>
								<option value="50">Skin Clinic</option>
								<option value="48">Massage &amp; Therapy Centre</option>
								<optgroup label="">
									<option value="28">Airport Spa</option>
									<option value="43">Barbershop</option>
									<option value="46">Beauty Institute</option>
									<option value="45">Beauty School</option>
									<option value="16">Bootcamp</option>
									<option value="47">Brow Bar</option>
									<option value="4">Casino Spa</option>
									<option value="20">Chiropody Clinic</option>
									<option value="49">Chiropractic Clinic</option>
									<option value="36">Cruise Ship Spa</option>
									<option value="35">Dance Studio</option>
									<option value="7">Dental Spa</option>
									<option value="2">Destination Spa</option>
									<option value="12">Eye Clinic</option>
									<option value="18">Fat Farm</option>
									<option value="51">Fish Spa</option>
									<option value="9">Fitness Centre</option>
									<option value="24">Golf Course</option>
									<option value="39">Golf Range</option>
									<option value="15">Gym</option>
									<option value="41">Hammam</option>
									<option value="59">Health Club</option>
									<option value="29">Health Farm</option>
									<option value="53">Makeup Studio</option>
									<option value="38">Martial Arts Centre</option>
									<option value="6">Medical Spa</option>
									<option value="42">Mobile Beauty</option>
									<option value="14">Mobile Fitness</option>
									<option value="57">Mobile Massage</option>
									<option value="8">Mobile Spa</option>
									<option value="27">Nail Salon</option>
									<option value="55">Nutrition Centre</option>
									<option value="58">Online Retailer</option>
									<option value="60">Photographic Studio</option>
									<option value="22">Pilates Studio</option>
									<option value="3">Real Estate Spa</option>
									<option value="56">Surf School</option>
									<option value="25">Swimming Pool</option>
									<option value="37">Tanning Salon</option>
									<option value="23">Tennis Court</option>
									<option value="54">Treatment Room - Beauty</option>
									<option value="26">Treatment Room - Spa</option>
									<option value="44">Treatment Room - Wellness</option>
									<option value="40">Waxing Salon</option>
									<option value="52">Weight Loss Clinic</option>
									<option value="11">Wellness Centre</option>
									<option value="17">Yoga Retreat</option>
									<option value="13">Yoga Studio</option>
								</optgroup>
							</select>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>ĐỊA CHỊ</strong>
						</p>
						<div class="col-sm-12">
							<input name="address" class="form-control required" type="text" />		
							<p>
								post code, NƯỚC
							</p>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>SỐ ĐIỆN THOẠI</strong>
						</p>
						<div class="col-sm-12">
							<input name="full_name" class="form-control required number" minlength="8" type="text" />
							<small><i>Làm sao để chúng tôi liên lạc với bạn?</i></small>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>QUẢN LÝ ĐƠN ĐẶT HÀNG BẰNG?</strong>
						</p>
						<div class="col-sm-12">
							<select id="manage_booking" class="form-control">
								<option value="PP"> Bút &amp; Giấy </option>
								<option value="OS"> Hệ thống lịch trực tuyến </option>
								<option value="DS"> Hệ thống lịch cài trên máy (desktop) </option>
								<option value="CS"> Một số phần mềm lịch khác (Google Calendar, Outlook, v.v...) </option>
							</select>
						</div>
					</div>
					<div class="form-group" id="manage_booking_spec" style="display: none;">
						<div class="col-sm-12">
							<input type="text"class="form-control" name="" placeholder="Làm ơn ghi rõ"/>
						</div>
					</div>
					<div class="form-group">
						<p class="col-sm-12">
							<strong>LÝ DO CHÍNH MÀ BẠN MUỐN ĐĂNG KÝ LÀ?</strong>
						</p>
						<div class="col-sm-12">
							<select class="form-control" id="signing_reason_type">
								<option value="NS"> Tìm khách hàng mới và tăng doanh số bán hàng </option>
								<option value="FS"> Hệ thống đặt hàng miễn phí </option>
								<option value="BO"> Cả 2 </option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9">
							<p class="pull-right"> 
									Bằng việc gửi form này, bạn đồng ý với 
									<a href="https://www.wahanda.com/info/terms-of-use/" target="_blank"> 
										<strong> 
											Điều khoản và Điều kiện 
										</strong> 
									</a> của chúng tôi 
							</p>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-warning pull-right">
								<span style="color: #000" ><strong>ĐĂNG KÝ</strong></span>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-5" id="about_me">
				<h4><strong>CHO CHÚNG TỐI BIẾT THÊM VỀ BẠN</strong></h4>
				<hr />
				<p>
					You’re just one step away from signing up with Wahanda. We can’t wait to
					have you on board but first we need a few details from you.
				</p>
				<p>Please fill out the form on the left, click <strong>Sign up</strong> 
					and that’s it. Welcome to the family.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Le Transiton -->
<style>
	#venue_signup_form *, .well {
		border-radius: 0px !important;
	}
	#venue_signup_form p, #venue_signup_form h4, #about_me h4 {
		font-weight: normal;
		color: #5B5C56 !important;
	}
	input.error {
		position: relative;
		border-left: 2px solid #cc3333;
	}
	span.error {
		position: absolute;
		background-color: #D2322D;
		left: 76%;
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