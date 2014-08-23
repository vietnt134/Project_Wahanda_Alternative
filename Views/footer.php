	
        
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
                        <h2> COMPANY NAME <h1>
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
            
            <div id="footer-social">
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