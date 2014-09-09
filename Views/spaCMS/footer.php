	
        
        <footer>
        	
        </footer>
    </body>
    <!-- Chèn link JavaScript-->
    <script src="<?php echo ASSETS ?>plugins/image-manager/js/jquery-1.8.3.min.js" type="text/javascript"></script>

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
        var URL_IMAGE_MANAGER = "<?php echo ASSETS . 'plugins/image-manager/'; ?>";
        var user_id = <?php echo Session::get('user_id')?>; // USER ID = GET SESSION['user_id']
    </script>

    <?php
        // Include script module
        if(isset($this->script)){
            foreach ($this->script as $script) {
                echo '<script type="text/javascript" src="'. $script .'" ></script>';
            }
        }
    ?>

    <script>
        // Dropdown logout
        $(function(){
            $('#user').click(function() {
                $('#logout').fadeToggle('fast');
            });
        });
    </script>
</html>