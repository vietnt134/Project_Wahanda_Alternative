<div class="container">
	<?php
	Session::init();
	if (isset($_SESSION['checkSignup'])) {
		if (Session::get('checkSignup') == TRUE) {
			echo '<div class="alert alert-block alert-success">';
			echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
			echo '<h4>Chúng mừng bạn!</h4>';
			echo 'Bạn đã đang ký tài khoản thành công vui lòng kiểm tra email để <strong>kích hoạt tài khoản!</strong>';
			echo '</div>';
			unset($_SESSION['checkSignup']);
		}
	}
	?>
</div>
<div id="header-2" class="clearfix">
	<div id="slide"></div>
</div>

<div id="content-wrap">
	<div class="container">
		<div id="search" class="clearfix">
			<h4>BẠN CẦN TÌM</h4>
			<div class="item col-md-7">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-search"></i></span>
					<input type="text" class="form-control" placeHolder="Loại hình dịch vụ...">
				</div>
			</div>
			<div class="item col-md-3">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
					<select class="form-control">
						<option value="" disabled selected>Tại...</option>
						<option value="" >Hà Nội</option>
						<option value="" >Tp Hồ Chí Minh</option>
					</select>
				</div>

			</div>
			<div class="item col-md-2">
				<button type="button" class="btn btn-default btn-block">
					TÌM KIẾM
				</button>
			</div>
		</div>
	</div>

	<div id="service-list" class="container">
		<div class="title">
			<span class="fa-stack"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i> </span>
			<strong style="font-size: 20px;">DỊCH VỤ NỔI BẬT </strong>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="item">
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<div class="clearfix svl-01">
					<span class="rating pull-left"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<span class="count-rating pull-right">345 lượt bình chọn</span>
				</div>
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="clearfix">
					<span class="price pull-left">1.500.000 VND</span>
					<span class="sale-percent pull-right"> <i class="fa fa-arrow-down"></i> GIẢM 15% </span>
				</div>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-sm btn-orange pull-right book-now-btn">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="item">
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<div class="clearfix svl-01">
					<span class="rating pull-left"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<span class="count-rating pull-right">345 lượt bình chọn</span>
				</div>
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="clearfix">
					<span class="price pull-left">1.500.000 VND</span>
					<span class="sale-percent pull-right"> <i class="fa fa-arrow-down"></i> GIẢM 15% </span>
				</div>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-sm btn-orange pull-right book-now-btn">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-4">
			<div class="item">
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<div class="clearfix svl-01">
					<span class="rating pull-left"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<span class="count-rating pull-right">345 lượt bình chọn</span>
				</div>
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="clearfix">
					<span class="price pull-left">1.500.000 VND</span>
					<span class="sale-percent pull-right"> <i class="fa fa-arrow-down"></i> GIẢM 15% </span>
				</div>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-sm btn-orange pull-right book-now-btn">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END DỊCH VỤ NỔI BẬT -->
	<div class="separate"></div>

	<div id="service-new" class="container">
		<div class="title">
			<span class="fa-stack"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-stack-1x fa-inverse">NEW</i> </span>
			<strong style="font-size: 20px;">DỊCH VỤ MỚI NHẤT CHO BẠN</strong>
		</div>

		<div class="col-sm-6 col-md-3 col-padding-5px">
			<div class="item">
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="col-md-4 remove-padding">
					<span class="rating"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<small class="count-rating pull-right">345 lượt đánh giá</small>
				</div>
				<div class="price col-md-5">
					<span>111.500.000 VND</span>
				</div>
				<div class="sale-percent col-md-3">
					<span>GIẢM 15%</span>
				</div>
				<div class="clearfix"></div>
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-xs btn-brown pull-right">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3 col-padding-5px">
			<div class="item">
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="col-md-4 remove-padding">
					<span class="rating"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<small class="count-rating pull-right">345 lượt đánh giá</small>
				</div>
				<div class="price col-md-5">
					<span>111.500.000 VND</span>
				</div>
				<div class="sale-percent col-md-3">
					<span>GIẢM 15%</span>
				</div>
				<div class="clearfix"></div>
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-xs btn-brown pull-right">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3 col-padding-5px">
			<div class="item">
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="col-md-4 remove-padding">
					<span class="rating"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<small class="count-rating pull-right">345 lượt đánh giá</small>
				</div>
				<div class="price col-md-5">
					<span>111.500.000 VND</span>
				</div>
				<div class="sale-percent col-md-3">
					<span>GIẢM 15%</span>
				</div>
				<div class="clearfix"></div>
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-xs btn-brown pull-right">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3 col-padding-5px">
			<div class="item">
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="col-md-4 remove-padding">
					<span class="rating"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<small class="count-rating pull-right">345 lượt đánh giá</small>
				</div>
				<div class="price col-md-5">
					<span>111.500.000 VND</span>
				</div>
				<div class="sale-percent col-md-3">
					<span>GIẢM 15%</span>
				</div>
				<div class="clearfix"></div>
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-xs btn-brown pull-right">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-md-3 col-padding-5px">
			<div class="item">
				<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
				</div>
				<div class="col-md-4 remove-padding">
					<span class="rating"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>
					<small class="count-rating pull-right">345 lượt đánh giá</small>
				</div>
				<div class="price col-md-5">
					<span>111.500.000 VND</span>
				</div>
				<div class="sale-percent col-md-3">
					<span>GIẢM 15%</span>
				</div>
				<div class="clearfix"></div>
				<p align="center" class="name">
					CẮT TÓC HÀN QUỐC MỚI
				</p>
				<p class="description">
					Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........
				</p>
				<div class="clearfix">
					<button data-toggle="modal" data-target="#service_detail" class="btn btn-xs btn-brown pull-right">
						BOOK NOW
					</button>
					<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
				</div>
			</div>
		</div>
	</div>
	<!-- END DỊCH VỤ MỚI NHÂT -->
	<div class="separate"></div>

	<div id="location-new" class="container">
		<div class="title">
			<span class="fa-stack"> <i class="fa fa-map-marker fa-stack-2x"></i> </span>
			<strong style="font-size: 20px;">ĐỊA ĐIỂM MỚI NHẤT CHO BẠN</strong>
		</div>

		<div class="col-sm-6 col-md-3 remove-padding">
			<img class="image img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" >
			<div class="info">
				<div class="info-content clearfix">
					<div class="name">
						SPA SEN
					</div>
					<div class="description">
						Spa cao cấp số 1 Sài Gòn với những dịch vụ thời thượng. Đem đến cho bạn những cảm giác thư giãn và nghỉ ngơi tuyệt vời
					</div>
					<a class="readmore pull-right" href="#">Xem thêm chi tiết >></a>
				</div>
			</div>
			</img>
		</div>
	</div>
	<!-- MODAL -->
	<div id="service_detail" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-max-height="640">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" >
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<br />
					<br />
					<div class="row">
						<div class="well" style="background-color: #000000">
							<div class="row" style="font-size: 16px;">
								<div class="col-md-4" style="color: #FFCC00;">
									<strong>UỐN MI CONG VOLUM</strong>
								</div>
								<div class="col-md-4" style="color: #FFFFFF;">
									<strong>Sun Spa Resort</strong>
								</div>
								<div class="col-md-4">
									<span style="color: #FFCC00;"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span>
									<span style="color: #FFFFFF;">345 lượt bình chọn</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12">
									<img height="190" width="100%" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
								</div>
								<div class="col-md-12">
									<br />
									<nav id="service_nav" class="navbar navbar-default" role="navigation">
										<div class="">
											<ul class="nav navbar-nav">
												<li style="font-size: 20px" class="text-center">
													<a href="#detail"><strong>&nbsp;&nbsp;Chi tiết&nbsp;&nbsp;</strong></a>
												</li>
												<li style="font-size: 20px" class="text-center">
													<a href="#jugg"><strong>&nbsp;&nbsp;Đánh giá&nbsp;&nbsp;</strong></a>
												</li>
												<li style="font-size: 20px" class="text-center">
													<a href="#about_venue"><strong>&nbsp;&nbsp;&nbsp;Về địa điểm này&nbsp;&nbsp;&nbsp;</strong></a>
												</li>
											</ul>
										</div>
									</nav>
								</div>
								<div data-spy="scroll" data-target="#service_nav" class="col-md-12">
									<div id="detail" class="container-fluid">
										<div class="row">
											<div class="col-md-6">
												<span class="service_properties">
													<i style="color: #FDBD0E;" class="fa fa-adjust"></i> <b>Giá</b>
												</span>
											</div>
											<div class="col-md-6">
												<span class="service_properties">420.000 VNĐ</span>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-6">
												<span class="service_properties">
													<i style="color: #FDBD0E;" class="fa fa-adjust"></i> <b>Thời gian</b>
												</span>
											</div>
											<div class="col-md-6">
												<span class="service_properties">30 phút</span>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-6">
												<span class="service_properties">
													<i style="color: #FDBD0E;" class="fa fa-adjust"></i><b> Bạn được lựa chọn</b>
												<span>
											</div>
											<div class="col-md-6">
												<ul class="service_properties">
													<li>
														Cong nhẹ
													</li>
													<li>
														Cong vừa
													</li>
													<li>
														Cong vút
													</li>
												</ul>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-12">
												<i>Chính sách hủy: Trong vòng 24 giờ</i>
											</div>
											<div class="col-md-12">
												<i>Bạn nên biết: Nếu bạn đã mua một e Voucher,
												xin vui lòng liên hệ trước với các địa điểm
												để đặt hẹn chính xác sau khi đã nhận được
												xác nhận đặt hàng</i>
											</div>
										</div>
										<hr />
									</div>
									<div id="jugg" class="container-fluid">
										<div class="row">
											<div class="col-md-12">
												<h4><strong>ĐÁNH GIÁ</strong></h4>
											</div>
											<div class="col-md-12">
												<i>Những đánh giá của khách hàng đã sử dụng dịch vụ này</i>
											</div>
										</div>
										<div class="row" >
											<div class="col-md-12 well" style="padding: 0 10px 0 10px; margin-left: 12px; border: none;">
												<div class="row">
													<div class="col-md-3">
														<span style="color: #FFCC00; font-size: 40px;">4.2</span>
													</div>
													<div class="col-md-7">
														<span><small>điểm đánh giá</small></span>
														<br />
														<span style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
														<br />
														<span><small>169 lượt đánh giá</small></span>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<span>5 sao </span>
													</div>
													<div class="col-md-8">
														<span style="width: 100%" class="progress_bar" ></span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<span>4 sao </span>
													</div>
													<div class="col-md-8">
														<span style="width: 80%" class="progress_bar" ></span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<span>3 sao </span>
													</div>
													<div class="col-md-8">
														<span style="width: 60%" class="progress_bar" ></span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<span>2 sao </span>
													</div>
													<div class="col-md-8">
														<span style="width: 40%" class="progress_bar" ></span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<span>1 sao </span>
													</div>
													<div class="col-md-8">
														<span style="width: 20%" class="progress_bar" ></span>
													</div>
												</div>
											</div>
											<div class="col-md-6 pull-right" style="border-left: 1px solid #CCCCCA;">
												<div class="row">
													<div class="col-md-6">
														<span class="pull-right">Nhiệt tình</span>
													</div>
													<div class="col-md-6">
														<span class="pull-right" style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span class="pull-right">Vệ sinh</span>
													</div>
													<div class="col-md-6">
														<span class="pull-right" style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span class="pull-right">Chất lượng</span>
													</div>
													<div class="col-md-6">
														<span class="pull-right" style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span class="pull-right">Nhân viên</span>
													</div>
													<div class="col-md-6">
														<span class="pull-right" style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span class="pull-right">Giá trị</span>
													</div>
													<div class="col-md-6">
														<span class="pull-right" style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-12">
												<span><b>NAIL</b></span>
												<div class="row">
													<div class="col-md-6">
														<span>Vệ sinh móng</span>
													</div>
													<div class="col-md-6">
														<span style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span>Đắp bột</span>
													</div>
													<div class="col-md-6">
														<span style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span>Sơn nhiều màu</span>
													</div>
													<div class="col-md-6">
														<span style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<span><b>FACE</b></span>
												<div class="row">
													<div class="col-md-6">
														<span>Massage</span>
													</div>
													<div class="col-md-6">
														<span style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<span>Đắp mặt nạ</span>
													</div>
													<div class="col-md-6">
														<span style="color: #FFCC00"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> </span>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<span><a href="">Xem thêm >>></a></span>
											</div>
										</div>
										<hr />
										<div class="media">
											<a class="pull-left" href="#"> <img width="55" height="55" class="media-object" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" alt="avatar"> </a>
											<div class="media-body">
												<h5 class="media-heading"><strong>Việt Nguyễn</strong><small class="pull-right"><i>tham gia thang 6-2014</i></small></h5>
												<small><i>cách đây 3 giờ</i></small>
												<p>
													Nhân viên tận tình, môi trường sạch sẽ, tác phong...<span><a href="">Xem thêm >>></a></span>
												</p>
											</div>
										</div>
										<div class="media">
											<a class="pull-left" href="#"> <img width="55" height="55" class="media-object" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" alt="avatar"> </a>
											<div class="media-body">
												<h5 class="media-heading"><strong>Việt Nguyễn</strong><small class="pull-right"><i>tham gia thang 6-2014</i></small></h5>
												<small><i>cách đây 3 giờ</i></small>
												<p>
													Nhân viên tận tình, môi trường sạch sẽ, tác phong...<span><a href="">Xem thêm >>></a></span>
												</p>
											</div>
										</div>
										<div class="media">
											<a class="pull-left" href="#"> <img width="55" height="55" class="media-object" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" alt="avatar"> </a>
											<div class="media-body">
												<h5 class="media-heading"><strong>Việt Nguyễn</strong><small class="pull-right"><i>tham gia thang 6-2014</i></small></h5>
												<small><i>cách đây 3 giờ</i></small>
												<p>
													Nhân viên tận tình, môi trường sạch sẽ, tác phong...<span><a href="">Xem thêm >>></a></span>
												</p>
											</div>
										</div>
										<div class="media">
											<a class="pull-left" href="#"> <img width="55" height="55" class="media-object" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" alt="avatar"> </a>
											<div class="media-body">
												<h5 class="media-heading"><strong>Việt Nguyễn</strong><small class="pull-right"><i>tham gia thang 6-2014</i></small></h5>
												<small><i>cách đây 3 giờ</i></small>
												<p>
													Nhân viên tận tình, môi trường sạch sẽ, tác phong...<span><a href="">Xem thêm >>></a></span>
												</p>
											</div>
										</div>
										<span><a href="">Xem các đánh giá cũ hơn >>></a></span>
										<hr />
									</div>
									<div id="about_venue" class="container-fluid">
										<div class="row">
											<div class="col-md-12">
												<h4><strong>VỀ ĐỊA ĐIỂM NÀY</strong></h4>
											</div>
											<div class="col-md-12" style="border: 3px solid #CCCCCA; padding: 10px">
												<img height="120" style="" width="100%" src="https://maps.googleapis.com/maps/api/staticmap?sensor=false&amp;zoom=15&amp;size=397x98&amp;maptype=roadmap&amp;markers=icon%3Ahttps%3A%2F%2Fconnect.wahanda.com%2Fassets%2Fmap-marker.png%7C54.54516881%2C-1.27919913">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<h5 class="text-center"><b>SUNSPA RESORT</b></h5>
												<p class="text-center">Đ.2, P.Bình An, Q.2, TP.HCM | SĐT:0903676222 | Email:vietnt134@gmail.com</p>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-12">
												<p>SUNSPA RESORT được thành lập năm 2007 
												với các dịch vụ dành cho phái nữ, qua nhiều năm kinh nghiệm 
												chúng tôi đã nhận được sự tín nhiệm từ khách hàng 
												và ngày một nâng cao trình độ phục vụ</p>
												<p class="text-right"><a href="">Xem thêm >>></a></p>
											</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-3">
												<p><b>GIỜ MỞ CỬA</b></p>
											</div>
											<div class="col-md-9">
												<p>Thứ 2 - Thứ 6 ........ 07am - 20pm</p>
												<p>Thứ 7 - Chủ nhật ... 07am - 20pm</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row" style="border: 2px solid #CCCCCA;">
								<div class="col-md-12" style="padding: 10px;">
									<div class="row">
										<div class="col-md-6">
											<button class="btn btn-block btn-black">ĐẶT HẸN</button>
										</div>
										<div class="col-md-6">
											<button class="btn btn-block btn-black">MUA VOUCHER</button>
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-12">
											<p class="text-center">&nbsp;&nbsp;&nbsp;AUGUST 2014&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></p>
										</div>
									</div>
									<div class="row" id="date_booking">
										<div class="col-md-12 text-center">
											<span>T2</span>
											<span>T3</span>
											<span>T4</span>
											<span>T5</span>
											<span>T6</span>
											<span>T7</span>
											<span>CN</span>
										</div>
									</div>
									<div class="row" id="days_booking" style="margin-top: 6px;">
										<div class="col-md-12 text-center">
											<span class="active">12</span>
											<span>13</span>
											<span>14</span>
											<span>15</span>
											<span>16</span>
											<span>17</span>
											<span>18</span>
										</div>
									</div>
									<div id="time_booking">
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">08:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">09:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">10:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">11:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">12:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">13:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">14:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">15:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
										<hr />
										<div class="row">
											<div class="col-md-offset-1 col-md-6">16:00am</div>
											<div class="col-md-5">400.000 Vnđ</div>
										</div>
									</div>
									<br />
									<div class="row">
										<div class="col-md-12">
											<button style="height: 48px;box-shadow: 0 0 6px #9A9797;" class="btn btn-block btn-black">
												<span>Tổng cộng : </span>
												<span>400.000 Vnđ</span>
												<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
												<span class="span-separate"></span>
												<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
												<span>ĐẶT</span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="border: none;" class="modal-footer" id="footer_login">
					<button type="button" class="btn btn-black" data-dismiss="modal">
						Đóng
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
</div>
