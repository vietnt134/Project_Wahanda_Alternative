<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>WA Home page</title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->

        <link rel="stylesheet" href="<?php echo ASSETS ?>plugins/bootstrap/css/bootstrap.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo ASSETS ?>plugins/font-awesome/css/font-awesome.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo ASSETS ?>css/home-page/home-page.css" type="text/css"  />


        <?php
            if(isset($this->style)){
                foreach ($this->style as $style) {
                    echo '<link rel="stylesheet" type="text/css" href="'. $style .'" />';
                }
            }
        ?>
    </head>

    <body id="home-page">
        <header id="header" class="container">
            <div id="top-header" class="clearfix">
                <div id="top-header-left" class="col-md-3">
                    <button class="btn create-location-btn" type="button"><i class="fa fa-plus"></i> Tạo địa điểm</button>
                </div>
                <div id="top-header-center" class="col-md-6">
                    <div class="logo">
                        <h1 class="logo-text text-center">COMPANY NAME</h1>
                        <img class="logo-image" src=""/>
                    </div>
                </div>         
                <div id="top-header-right" class="col-md-3">
                    <div class="clearfix" id="login_group">
                    	<?php
		                Session::init(); 
		                if(empty($_SESSION['client_id'])){ 
		                ?>
	                        <div class="col-sm-5 remove-padding">
	                        	<button id="login_btn" class="btn btn-block login-btn" data-toggle="modal" data-target="#login_modal" type="button">Đăng nhập</button>
	                        </div>
	                        <div class="col-sm-2"></div>
	                        <div class="col-sm-5 remove-padding">
	                            <button class="btn btn-block login-face-btn" type="button">Login Face</button>
	                        </div>
                        <?php }else{ ?>
                        	<div class="col-sm-12 remove-padding" style="margin-bottom: 10px;">
								<div class="dropdown"> 
                        			<a id="dropdown_profile" data-toggle="dropdown" class="btn btn-warning btn-block dropdown-toggle" style="border-radius: 4px;"> 
                        				Xin chào bạn: <i class="fa fa-user"></i> <?php echo $_SESSION['client_username']; ?> <span class="caret"></span>
                        			</a>
                        			<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdown_profile">
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo URL . 'clientsetting'; ?>"><i class="fa fa-wrench"></i> Quản lý tài khoản</a></li>
									    <li role="presentation" class="divider"></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" onclick="logout()" style="cursor: pointer;"><i class="fa fa-power-off"></i> Thoát</a></li>
									</ul>
								</div>                  		                        			
                        	</div>
                    	<?php } ?>
                    </div>
                    <div class="col-md-12 remove-padding clearfix">
                        <input type="text" class="form-control search-global" placeHolder="Gõ nội dung cần tìm">
                    </div>
                </div>                
            </div><!-- END TOP HEADER -->
            <div id="navigation" class="clearfix">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- <a class="navbar-brand" href="#">Brand</a> -->
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="first "><a href="#">&#149; FACE</a></li>
                                <li><a href="#">&#149; BODY</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">&#149; TÓC <span class="caret"></span></a>
                                    <div class="dropdown-menu clearfix dropdown-menu-background" role="menu">
                                        <span class="caret"></span>
                                        <ul class="list-unstyled pull-left">
                                            <li class="group-name"><i class="fa fa-user"></i> <span>GOI</span></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>

                                            <li class="group-name"><i class="fa fa-user"></i> <span>SAY</span></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                        <ul class="list-unstyled pull-left" tyle="padding-left: 10px; padding-right:10px">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </div>
                                    
                                </li>
                                <li><a href="#">&#149; MÓNG</a></li>
                                <li><a href="#">&#149; MASSAGE</a></li>
                                <li><a href="#">&#149; FITNESS</a></li>
                            </ul>

                            <div class="navbar-form navbar-right">
                                <button data-toggle="modal" data-target="#Shopping_cart_info" type="submit" class="btn btn-sm btn-default cart-shop">
                                    <i class="fa fa-shopping-cart"></i> 
                                    	<span>
                                    		GIỎ HÀNG 
                                    	</span>
                                    	<span id="booking_amount">
                                    		<?php Session::init(); 
                                    			if (empty($_SESSION['booking_detail'])) {
													echo 0;
												} else {
													echo count($_SESSION['booking_detail']);
												}
                                    		?>
                                    	</span>
                                </button>
                                <button type="submit" class="btn btn-sm btn-default languages">VI</button>
                                <button type="submit" class="btn btn-sm btn-default languages">EN</button>
                            </div>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div> <!-- END NAVIGATION -->

        </header>