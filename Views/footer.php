
		<!-- Modal Login -->
        <div id="login_modal" onkeydown="enterEvent(event)" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-max-height="440">
    	  <div class="modal-dialog">
		    <div class="modal-content" style="background-color: #FDBD0E;border-radius: 6px">
		      <div class="modal-header" >
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h3 class="modal-title" id="myModalLabel">ĐĂNG NHẬP</h3>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal">
		        	<div class="form-group">
		        		<label class="control-label col-sm-2">Email</label>
		        		<div class="col-sm-8">
		        			<input autocomplete="off" class="form-control" type="text" id="email_login" name="email_login" placeholder="Nhập email...VD:abc@example.com" />
		        		</div>
		        	</div>	
		        	<div class="form-group">
		        		<label class="control-label col-sm-2">Mật Khẩu</label>
		        		<div class="col-sm-8">
		        			<input autocomplete="off" class="form-control" type="password" id="pass_login" name="pass_login" placeholder="Nhập mật khẩu..." />
		        			<p>
		        				<a href="<?php echo URL . 'requestpass'; ?>">Quên mật khẩu?</a> Hay chưa có tài khoản, hãy 
		        				<a href="<?php echo URL . 'clientsignup'; ?>">Đăng ký!</a>
		        			</p>
		        		</div>
		        	</div>
		        </form>
		      </div>
		      <div class="modal-footer" id="footer_login">
		        <button type="button" id="check_login_btn" onclick="login()" class="btn btn-default">Đăng Nhập</button>
		      	<button type="button" class="btn btn-warning" data-dismiss="modal">Hủy</button>
		      </div>
		    </div>
		  </div>
        </div>
        <!-- End Modal Login -->
        <!-- Modal Shopping Cart -->
        <div id="Shopping_cart_info" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog modal-lg">
        		<div class="modal-content">
        			<div class="modal-header" >
			        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        	<h4 class="modal-title" id="myModalLabel">
			        		<strong><i class="fa fa-shopping-cart"></i> GIỎ HÀNG CỦA BẠN</strong> 
			        		<span><i>(Bạn đang có 10 cuộc hẹn)</i></span>
			        	</h4>
			      	</div>
			      	<div class="modal-body">
			      		<div class="table-responsive" style="height: 370px;overflow: auto;">
				      		<table class="table table-responsive table-hover">
				      			<tr>
				      				<th  style="border: none">DỊCH VỤ</th>
				      				<th  style="border: none">NGÀY - GIỜ</th>
				      				<th  style="border: none">GÍA</th>
				      				<th  style="border: none">SỐ lƯỢNG</th>
				      				<th  style="border: none">THÀNH TIỀN</th>
				      			</tr>
				      			<tr>
				      				<td width="30%">CẮT TÓC CÔ DÂU - Spa Ngọc Trinh</td>
				      				<td width="20%">15/9/2014 - 09:00AM</td>
				      				<td width="19%">450000 VNĐ</td>
				      				<td width="12%">2</td>
				      				<td width="19%">900000 VNĐ</td>
				      			</tr>
				      		</table>
			      		</div>
			      		<div class="row">
				      		<div class="col-md-12">
				      			<h4 class="pull-right"><strong>Thành Tiền</strong> : 
				      				<span class="text-success">900000 VNĐ</span>
				      			</h4>
				      		</div>
			      		</div>
			      	</div>
			      	<div class="modal-footer">
			      		<button type="button" id="confirm_cart" class="btn btn-danger">Thanh toán</button>
			      		<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			      	</div>
        		</div>
        	</div>
        </div>
        <!-- End Modal Shopping Cart -->
        <footer id="footer">
            <div id="footer-info">
                <div class="container">
                    <div id="footer-1" class="col-md-2">
                        <h4><b>THÔNG TIN</b></h4>
                        <p>Liên hệ</p>
                        <p>Về chúng tôi</p>
                        <p>Góc báo chí</p>
                        <p>Tuyển dụng</p>
                    </div>

                    <div id="footer-2" class="col-md-6">
                        <h2 class="logo-text"> COMPANY NAME <h1>
                    </div>

                    <div id="footer-3" class="col-md-2">
                        <h4><b>THÔNG TIN</b></h4>
                        <p>Liên hệ</p>
                        <p>Về chúng tôi</p>
                        <p>Góc báo chí</p>
                        <p>Tải ứng dụng</p>
                    </div>

                    <div id="footer-4" class="col-md-2">
                        <h4><b>THÔNG TIN</b></h4>
                        <p>Liên hệ</p>
                        <p>Về chúng tôi</p>
                        <p>Góc báo chí</p>
                    </div>
                </div>
            </div>
            
            <div id="footer-last">
                <div class="container" align="center">
                    <ul class="list-inline">
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tencent-weibo fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                        <li>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                            </span> 
                        </li>
                    </ul>

                    <p>2014 Design by Sunstory</p>
                </div>
                
            </div>
        </footer>
    </body>
    <!-- Chèn link JavaScript-->
    <script src="<?php echo ASSETS ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo ASSETS ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   	<script type="text/javascript" src="<?php echo ASSETS; ?>js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS; ?>js/messages_vi.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS; ?>js/custom.js"></script>
    <script type="text/javascript">
	  	// Active menu	
        $(function() {
            var pgurl = window.location.href.substr( window.location.href.lastIndexOf("/") + 1 );
            $("#nav1 li a").each(function(){
                var href = $(this).attr("href");
                var ctr = href.substr( href.lastIndexOf("/") + 1 ) ;
                if(ctr == pgurl || ctr == '' ) 
                    $(this).parent().addClass("on");
            });
        });
    </script>
    
    <script type="text/javascript">
        var URL = "<?php echo URL ?>";
        var USERNAME = "<?php if(isset($_SESSION['client_username']))
							      echo $_SESSION['client_username']; 
						?>";
		var USER_SERVICE_ID = '';
		var BOOKING_DETAIL_DATE;
		var BOOKING_DETAIL_TIME;
		var WEEK_PAGE = 1;
		var TOTAL_WEEK = 0;
		var MON_OPEN_CLOSE = [];
		var TUE_OPEN_CLOSE = [];
		var WED_OPEN_CLOSE = [];
		var THU_OPEN_CLOSE = [];
		var FRI_OPEN_CLOSE = [];
		var SAT_OPEN_CLOSE = [];
		var SUN_OPEN_CLOSE = [];
		var TODAY_OF_WEEK;
		var TODAY_OF_MONTH;
		var TODAY_MONTH;
		var TODAY_YEAR;
		var TODAY_HOUR;
		var TODAY_MINUTE;
		var LIMIT_TIME_BEFORE_SERVICE;
		var USER_SERVICE_SALE_PRICE;
		var USER_SERVICE_DURATION;
		var CHOOSEN_DATE = '';
		var CHOOSEN_DATE_STORE = '';
		var CHOOSEN_TIME = '';
		var CHOOSEN_PRICE = '';
    </script>

    <?php
        // Include script module
        if(isset($this->script)){
            foreach ($this->script as $script) {
                echo '<script type="text/javascript" src="'. $script .'" ></script>';
            }
        }
    ?>
</html>