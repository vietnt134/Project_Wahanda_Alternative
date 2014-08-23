<!DOCTYPE html>
<html version="HTML+RDFa 1.1" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="content-language" content="EN-GB">
		<meta name="country" content="United Kingdom">
		<meta name="geo.country" content="GB">
		<meta name="title" content="Sign up - venue details - Wahanda">
		<meta name="description" content="Sign up to Wahanda. Enter the rest of your business details.">
		<meta name="robots" content="noindex, follow">
		<meta property="fb:app_id" content="181723646779">
		<title> Sign up - venue details	- Wahanda </title>
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/assets/css/jquery-ui.css" media="all">
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/assets/css/common.css">
		<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>public/assets/css/business.css">
	</head>
	<body class="business">
		<div class="overlay"></div>
		<div id="header">
			<div class="wrapper">
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
		<div id="site-container" class="content">
			<form id="business-venue-details-form" class="signup-form" method="post">
				<div class="fullheight-wrapper">
					<div class="vcenter-parent">
						<div class="vcenter">
							<div class="tagline">
								<h1 class="title">Nearly there...</h1>
								<h2 class="sub-text">Join thousands of businesses already on Wahanda</h2>
							</div>
							<div class="content-box">
								<div class="box-wrapper clearfix">
									<div class="form-row txt-only">
										<label>Business name</label>
										<div class="business-title">
											Spa_sexy
										</div>
									</div>
									<div class="form-row">
										<label for="venue-type-id">Business type</label>
										<div class="off" data-validation-req="Please select the type of your business">
											<div class="wrapper">
												<select>
													<option value=""> Choose one </option>
													<option value="10">Salon</option>
													<option value="21">Hair Salon</option>
													<option value="1">Hotel Spa</option>
													<option value="5">Day Spa</option>
													<option value="50">Skin Clinic</option>
													<option value="48">Massage &amp; Therapy Centre</option>
													<optgroup label="">
														<option value="28">Airport Spa</option>
														<option value="43">Barbershop</option>
														<option value="46">Beauty Institute</option>
														<option value="45">Beauty School</option>
														<option value="16">Bootcamp</option>
														<option value="47">Brow Bar</option>
														<option value="4">Casino Spa</option>
														<option value="20">Chiropody Clinic</option>
														<option value="49">Chiropractic Clinic</option>
														<option value="36">Cruise Ship Spa</option>
														<option value="35">Dance Studio</option>
														<option value="7">Dental Spa</option>
														<option value="2">Destination Spa</option>
														<option value="12">Eye Clinic</option>
														<option value="18">Fat Farm</option>
														<option value="51">Fish Spa</option>
														<option value="9">Fitness Centre</option>
														<option value="24">Golf Course</option>
														<option value="39">Golf Range</option>
														<option value="15">Gym</option>
														<option value="41">Hammam</option>
														<option value="59">Health Club</option>
														<option value="29">Health Farm</option>
														<option value="53">Makeup Studio</option>
														<option value="38">Martial Arts Centre</option>
														<option value="6">Medical Spa</option>
														<option value="42">Mobile Beauty</option>
														<option value="14">Mobile Fitness</option>
														<option value="57">Mobile Massage</option>
														<option value="8">Mobile Spa</option>
														<option value="27">Nail Salon</option>
														<option value="55">Nutrition Centre</option>
														<option value="58">Online Retailer</option>
														<option value="60">Photographic Studio</option>
														<option value="22">Pilates Studio</option>
														<option value="3">Real Estate Spa</option>
														<option value="56">Surf School</option>
														<option value="25">Swimming Pool</option>
														<option value="37">Tanning Salon</option>
														<option value="23">Tennis Court</option>
														<option value="54">Treatment Room - Beauty</option>
														<option value="26">Treatment Room - Spa</option>
														<option value="44">Treatment Room - Wellness</option>
														<option value="40">Waxing Salon</option>
														<option value="52">Weight Loss Clinic</option>
														<option value="11">Wellness Centre</option>
														<option value="17">Yoga Retreat</option>
														<option value="13">Yoga Studio</option>
													</optgroup>
												</select>
											</div>
										</div>
									</div>
									<div class="form-row">
										<label for="venue-address">Address</label>
										<textarea id="venue-address" name="venue-address" rows="4" data-postal-ref="70000" data-country="UK" data-country-code="GB" data-validation-req="Please enter your address"></textarea>
										<span class="input-note"> <span class="postal-ref">70000</span> , <span class="country-name">UK</span> </span>
									</div>
									<div class="form-row">
										<label for="venue-phone-number">Phone number</label>
										<input id="venue-phone-number" name="venue-phone-number" type="text" data-validation-req="Please enter your telephone number" data-validation-valid="Please enter a valid telephone number" data-country-code="GB" value="">
										<span class="input-note phone-number-info">How can we reach you?</span>
									</div>
									<div class="form-row">
										<label for="booking-management-type" class="long-label">How do you manage your bookings?</label>
										<div class="">
											<div class="wrapper">
												<select id="manage_booking">
													<option value=""> Choose one </option>
													<option value="PP"> Pen &amp; Paper </option>
													<option value="OS"> Online scheduling system </option>
													<option value="DS"> Installed (desktop) scheduling system </option>
													<option value="CS"> Other calendar software(Google , Outlook, etc.) </option>
												</select>
											</div>
										</div>
									</div>
									<div id="manage_booking_spec" class="form-row booking-management-system-name hide" style="display: none;">
										<label>&nbsp;</label>
										<input type="text" name="booking-management-system-name" maxlength="40" placeholder="Please specify" value="">
									</div>
									<div class="form-row">
										<label for="signing-reason-type" class="long-label">What is your primary reason for signing up?</label>
										<div class="">
											<div class="wrapper">
												<select>
													<option value=""> Choose one </option>
													<option value="NS"> Find new customers and boost sales </option>
													<option value="FS"> Free booking system </option>
													<option value="BO"> Both </option>
												</select>
											</div>
											<div class="ui-selectmenu-menu" style="z-index: 11; top: 36px; left: 181.296875px;">
												<ul class="ui-widget ui-widget-content ui-selectmenu-menu-dropdown ui-corner-bottom dropdown-menu ui-menu" aria-hidden="true" role="listbox" aria-labelledby="signing-reason-type-button" id="signing-reason-type-menu" aria-disabled="false" aria-activedescendant="ui-selectmenu-item-644" style="width: 337px; height: auto;">
													<li role="presentation" class="ui-state-disabled">
														<a href="#nogo" tabindex="-1" role="option" aria-selected="false" id="" aria-disabled="true">Choose one</a>
													</li>
													<li role="presentation" class="ui-selectmenu-item-selected">
														<a href="#nogo" tabindex="-1" role="option" aria-selected="true" id="ui-selectmenu-item-644"> Find new customers and boost sales </a>
													</li>
													<li role="presentation" class="">
														<a href="#nogo" tabindex="-1" role="option" aria-selected="false"> Free booking system </a>
													</li>
													<li role="presentation" class="ui-corner-bottom">
														<a href="#nogo" tabindex="-1" role="option" aria-selected="false"> Both </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="action-row">
										<span class="legal"> By submitting this form you agree to our <span class="link a-terms-and-conditions">terms and conditions</span> </span>

										<button class="button main-button" type="submit">
											<span class="button-value">Sign up</span>
										</button>
									</div>
									<div class="marketing-copy">
										<a id="Tell_us_more_about_you" name="Tell_us_more_about_you"></a><h2>Tell us more about you</h2>
										<p>
											You’re just one step away from signing up with Wahanda. We can’t wait to
											have you on board but first we need a few details from you.
										</p>
										<p>
											Please fill out the form on the left, click <strong>Sign
											up</strong> and that’s it. Welcome to the family.
										</p>
									</div>
								</div>
							</div>
							<input id="latitude" name="latitude" type="hidden">
							<input id="longitude" name="longitude" type="hidden">
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
	<!-- Le JavaScript-->
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
</html>