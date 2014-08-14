	
        
        <footer style="margin-bottom: 50px;">
        	
        </footer>
    </body>
    <!-- Chèn link JavaScript-->
    <script src="<?php echo URL ?>public/assets/js/jquery.min.js" type="text/javascript"></script>

    <script src="<?php echo URL ?>public/assets/js/bootstrap.min.js" type="text/javascript"></script>

   
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
        // Include script modul
        if(isset($this->script)){
            foreach ($this->script as $script) {
                echo '<script type="text/javascript" src="'. $script .'" ></script>';
            }
        }
    ?>

    
</html>