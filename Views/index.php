<div class="container">
	<?php
		Session::init();
		if(isset($_SESSION['checkSignup'])){
			if(Session::get('checkSignup') == TRUE){
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
				<button type="button" class="btn btn-default btn-block">TÌM KIẾM</button>
			</div>
		</div>
	</div>

	<div id="service-list" class="container">
		<div class="title">
			<span class="fa-stack">
			  	<i class="fa fa-circle fa-stack-2x"></i>
			  	<i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
			</span> 
			<strong style="font-size: 20px;">DỊCH VỤ NỔI BẬT </strong>
		</div>

		<div class="col-sm-6 col-md-4">
	  		<div class="item">
	  			<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<div class="clearfix svl-01">
		      		<span class="rating pull-left">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
		      		<span class="count-rating pull-right">345 lượt bình chọn</span>
		      	</div>
		      	<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
		      	</div>
		      	<div class="clearfix">
		      		<span class="price pull-left">1.500.000 VND</span>
		      		<span class="sale-percent pull-right">
		      			<i class="fa fa-arrow-down"></i> GIẢM 15%
		      		</span>
		      	</div>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-sm btn-orange pull-right book-now-btn"> BOOK NOW </button>
		      		<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
		      	</div>
		    </div>
	  	</div>

	  	<div class="col-sm-6 col-md-4">
	  		<div class="item">
	  			<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<div class="clearfix svl-01">
		      		<span class="rating pull-left">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
		      		<span class="count-rating pull-right">345 lượt bình chọn</span>
		      	</div>
		      	<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
		      	</div>
		      	<div class="clearfix">
		      		<span class="price pull-left">1.500.000 VND</span>
		      		<span class="sale-percent pull-right">
		      			<i class="fa fa-arrow-down"></i> GIẢM 15%
		      		</span>
		      	</div>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-sm btn-orange pull-right book-now-btn"> BOOK NOW </button>
		      		<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
		      	</div>
		    </div>
	  	</div>

	  	<div class="col-sm-6 col-md-4">
	  		<div class="item">
	  			<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<div class="clearfix svl-01">
		      		<span class="rating pull-left">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
		      		<span class="count-rating pull-right">345 lượt bình chọn</span>
		      	</div>
		      	<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
		      	</div>
		      	<div class="clearfix">
		      		<span class="price pull-left">1.500.000 VND</span>
		      		<span class="sale-percent pull-right">
		      			<i class="fa fa-arrow-down"></i> GIẢM 15%
		      		</span>
		      	</div>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-sm btn-orange pull-right book-now-btn"> BOOK NOW </button>
		      		<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
		      	</div>
		    </div>
	  	</div>
	</div> <!-- END DỊCH VỤ NỔI BẬT -->
	<div class="separate"></div>

	<div id="service-new" class="container">
		<div class="title">
			<span class="fa-stack">
			  	<i class="fa fa-circle fa-stack-2x"></i>
			  	<i class="fa fa-stack-1x fa-inverse">NEW</i>
			</span> 
			<strong style="font-size: 20px;">DỊCH VỤ MỚI NHẤT CHO BẠN</strong>
		</div>

		<div class="col-sm-6 col-md-3 col-padding-5px">
		    <div class="item">
		    	<div class="image" class="clearfix">
					<img class="img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />
		      	</div>
		      	<div class="col-md-4 remove-padding">
		      		<span class="rating">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
	      			<small class="count-rating pull-right">345 lượt đánh giá</small>
		      	</div>
		      	<div class="price col-md-5">
		      		<span>111.500.000 VND</span>
		      	</div>
		      	<div class="sale-percent col-md-3">
		      		<span>GIẢM 15%</span>
		      	</div>
		      	<div class="clearfix"></div>
		      	<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-xs btn-brown pull-right"> BOOK NOW </button>
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
		      		<span class="rating">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
	      			<small class="count-rating pull-right">345 lượt đánh giá</small>
		      	</div>
		      	<div class="price col-md-5">
		      		<span>111.500.000 VND</span>
		      	</div>
		      	<div class="sale-percent col-md-3">
		      		<span>GIẢM 15%</span>
		      	</div>
		      	<div class="clearfix"></div>
		      	<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-xs btn-brown pull-right"> BOOK NOW </button>
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
		      		<span class="rating">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
	      			<small class="count-rating pull-right">345 lượt đánh giá</small>
		      	</div>
		      	<div class="price col-md-5">
		      		<span>111.500.000 VND</span>
		      	</div>
		      	<div class="sale-percent col-md-3">
		      		<span>GIẢM 15%</span>
		      	</div>
		      	<div class="clearfix"></div>
		      	<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-xs btn-brown pull-right"> BOOK NOW </button>
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
		      		<span class="rating">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
	      			<small class="count-rating pull-right">345 lượt đánh giá</small>
		      	</div>
		      	<div class="price col-md-5">
		      		<span>111.500.000 VND</span>
		      	</div>
		      	<div class="sale-percent col-md-3">
		      		<span>GIẢM 15%</span>
		      	</div>
		      	<div class="clearfix"></div>
		      	<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-xs btn-brown pull-right"> BOOK NOW </button>
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
		      		<span class="rating">
		      			<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
		      		</span>
	      			<small class="count-rating pull-right">345 lượt đánh giá</small>
		      	</div>
		      	<div class="price col-md-5">
		      		<span>111.500.000 VND</span>
		      	</div>
		      	<div class="sale-percent col-md-3">
		      		<span>GIẢM 15%</span>
		      	</div>
		      	<div class="clearfix"></div>
		      	<p align="center" class="name">CẮT TÓC HÀN QUỐC MỚI</p>
		      	<p class="description"> Ngọc Anh Hair Salon với đội ngũ chuyên nghiệp........</p>
		      	<div class="clearfix">
		      		<button class="btn btn-xs btn-brown pull-right"> BOOK NOW </button>
		      		<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>
		      	</div>
		    </div>
		</div>
	</div> <!-- END DỊCH VỤ MỚI NHÂT -->
	<div class="separate"></div>

	<div id="location-new" class="container">
		<div class="title">
			<span class="fa-stack">
			  	<i class="fa fa-map-marker fa-stack-2x"></i>
			</span> 
			<strong style="font-size: 20px;">ĐỊA ĐIỂM MỚI NHẤT CHO BẠN</strong>
		</div>

		<div class="col-sm-6 col-md-3 remove-padding">
			<img class="image img-responsive" alt="Responsive image" src="<?php echo ASSETS; ?>img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" >
				<div class="info">
					<div class="info-content clearfix">
						<div class="name">SPA SEN</div>
						<div class="description">Spa cao cấp số 1 Sài Gòn với những dịch vụ thời thượng. Đem đến cho bạn những cảm giác thư giãn và nghỉ ngơi tuyệt vời</div>
						<a class="readmore pull-right" href="#">Xem thêm chi tiết >></a>
					</div>
				</div>
			</img>
		</div>

	</div>
	
</div>
