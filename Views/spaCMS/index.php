<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title></title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="../img/ico/Cat-Brown-icon-24px.png" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->
        <link rel="stylesheet" href="<?php echo URL ?>public/assets/css/spaCMS/spaCMS.css" type="text/css"  />


        <!-- Chèn link JavaScript-->
        <script src="<?php echo URL ?>public/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>
    
    </head>

    <body class="loading login-page">
		<div id="login-page">
			<div class="wrapper1">
			    <div class="wrapper2">
			        <div class="wrapper3">
			            <h1>Wahanda Connect</h1>
			            <form action="<?php echo URL . '/spaCMS/login' ?>" novalidate="novalidate" class="login-form" method="POST">
				            <label class="unauthorised-error-message error-message hidden">
			        			Sorry, we were unable to log you in. Please check your username and password are correct.
			        		</label>
				            <div class="no-venues-error-message error-message hidden">
			        			Sorry, there are no venues associated with this account.
			        		</div>
		                	<input name="user_email" class="required v-email-or-profilename valid" placeholder="Email" type="email">
			                <input name="user_password" class="required" placeholder="Password" type="password">
			
			                <label class="remember">
			                    <input name="remember" type="checkbox">
			                    <span class="text">Keep me logged in</span>
			                </label>
			                <!-- <a class="forgot" href="https://www.wahanda.com/request-password/">Forgot your password?</a>  -->
			
			                <button class="button">Log in</button>
			            </form>
			
			            <!-- <div class="signup">
			                <h2>Don't have business profile?</h2>
			                <a href="https://www.wahanda.com/business/signup/" class="button">Register</a>
			            </div> -->
			        </div>
			    </div>
			</div>
			
			<div class="footer">
			    <div class="logo"></div>
			    <ul>
			        <li><a href="https://www.wahanda.com/info/about-us/">About Us</a></li>
			        <li><a href="https://www.wahanda.com/info/get-in-touch/">Contact Us</a></li>
			        <li class="terms">Terms Of Service</li>
			        <li>© 2009-2014 WAHANDA</li>
			    </ul>
			</div>
		</div>
    </body>
</html>




