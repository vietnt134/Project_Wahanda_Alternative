
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
		        <button type="button" class="btn btn-warning" data-dismiss="modal">Hủy</button>
		        <button type="button" id="check_login_btn" onclick="login()" class="btn btn-default">Đăng Nhập</button>
		      </div>
		    </div>
		  </div>
        </div>
        <!-- End Modal -->
        
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