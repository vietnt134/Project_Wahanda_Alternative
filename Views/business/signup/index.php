<!DOCTYPE html>
<html version="HTML+RDFa 1.1" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="content-language" content="EN-GB">
		<meta name="country" content="United Kingdom">
		<meta name="geo.country" content="GB">
		<meta name="title" content="Sign up - Wahanda">
		<meta name="description" content="Sign up to Wahanda. Enter your business details.">
		<meta name="robots" content="noindex, follow">
		<meta property="fb:app_id" content="181723646779">
		<title> Sign up	- Wahanda </title>
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/assets/css/jquery-ui.css" media="all">
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/assets/css/common.css">
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/assets/css/business.css">
		<style type="text/css">
            @font-face {
                font-family: 'OpenSans';
                src: url("https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans+Condensed:300,300italic,700");
            }

            * {
                font-family: "OpenSans";
            }
        </style>
	</head>
	<body class="business open-login">
		<div class="overlay"></div>
		<div id="header-login" style="height: 135px; display: none;">
			<div class="wrapper">
				<div class="error-msg">
					<h2 class="title" data-email-required="Please enter your email address" data-email-domain="Please enter a valid email address" data-password-required="Please enter your password" data-email-and-password-required="Please enter your email address and password" data-login-failure="Sorry, your email or password is not correct" data-login-error="Sorry, there was a problem logging you in. Please try again."></h2>
				</div>
				<div class="logging-in-msg">
					<span class="icon login-loader"></span>
					<h2 class="title">Logging you in, please wait...</h2>
				</div>
				<div class="logged-in-msg">
					<h2 class="title">You are logged in</h2>
				</div>
				<h2 class="title">Log in to your account</h2>
				<form novalidate="novalidate">
					<div class="input-wrapper">
						<div class="txt-input">
							<input type="text" name="email" class="login-email" placeholder="Email">
						</div>
						<div class="wahanda-switch checkbox">
							<label class=" " for="checkbox-523051325">
								<input type="checkbox" class="persistent-login" name="persistent-login" id="checkbox-523051325">
								Keep me logged in </label>
						</div>
					</div>
					<div class="input-wrapper">
						<div class="txt-input">
							<input type="password" name="password" class="password" placeholder="Password">
						</div>
						<a href="https://www.wahanda.com/request-password/" class="forgot-password"> Forgotten your password? </a>
					</div>
					<div class="button main-button a-login">
						Log in
					</div>
				</form>
				<div class="sign-up">
					<a href="https://www.wahanda.com/profile/register/" class="button other-button-darker"> Sign up </a>
					<span class="txt">...or create new account</span>
				</div>
			</div>
			<span class="close site-close-form"></span>
		</div>
		<div id="header">
			<div class="wrapper">
				<div id="user-nav">
					<div class="button other-button a-login">
						<span class="button-inside">Log in</span>
					</div>
					<div class="user-info hide page-content-overlay-persist">
						<div class="pic">
							<img src="" alt="user profile picture" data-default-image="https://cdneu2.wahanda.net/images/view/v2.i247074.w264.h264.x839F3577.png">
						</div>
						<div class="user-names">
							<span class="name"></span>
							<span class="username"></span>
						</div>
						<ul class="user-links">
							<li>
								<a href="http://www.wahanda.com/my-account/">My bookings</a>
							</li>
							<li>
								<a href="http://www.wahanda.com/my-account/#wallet">My wallet</a>
							</li>
							<li class="logout" data-reload-on-logout="true">
								<a href="">Log out</a>
							</li>
						</ul>
						<div class="control-open">
							<span class="icon site-user-arrow-down"></span>
						</div>
						<div class="control-close">
							<span class="icon site-close-form"></span>
						</div>
					</div>
				</div>
				<a href="https://www.wahanda.com/" class="site-logo-big logo">Wahanda</a>
				<div class="secure-checkout-header">
					<span class="sprite light payment-cards-sprite sprite-secure-basket-icon size"></span>
					<span class="secure-text">Secure Checkout</span>
				</div>
				<div class="cs-contacts">
					<div class="title" style="">
						Having trouble? Give us a call:
					</div>
					<div class="phone">
						0800 121 4536
					</div>
				</div>
			</div>
			<div class="header-shadow"></div>
		</div>
		<div id="site-container" class="content" style="top: 257px;" id="signup_form">
			<form id="business-signup-form" class="signup-form" method="POST" action="<?php echo URL; ?>business/venuedetail">
				<div class="">
					<div class="vcenter-parent">
						<div class="vcenter">
							<div class="tagline">
								<h1 class="title">Sign up for a free account</h1>
								<h2 class="sub-text">Get listed and join thousands of businesses already on Wahanda</h2>
							</div>
							<div class="content-box">
								<div class="box-wrapper clearfix">
									<div class="form-row">
										<label for="venue-name">Business name</label>
										<input class="required" id="venue-name" name="venue-name" type="text" value="">
										<span class="input-note name-info">Name that you advertise to your customers</span>
									</div>
									<div class="form-row post-code">
										<label for="postal-ref">Post code</label>
										<input class="required" id="postal-ref" name="postal-ref" type="text" value=""/>
										<select id="country_id" name="country_id">
											<option value="234" selected="">United Kingdom</option>
											<option value="235">United States</option>
											<option value="87">France</option>
											<option value="94">Germany</option>
											<option value="205">Spain</option>
											<option value="117">Italy</option>
										</select>
									</div>
									<div class="form-row">
										<label for="contact-name">Your name</label>
										<input class="required" id="contact-name" name="contact-name" type="text" value="" data-validation-req="Please enter your name" data-previous-value="">
									</div>
									<div class="form-row">
										<label for="contact-email">Your email</label>
										<input class="required email" id="contact-email" name="contact-email" type="email" value="" data-validation-req="Please enter your email address" data-validation-email="Please enter a valid email address" data-previous-value="">
										<div class="text-holder">
											<span class="logged-in-email hide"></span>
											<span class="log-out hide">Not you?</span>
										</div>
									</div>
									<div class="action-row">
										<button class="main-button button" type="submit">
											<span class="button-value">Continue</span>
										</button>
									</div>
									<div class="marketing-copy">
										<p>
											A bit about us
										</p>
										<ol>
											<li>
												We're the world’s fastest growing online health and beauty marketplace
											</li>
											<li>
												Getting listed improves your web presence, making your business easier to find
											</li>
											<li>
												Our free online booking system makes managing your business simple and gives you the option to sell through Wahanda
											</li>
											<li>
												Pay just 20% plus  VAT commission on sales we send you and receive payment within 15 days
											</li>
											<li>
												Any data you share with us belongs to you and we promise to keep it secure
											</li>
										</ol>
										<span class="badge site-important"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div id="chat-button" class="hide" data-zopim-library-uri="//v2.zopim.com/?cerlcbUWLg1jIdSkT9zEiHdrGcnsZKwj" style="display: block;">
			<div id="chat-button-text">
				Need our help?
			</div>
			<div id="chat-button-subtext">
				Click here to chat
			</div>
		</div>
		<div id="footer">
			<div class="wrapper">
				<div class="site-logo-small logo-small">
					Wahanda
				</div>
				<div class="copy">
					© 2014 Hotspring Ventures Ltd.
				</div>
			</div>
			<div class="footer-shadow"></div>
		</div>
	</body>
	<!-- Le JavaScript -->
	<script src="<?php echo ASSETS ?>plugins/image-manager/js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="<?php echo ASSETS ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo ASSETS; ?>/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS; ?>/js/messages_vi.js"></script>
	<?php
	if (isset($this -> script)) {
		foreach ($this->script as $script) {
			echo '<script type="text/javascript" src="' . $script . '" ></script>';
		}
	}
	?>
	<!-- Le Transiton -->
	<style>
		#country_id {
			width: 38%;
			margin-left: 3%;
		}
		.error {
			color: #D2322D;
		}
		input.error {
			position: relative;
			border-left: 2px solid #cc3333;
		}
		span.error {
			position: absolute;
			background-color: #D2322D;
			left: 70%;
			bottom: 115%;
			color: #fff;
			padding: 1%;
			border: solid;
			border-color: #ffffff transparent;
			border-width: 0px 0px 12px 12px;
			content: "";
			box-shadow: -3px -3px 3px #9A9797;
		}
	</style>
</html>