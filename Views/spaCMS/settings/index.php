<div id="settings-holder" class="content-holder">
	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="settings-tabs">
		<div class="section-aside">
			<ul id="nav2" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
				<li id="venue-settings-tab" class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
					<a href="#venue-settings" style="position: relative;">
						<div class="nav-icon icons-nav-venue"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Venue</div>
					</a>
				</li>
				<li id="finance-tab" class="ui-state-default ui-corner-top">
					<a href="#finance" style="position: relative;">
						<div class="nav-icon icons-nav-supplier"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Finance</div>
					</a>
				</li>
				<li id="team-settings-tab" class="ui-state-default ui-corner-top">
					<a href="#team-settings" style="position: relative;">
						<div class="nav-icon icons-nav-employees"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Team</div>
					</a>
				</li>
				<li id="notifications-settings-tab" class="ui-state-default ui-corner-top">
					<a href="#notifications-settings" style="position: relative;">
						<div class="nav-icon icons-nav-notifications"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Notifications</div>
					</a>
				</li>
				<li id="online-booking-tab" class="ui-state-default ui-corner-top">
					<a href="#online-booking" style="position: relative;">
						<div class="nav-icon icons-nav-booking"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Online booking</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="section-main ui-tabs-panel ui-widget-content ui-corner-bottom" id="venue-settings">
			<div class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all" id="venue-settings-tabs">
				<div class="nav3">
					<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
						<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
							<a href="#venue-details">Venue details</a>
						</li>
						<li class="ui-state-default ui-corner-top">
							<a href="#opening-hours">Opening hours</a>
						</li>
						<li class="ui-state-default ui-corner-top">
							<a href="#policies">Policies</a>
						</li>
						<li id="room-types-tab" class="ui-state-default ui-corner-top hidden">
							<a href="#room-types">Room types</a>
						</li>
						<li id="venue-vouchers-tab" class="ui-state-default ui-corner-top">
							<a href="#venue-vouchers">Gift Vouchers</a>
						</li>
					</ul>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom" id="venue-details">
					<form action="" novalidate="novalidate">
						<div class="form-content">
							<div class="form-venue-details">
								<div class="venue-main-info">
									<div class="picture-logo">
										<img class="logo-image hidden" src="">
										<div class="edit"><a class="set-logo" href="javascript:;">Set logo</a></div>
									</div>
									<table cellspacing="0" cellpadding="0" class="default-form">
										<tbody><tr data-tooltip="&lt;strong&gt;Venue name&lt;/strong&gt; - Enter your venue name here - make sure it's all spelt correctly." class="form-row" aria-describedby="ui-tooltip-0">
											<td colspan="2">
												<div class="txt-input txt-input-big"><input type="text" id="" name="venue-details-name" class="required"></div>
												<div class="part-of hidden">part of <span class="chain-name"></span></div>
											</td>
										</tr>
										<tr data-tooltip="&lt;strong&gt;Primary venue type&lt;/strong&gt; - Set the venue type here. If you can't find the exact type, choose the one that's closest to what you do." class="form-row" aria-describedby="ui-tooltip-1">
											<td class="label-part">
												<label for="venue-details-venueTypeId">Primary type</label>
											</td>
											<td class="input-part">
												<select id="venue-details-venueTypeId" name="venue-details-venueTypeId" class="">
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
		<option value="5">Day Spa</option>
		<option value="7">Dental Spa</option>
		<option value="2">Destination Spa</option>
		<option value="12">Eye Clinic</option>
		<option value="18">Fat Farm</option>
		<option value="51">Fish Spa</option>
		<option value="9">Fitness Centre</option>
		<option value="24">Golf Course</option>
		<option value="39">Golf Range</option>
		<option value="15">Gym</option>
		<option value="21">Hair Salon</option>
		<option value="41">Hammam</option>
		<option value="59">Health Club</option>
		<option value="29">Health Farm</option>
		<option value="1">Hotel Spa</option>
		<option value="53">Makeup Studio</option>
		<option value="38">Martial Arts Centre</option>
		<option value="48">Massage &amp; Therapy Centre</option>
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
		<option value="10">Salon</option>
		<option value="50">Skin Clinic</option>
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
</select>
											</td>
										</tr>
										<!--
										<tr class="form-row for-standard-listing">
											<td class="label-part">
												<label>Standard listing</label>
											</td>
											<td class="input-part">
												<a href="javascript:;">More information</a>
											</td>
										</tr>
										-->
									</tbody></table>
								</div>
								<table cellspacing="0" cellpadding="0" class="default-form">
									<tbody><tr class="form-header-row">
										<td colspan="2">Where is your venue located?</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Venue location&lt;/strong&gt; - If your venue operates within a hotel, health centre or other venue, specify it here. It will then be shown as e.g. &amp;#34;Paola&amp;#39;s Therapy at Fitzrovia Health Centre&amp;#34;" class="form-row text-location-link">
										<td class="label-part"></td>
										<td class="input-part">
											<a class="show-text-location" href="javascript:;">Do you operate inside a hotel, clinic etc?</a>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Venue location&lt;/strong&gt; - If your venue operates within a hotel, health centre or other venue, specify it here. It will then be shown as e.g. &amp;#34;Paola&amp;#39;s Therapy at Fitzrovia Health Centre&amp;#34;" class="form-row hidden text-location">
										<td class="label-part">
											<label for="venue-details-hotelName" class="optional">Located at</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-hotelName" name="venue-details-hotelName" class=""></div>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Venue address&lt;/strong&gt; - You can include short instructions in the address such as &amp;#34;entrance on New Bond Street&amp;#34;" class="form-row" aria-describedby="ui-tooltip-4">
										<td class="label-part">
											<label for="venue-details-address">Address</label>
										</td>
										<td class="input-part">
											<textarea max-text-lines="4" id="venue-details-address" name="venue-details-address" cols="5" rows="4" class="full required"></textarea>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Postcode&lt;/strong&gt; - Enter your postcode to make sure your clients can find you." class="form-row">
										<td class="label-part">
											<label for="venue-details-addressPostalRef">Postcode</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-addressPostalRef" name="venue-details-addressPostalRef" class="required postal-code"></div>
										</td>
									</tr>
									<tr class="form-row state-row hidden">
										<td class="label-part">
											<label for="venue-details-addressStateCode" class="optional">State</label>
										</td>
										<td class="input-part">
											<select id="venue-details-addressStateCode" name="venue-details-addressStateCode" class=""><option value="">Not set</option>
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AS">American Samoa</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="GU">Guam</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MH">Marshall Islands</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="FM">Micronesia</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PW">Palau</option>
		<option value="PA">Pennsylvania</option>
		<option value="PR">Puerto Rico</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="DC">Washington DC</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
</select>
										</td>
									</tr>
									<tr class="form-row">
										<td class="label-part">
											<label for="venue-details-addressCountryCode">Country</label>
										</td>
										<td class="input-part">
											<select id="venue-details-addressCountryCode" name="venue-details-addressCountryCode" class="required"><option value="">Not set</option>
		<option value="AF">Afghanistan</option>
		<option value="AL">Albania</option>
		<option value="DZ">Algeria</option>
		<option value="AS">American Samoa</option>
		<option value="AD">Andorra</option>
		<option value="AO">Angola</option>
		<option value="AI">Anguilla</option>
		<option value="AG">Antigua And Barbuda</option>
		<option value="AR">Argentina</option>
		<option value="AM">Armenia</option>
		<option value="AW">Aruba</option>
		<option value="AU">Australia</option>
		<option value="AT">Austria</option>
		<option value="AZ">Azerbaijan</option>
		<option value="BS">Bahamas</option>
		<option value="BH">Bahrain</option>
		<option value="BD">Bangladesh</option>
		<option value="BB">Barbados</option>
		<option value="BY">Belarus</option>
		<option value="BE">Belgium</option>
		<option value="BZ">Belize</option>
		<option value="BJ">Benin</option>
		<option value="BM">Bermuda</option>
		<option value="BT">Bhutan</option>
		<option value="BO">Bolivia</option>
		<option value="BA">Bosnia-Herzegovina</option>
		<option value="BW">Botswana</option>
		<option value="BR">Brazil</option>
		<option value="IO">British Indian Ocean Territory</option>
		<option value="BN">Brunei Darussalam</option>
		<option value="BG">Bulgaria</option>
		<option value="BF">Burkina Faso</option>
		<option value="BI">Burundi</option>
		<option value="KH">Cambodia</option>
		<option value="CM">Cameroon</option>
		<option value="CA">Canada</option>
		<option value="CV">Cape Verde</option>
		<option value="KY">Cayman Islands</option>
		<option value="CF">Central African Republic</option>
		<option value="TD">Chad</option>
		<option value="CL">Chile</option>
		<option value="CN">China</option>
		<option value="CX">Christmas Island</option>
		<option value="CC">Cocos Islands</option>
		<option value="CO">Colombia</option>
		<option value="KM">Comoros</option>
		<option value="CD">Congo, Democratic Republic Of</option>
		<option value="CG">Congo, People's Republic Of</option>
		<option value="CK">Cook Islands</option>
		<option value="CR">Costa Rica</option>
		<option value="CI">Cote D'ivoire</option>
		<option value="HR">Croatia</option>
		<option value="CU">Cuba</option>
		<option value="CY">Cyprus</option>
		<option value="CZ">Czech Republic</option>
		<option value="DK">Denmark</option>
		<option value="DJ">Djibouti</option>
		<option value="DM">Dominica</option>
		<option value="DO">Dominican Republic</option>
		<option value="TL">East Timor</option>
		<option value="EC">Ecuador</option>
		<option value="EG">Egypt</option>
		<option value="SV">El Salvador</option>
		<option value="GQ">Equatorial Guinea</option>
		<option value="ER">Eritrea</option>
		<option value="EE">Estonia</option>
		<option value="ET">Ethiopia</option>
		<option value="FK">Falkland Islands</option>
		<option value="FO">Faroe Islands</option>
		<option value="FJ">Fiji</option>
		<option value="FI">Finland</option>
		<option value="FR">France</option>
		<option value="GF">French Guiana</option>
		<option value="PF">French Polynesia</option>
		<option value="TF">French Southern Territories</option>
		<option value="GA">Gabon</option>
		<option value="GM">Gambia</option>
		<option value="GE">Georgia</option>
		<option value="DE">Germany</option>
		<option value="GH">Ghana</option>
		<option value="GI">Gibraltar</option>
		<option value="GR">Greece</option>
		<option value="GL">Greenland</option>
		<option value="GD">Grenada</option>
		<option value="GP">Guadeloupe</option>
		<option value="GU">Guam</option>
		<option value="GT">Guatemala</option>
		<option value="GG">Guernsey</option>
		<option value="GN">Guinea</option>
		<option value="GW">Guinea-bissau</option>
		<option value="GY">Guyana</option>
		<option value="HT">Haiti</option>
		<option value="HN">Honduras</option>
		<option value="HK">Hong Kong</option>
		<option value="HU">Hungary</option>
		<option value="IS">Iceland</option>
		<option value="IN">India</option>
		<option value="ID">Indonesia</option>
		<option value="IR">Iran</option>
		<option value="IQ">Iraq</option>
		<option value="IE">Ireland</option>
		<option value="IM">Isle of Man</option>
		<option value="IL">Israel</option>
		<option value="IT">Italy</option>
		<option value="JM">Jamaica</option>
		<option value="JP">Japan</option>
		<option value="JE">Jersey</option>
		<option value="JO">Jordan</option>
		<option value="KZ">Kazakhstan</option>
		<option value="KE">Kenya</option>
		<option value="KI">Kiribati</option>
		<option value="KW">Kuwait</option>
		<option value="KG">Kyrgyzstan</option>
		<option value="LA">Laos</option>
		<option value="LV">Latvia</option>
		<option value="LB">Lebanon</option>
		<option value="LS">Lesotho</option>
		<option value="LR">Liberia</option>
		<option value="LY">Libya</option>
		<option value="LI">Liechtenstein</option>
		<option value="LT">Lithuania</option>
		<option value="LU">Luxembourg</option>
		<option value="MO">Macau</option>
		<option value="MK">Macedonia</option>
		<option value="MG">Madagascar</option>
		<option value="MW">Malawi</option>
		<option value="MY">Malaysia</option>
		<option value="MV">Maldives</option>
		<option value="ML">Mali</option>
		<option value="MT">Malta</option>
		<option value="MH">Marshall Islands</option>
		<option value="MQ">Martinique</option>
		<option value="MR">Mauritania</option>
		<option value="MU">Mauritius</option>
		<option value="YT">Mayotte</option>
		<option value="MX">Mexico</option>
		<option value="FM">Micronesia</option>
		<option value="MD">Moldova</option>
		<option value="MC">Monaco</option>
		<option value="MN">Mongolia</option>
		<option value="ME">Montenegro</option>
		<option value="MS">Montserrat</option>
		<option value="MA">Morocco</option>
		<option value="MZ">Mozambique</option>
		<option value="MM">Myanmar</option>
		<option value="NA">Namibia</option>
		<option value="NR">Nauru</option>
		<option value="NP">Nepal</option>
		<option value="NL">Netherlands</option>
		<option value="AN">Netherlands Antilles</option>
		<option value="NC">New Caledonia</option>
		<option value="NZ">New Zealand</option>
		<option value="NI">Nicaragua</option>
		<option value="NE">Niger</option>
		<option value="NG">Nigeria</option>
		<option value="NU">Niue</option>
		<option value="NF">Norfolk Island</option>
		<option value="KP">North Korea</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="NO">Norway</option>
		<option value="OM">Oman</option>
		<option value="PK">Pakistan</option>
		<option value="PW">Palau</option>
		<option value="PA">Panama</option>
		<option value="PG">Papua New Guinea</option>
		<option value="PY">Paraguay</option>
		<option value="PE">Peru</option>
		<option value="PH">Philippines</option>
		<option value="PN">Pitcairn</option>
		<option value="PL">Poland</option>
		<option value="PT">Portugal</option>
		<option value="PR">Puerto Rico</option>
		<option value="QA">Qatar</option>
		<option value="RE">Reunion</option>
		<option value="RO">Romania</option>
		<option value="RU">Russia</option>
		<option value="RW">Rwanda</option>
		<option value="WS">Samoa</option>
		<option value="SM">San Marino</option>
		<option value="ST">Sao Tome And Principe</option>
		<option value="SA">Saudi Arabia</option>
		<option value="SN">Senegal</option>
		<option value="RS">Serbia</option>
		<option value="CS">Serbia &amp; Montenegro</option>
		<option value="SC">Seychelles</option>
		<option value="SL">Sierra Leone</option>
		<option value="SG">Singapore</option>
		<option value="SK">Slovakia</option>
		<option value="SI">Slovenia</option>
		<option value="SB">Solomon Islands</option>
		<option value="SO">Somalia</option>
		<option value="ZA">South Africa</option>
		<option value="GS">South Georgia And Sandwich Isl.</option>
		<option value="KR">South Korea</option>
		<option value="ES">Spain</option>
		<option value="LK">Sri Lanka</option>
		<option value="BL">St. Barthélemy</option>
		<option value="SH">St. Helena</option>
		<option value="KN">St. Kitts And Nevis</option>
		<option value="LC">St. Lucia</option>
		<option value="MF">St. Martin</option>
		<option value="PM">St. Pierre And Miquelon</option>
		<option value="VC">St. Vincent And The Grenadines</option>
		<option value="SD">Sudan</option>
		<option value="SR">Suriname</option>
		<option value="SZ">Swaziland</option>
		<option value="SE">Sweden</option>
		<option value="CH">Switzerland</option>
		<option value="SY">Syria</option>
		<option value="TW">Taiwan</option>
		<option value="TJ">Tajikistan</option>
		<option value="TZ">Tanzania</option>
		<option value="TH">Thailand</option>
		<option value="TG">Togo</option>
		<option value="TK">Tokelau</option>
		<option value="TO">Tonga</option>
		<option value="TT">Trinidad And Tobago</option>
		<option value="TN">Tunisia</option>
		<option value="TR">Turkey</option>
		<option value="TM">Turkmenistan</option>
		<option value="TC">Turks And Caicos Islands</option>
		<option value="TV">Tuvalu</option>
		<option value="UG">Uganda</option>
		<option value="UA">Ukraine</option>
		<option value="AE">United Arab Emirates</option>
		<option value="GB">United Kingdom</option>
		<option value="US">United States</option>
		<option value="UY">Uruguay</option>
		<option value="UZ">Uzbekistan</option>
		<option value="VU">Vanuatu</option>
		<option value="VA">Vatican City State (Holy See)</option>
		<option value="VE">Venezuela</option>
		<option value="VN">Vietnam</option>
		<option value="VG">Virgin Islands (British)</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="WF">Wallis And Futuna Islands</option>
		<option value="EH">Western Sahara</option>
		<option value="YE">Yemen</option>
		<option value="ZM">Zambia</option>
		<option value="ZW">Zimbabwe</option>
</select>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Location on the map&lt;/strong&gt; - Click on the map to enlarge it and drag the pointer to the exact location of your venue." class="form-row" aria-describedby="ui-tooltip-6">
										<td class="label-part">
											<label for="">Location on the map</label>
										</td>
										<td class="input-part">
											<input type="hidden" id="venue-details-latitude" name="venue-details-latitude" class="" value="54.5455671">
											<input type="hidden" id="venue-details-gmapLatitude" name="venue-details-gmapLatitude" class="" value="54.5455671">
											<input type="hidden" id="venue-details-longitude" name="venue-details-longitude" class="" value="-1.2835765">
											<input type="hidden" id="venue-details-gmapLongitude" name="venue-details-gmapLongitude" class="" value="-1.2835765">
											<input type="hidden" id="venue-details-gmapScale" name="venue-details-gmapScale" class="" value="14">

											<div class="location-map-wrapper"><img alt="" src="https://maps.googleapis.com/maps/api/staticmap?sensor=false&amp;zoom=14&amp;size=397x98&amp;maptype=roadmap&amp;markers=icon%3Ahttps%3A%2F%2Fconnect.wahanda.com%2Fassets%2Fmap-marker.png%7C54.5455671%2C-1.2835765">
												<div class="edit"><a class="edit-location" href="javascript:;">Edit</a></div>
											</div>
											<span class="location-txt">Vietnam</span>
										</td>
									</tr>
									<tr class="form-separator-row">
										<td colspan="2"><span></span></td>
									</tr>
									<tr class="form-header-row">
										<td colspan="2">How can customers reach you?</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Phone number&lt;/strong&gt; - Enter your reception phone number. This should be the number that your clients can call for any enquiries." class="form-row" aria-describedby="ui-tooltip-7">
										<td class="label-part">
											<label for="venue-details-phone">Phone number</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-phone" name="venue-details-phone" class="required" phone-by-country-field="#venue-details-addressCountryCode"></div>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Email&lt;/strong&gt; - Enter the email address that customers can use to enquire about your services." class="form-row" aria-describedby="ui-tooltip-8">
										<td class="label-part">
											<label for="venue-details-emailAddress" class="optional">Email</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-emailAddress" name="venue-details-emailAddress" class="email"></div>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Website&lt;/strong&gt; - Enter the link to your venue's website." class="form-row" aria-describedby="ui-tooltip-9">
										<td class="label-part">
											<label for="venue-details-primaryVenueUri" class="optional">Website</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-primaryVenueUri" name="venue-details-primaryVenueUri" class=""></div>
										</td>
									</tr>
									<tr class="form-separator-row">
										<td colspan="2"><span></span></td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Venue description&lt;/strong&gt; - Enter a few sentences about your venue - those with good descriptions always receive more bookings." class="form-header-row" aria-describedby="ui-tooltip-10">
										<td colspan="2">Description</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Venue description&lt;/strong&gt; - Enter a few sentences about your venue - those with good descriptions always receive more bookings." class="form-row" aria-describedby="ui-tooltip-11">
										<td class="description-part" colspan="2">
											<textarea rows="10" cols="40" name="venue-details-longDescription" class="" id="editor_45" style="visibility: hidden; display: none;"></textarea><div lang="en" aria-labelledby="cke_editor_45_arialbl" role="application" dir="ltr" class="cke_1 cke cke_reset cke_chrome cke_editor_editor_45 cke_ltr cke_browser_gecko" id="cke_editor_45"><span class="cke_voice_label" id="cke_editor_45_arialbl">Rich Text Editor, editor_45</span><div role="presentation" class="cke_inner cke_reset"><span style="height: auto; -moz-user-select: none;" role="presentation" class="cke_top cke_reset_all" id="cke_1_top"><span class="cke_voice_label" id="cke_8">Editor toolbars</span><span onmousedown="return false;" aria-labelledby="cke_8" role="group" class="cke_toolbox" id="cke_1_toolbox"><span role="toolbar" class="cke_toolbar" id="cke_9"><span class="cke_toolbar_start"></span><span role="presentation" class="cke_toolgroup"><a onclick="CKEDITOR.tools.callFunction(5,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(4,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_10_label" role="button" hidefocus="true" tabindex="-1" title="Bold" class="cke_button cke_button__bold  cke_button_off" id="cke_10"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -24px;background-size:auto;" class="cke_button_icon cke_button__bold_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__bold_label" id="cke_10_label">Bold</span></a><a onclick="CKEDITOR.tools.callFunction(9,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(7,event);" onkeydown="return CKEDITOR.tools.callFunction(6,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_11_label" role="button" hidefocus="true" tabindex="-1" title="Italic" class="cke_button cke_button__italic  cke_button_off" id="cke_11"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -48px;background-size:auto;" class="cke_button_icon cke_button__italic_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__italic_label" id="cke_11_label">Italic</span></a><a onclick="CKEDITOR.tools.callFunction(13,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(12,event);" onfocus="return CKEDITOR.tools.callFunction(11,event);" onkeydown="return CKEDITOR.tools.callFunction(10,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_12_label" role="button" hidefocus="true" tabindex="-1" title="Underline" class="cke_button cke_button__underline  cke_button_off" id="cke_12"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -144px;background-size:auto;" class="cke_button_icon cke_button__underline_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__underline_label" id="cke_12_label">Underline</span></a><a onclick="CKEDITOR.tools.callFunction(17,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(16,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_13_label" role="button" hidefocus="true" tabindex="-1" title="Insert/Remove Numbered List" class="cke_button cke_button__numberedlist  cke_button_off" id="cke_13"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -1368px;background-size:auto;" class="cke_button_icon cke_button__numberedlist_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__numberedlist_label" id="cke_13_label">Insert/Remove Numbered List</span></a><a onclick="CKEDITOR.tools.callFunction(21,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(19,event);" onkeydown="return CKEDITOR.tools.callFunction(18,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_14_label" role="button" hidefocus="true" tabindex="-1" title="Insert/Remove Bulleted List" class="cke_button cke_button__bulletedlist  cke_button_off" id="cke_14"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -1320px;background-size:auto;" class="cke_button_icon cke_button__bulletedlist_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__bulletedlist_label" id="cke_14_label">Insert/Remove Bulleted List</span></a></span><span class="cke_toolbar_end"></span></span></span></span><div role="presentation" class="cke_contents cke_reset" id="cke_1_contents" style="height: 70px;"><span class="cke_voice_label" id="cke_18">Press ALT 0 for help</span><iframe frameborder="0" src="" style="width: 100%; height: 100%;" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, editor_45" aria-describedby="cke_18" tabindex="0" allowtransparency="true"></iframe></div><span role="presentation" class="cke_bottom cke_reset_all" id="cke_1_bottom" style="-moz-user-select: none;"><span onmousedown="CKEDITOR.tools.callFunction(0, event)" title="Resize" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" id="cke_1_resizer">◢</span></span></div></div>
										</td>
									</tr>
								</tbody></table>
							</div>
							<div class="form-venue-pictures ui-sortable">
								<div class="part-title">Venue photos</div>
								<ul class="menu-item-pictures">
	<li class="single-picture empty">
		<div class="single-picture-wrapper" style="position: relative;">
			<div class="add-picture vertically-centered" style="position: absolute; height: 34px; top: 50%; margin-top: -17px;">
				<div class="icon icons-plus3"></div>
				Add image
			</div>
		</div>
		<div class="single-picture-title"><span>Primary image</span></div>
	</li>
</ul>
							</div>
						<div class="top-shadow hidden" style="top: 0px; left: 17px; width: 606px;"></div><div class="bottom-shadow" style="top: 484px; left: 17px; width: 606px;"></div><div class="top-shadow hidden" style="top: 0px; left: 623px; width: 138px;"></div><div class="bottom-shadow hidden" style="top: 484px; left: 623px; width: 138px;"></div><div id="ui-tooltip-1" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-1-content" aria-hidden="true" style="width: 236px; z-index: 15007;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-1-content" aria-atomic="true"><strong>Primary venue type</strong> - Set the venue type here. If you can't find the exact type, choose the one that's closest to what you do.</div></div><div id="ui-tooltip-4" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-4-content" aria-hidden="true" style="width: 236px; z-index: 15001;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-4-content" aria-atomic="true"><strong>Venue address</strong> - You can include short instructions in the address such as "entrance on New Bond Street"</div></div><div id="ui-tooltip-6" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-6-content" aria-hidden="true" style="width: 236px; z-index: 15009;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-6-content" aria-atomic="true"><strong>Location on the map</strong> - Click on the map to enlarge it and drag the pointer to the exact location of your venue.</div></div><div id="ui-tooltip-7" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-7-content" aria-hidden="true" style="width: 236px; z-index: 15002;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-7-content" aria-atomic="true"><strong>Phone number</strong> - Enter your reception phone number. This should be the number that your clients can call for any enquiries.</div></div><div id="ui-tooltip-8" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-8-content" aria-hidden="true" style="width: 236px; z-index: 15003;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-8-content" aria-atomic="true"><strong>Email</strong> - Enter the email address that customers can use to enquire about your services.</div></div><div id="ui-tooltip-9" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-9-content" aria-hidden="true" style="width: 236px; z-index: 15004;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-9-content" aria-atomic="true"><strong>Website</strong> - Enter the link to your venue's website.</div></div><div id="ui-tooltip-10" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-10-content" aria-hidden="true" style="width: 236px; z-index: 15005;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-10-content" aria-atomic="true"><strong>Venue description</strong> - Enter a few sentences about your venue - those with good descriptions always receive more bookings.</div></div><div id="ui-tooltip-11" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-11-content" aria-hidden="true" style="width: 236px; z-index: 15006;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-11-content" aria-atomic="true"><strong>Venue description</strong> - Enter a few sentences about your venue - those with good descriptions always receive more bookings.</div></div><div id="ui-tooltip-0" class="ui-tooltip qtip ui-helper-reset ui-tooltip-default  ui-tooltip-pos-lc" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="ui-tooltip-0-content" aria-hidden="true" style="width: 236px; z-index: 15008;"><div class="ui-tooltip-tip" style="background-color: transparent ! important; border: 0px none ! important; height: 18px; width: 9px; top: 50%; margin-top: -9px; left: -8px;"><canvas style="background-color: transparent ! important; border: 0px none ! important;" height="18" width="9"></canvas></div><div class="ui-tooltip-content" id="ui-tooltip-0-content" aria-atomic="true"><strong>Venue name</strong> - Enter your venue name here - make sure it's all spelt correctly.</div></div></div>
						<div class="form-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							<a target="_blank" class="button-link preview-link" href="http://www.wahanda.com/place/sunspa-resort/overview/">Preview on Wahanda</a>
						</div>
					</form>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="opening-hours">
					<form action="">
						<div class="form-content">
							<ul class="form-list">
								<li data-tooltip="&lt;strong&gt;Business hours&lt;/strong&gt; - Define what days and times your venue is open. This will show up in your Wahanda.com listing and will be used for appointment bookings." class="special">
									<div class="label-column">Business hours</div>
									<ul class="week">
	<li class="on">
		<div>
			<input type="checkbox" checked="checked" id="MONDAY">
			<label for="MONDAY">Monday</label>
			<select name="time-from[MONDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option selected="selected" value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select name="time-to[MONDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option selected="selected" value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
	<li class="on">
		<div>
			<input type="checkbox" checked="checked" id="TUESDAY">
			<label for="TUESDAY">Tuesday</label>
			<select name="time-from[TUESDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option selected="selected" value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select name="time-to[TUESDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option selected="selected" value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
	<li class="on">
		<div>
			<input type="checkbox" checked="checked" id="WEDNESDAY">
			<label for="WEDNESDAY">Wednesday</label>
			<select name="time-from[WEDNESDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option selected="selected" value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select name="time-to[WEDNESDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option selected="selected" value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
	<li class="on">
		<div>
			<input type="checkbox" checked="checked" id="THURSDAY">
			<label for="THURSDAY">Thursday</label>
			<select name="time-from[THURSDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option selected="selected" value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select name="time-to[THURSDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option selected="selected" value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
	<li class="on">
		<div>
			<input type="checkbox" checked="checked" id="FRIDAY">
			<label for="FRIDAY">Friday</label>
			<select name="time-from[FRIDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option selected="selected" value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select name="time-to[FRIDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option selected="selected" value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
	<li class="on">
		<div>
			<input type="checkbox" checked="checked" id="SATURDAY">
			<label for="SATURDAY">Saturday</label>
			<select name="time-from[SATURDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option selected="selected" value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select name="time-to[SATURDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option selected="selected" value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
	<li class="off">
		<div>
			<input type="checkbox" id="SUNDAY">
			<label for="SUNDAY">Sunday</label>
			<select disabled="disabled" name="time-from[SUNDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option selected="selected" value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
			-
			<select disabled="disabled" name="time-to[SUNDAY]">
		<option value="00:00">00:00</option>
		<option value="01:00">01:00</option>
		<option value="02:00">02:00</option>
		<option value="03:00">03:00</option>
		<option value="04:00">04:00</option>
		<option value="05:00">05:00</option>
		<option value="06:00">06:00</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option selected="selected" value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		<option value="24:00">24:00</option>
</select>
		</div>
	</li>
</ul>
								</li>
								<li data-tooltip="&lt;strong&gt;Time zone&lt;/strong&gt; - Set the timezone that your venue is operating in.">
									<label class="label-column" for="time-zone">Time zone</label>
									<select id="time-zone">
		<option selected="selected" value="21">British Time</option>
</select>
								</li>
							</ul>
						</div>
						<div class="form-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					</form>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="policies">
					<form action="" novalidate="novalidate">
						<div class="form-content">
							<table cellspacing="0" cellpadding="0" class="default-form">
								<!-- Appointment policies -->
								<tbody><tr class="form-header-row">
									<td colspan="2">Appointment policies</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;eVoucher validity&lt;/strong&gt; - Set how eVouchers expire by default. This can be changed for individual services." class="form-row for-with-supplier">
									<td class="label-part">
										<label for="policies-voucherValidityMonths">eVoucher validity</label>
									</td>
									<td class="input-part">
										<div class="txt-input txt-input-mini"><input type="text" max="24" min="1" id="policies-voucherValidityMonths" name="voucherValidityMonths" class="required digits"></div>
										<span class="help-txt">months</span>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Allow cancellations?&lt;/strong&gt; - Set to Yes if you agree to refund appointments when a client complies to the cancellation policy set below." class="form-row">
									<td class="label-part">
										<label for="">Allow cancellations?</label>
									</td>
									<td data-related="b-appointment-cancellation" class="input-part b-related-cancellation-toggle">
										<div class="several">
											<input type="radio" value="1" id="appointment-allowCancellation-yes" name="appointment-allowCancellation" class="required">
											<label for="appointment-allowCancellation-yes">Yes</label>

											<input type="radio" value="0" id="appointment-allowCancellation-no" name="appointment-allowCancellation" class="required">
											<label for="appointment-allowCancellation-no">No</label>
										</div>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Cancellation period&lt;/strong&gt; - Set the number of hours' notice that a client must give in order to cancel and be eligible for a refund." class="form-row b-appointment-cancellation">
									<td class="label-part">
										<label for="appointment-cancellationPeriodHours">Cancellation period</label>
									</td>
									<td class="input-part">
										<div class="txt-input txt-input-mini"><input type="text" max="168" min="0" id="appointment-cancellationPeriodHours" name="appointment-cancellationPeriodHours" class="required digits"></div>
										<span class="help-txt">hours</span>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Cancellation policy&lt;/strong&gt; - Set your venue's cancellation policy, stating your terms and conditions for cancelling appointments." class="form-row b-appointment-cancellation">
									<td class="label-part">
										<label for="appointment-cancellationPolicy" class="optional">Cancellation policy</label>
									</td>
									<td class="input-part">
										<div class="">
											<textarea id="appointment-cancellationPolicy" name="appointment-cancellationPolicy" rows="3" class="full" cols="30"></textarea>
										</div>
									</td>
								</tr>
								<!-- Spa Day policies -->
								<tr class="form-separator-row">
									<td colspan="2"><span></span></td>
								</tr>
								<tr class="form-header-row">
									<td colspan="2">Spa Day policies</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Spa Day arrival time&lt;/strong&gt; - Used for Spa Day services on the website. Part of your general service terms and conditions." class="form-row">
									<td class="label-part">
										<label for="spa-day-spaDayCheckinTime" class="optional">Arrival time</label>
									</td>
									<td class="input-part">
										<select id="spa-day-spaDayCheckinTime" name="spaDayCheckinTime"><option value="">Not set</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
</select>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Spa Day departure time&lt;/strong&gt; - Used for Spa Day services on the website. Part of your general service terms and conditions." class="form-row">
									<td class="label-part">
										<label for="spa-day-spaDayCheckoutTime" class="optional">Departure time</label>
									</td>
									<td class="input-part">
										<select id="spa-day-spaDayCheckoutTime" name="spaDayCheckoutTime"><option value="">Not set</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
</select>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="">Allow cancellations?</label>
									</td>
									<td data-related="b-spa-day-cancellation" class="input-part b-related-cancellation-toggle">
										<div class="several">
											<input type="radio" value="1" id="spa-day-allowCancellation-yes" name="spa-day-allowCancellation" class="required">
											<label for="spa-day-allowCancellation-yes">Yes</label>

											<input type="radio" value="0" id="spa-day-allowCancellation-no" name="spa-day-allowCancellation" class="required">
											<label for="spa-day-allowCancellation-no">No</label>
										</div>
									</td>
								</tr>
								<tr class="form-row b-spa-day-cancellation">
									<td class="label-part">
										<label for="spa-day-cancellationPeriodDays">Cancellation period</label>
									</td>
									<td class="input-part">
										<div class="txt-input txt-input-mini"><input type="text" max="21" min="1" id="spa-day-cancellationPeriodDays" name="spa-day-cancellationPeriodDays" class="required digits"></div>
										<span class="help-txt">days</span>
									</td>
								</tr>
								<tr class="form-row b-spa-day-cancellation">
									<td class="label-part">
										<label for="spa-day-cancellationPolicy" class="optional">Cancellation policy</label>
									</td>
									<td class="input-part">
										<div class="">
											<textarea id="spa-day-cancellationPolicy" name="spa-day-cancellationPolicy" rows="3" class="full" cols="30"></textarea>
										</div>
									</td>
								</tr>
								<!-- Spa Break policies -->
								<tr class="form-separator-row b-for-dated hidden">
									<td colspan="2"><span></span></td>
								</tr>
								<tr class="form-header-row b-for-dated hidden">
									<td colspan="2">Overnight Stay policies</td>
								</tr>
								<tr class="form-row b-for-dated hidden">
									<td class="label-part">
										<label for="spa-break-checkinTime" class="optional">Check in</label>
									</td>
									<td class="input-part">
										<select id="spa-break-checkinTime" name="checkinTime"><option value="">Not set</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
</select>
									</td>
								</tr>
								<tr class="form-row b-for-dated hidden">
									<td class="label-part">
										<label for="spa-break-checkoutTime" class="optional">Check out</label>
									</td>
									<td class="input-part">
										<select id="spa-break-checkoutTime" name="checkoutTime"><option value="">Not set</option>
		<option value="07:00">07:00</option>
		<option value="08:00">08:00</option>
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
</select>
									</td>
								</tr>
								<tr class="form-row b-for-dated hidden">
									<td class="label-part">
										<label for="">Allow cancellations?</label>
									</td>
									<td data-related="b-spa-break-cancellation" class="input-part b-related-cancellation-toggle">
										<div class="several">
											<input type="radio" value="1" id="spa-break-allowCancellation-yes" name="spa-break-allowCancellation" class="required">
											<label for="spa-break-allowCancellation-yes">Yes</label>

											<input type="radio" value="0" id="spa-break-allowCancellation-no" name="spa-break-allowCancellation" class="required">
											<label for="spa-break-allowCancellation-no">No</label>
										</div>
									</td>
								</tr>
								<tr class="form-row b-for-dated b-spa-break-cancellation hidden" style="display: none;">
									<td class="label-part">
										<label for="spa-break-cancellationPeriodDays">Cancellation period</label>
									</td>
									<td class="input-part">
										<div class="txt-input txt-input-mini"><input type="text" max="21" min="1" id="spa-break-cancellationPeriodDays" name="spa-break-cancellationPeriodDays" class="required digits"></div>
										<span class="help-txt">days</span>
									</td>
								</tr>
								<tr class="form-row b-for-dated b-spa-break-cancellation hidden" style="display: none;">
									<td class="label-part">
										<label for="spa-break-cancellationPolicy" class="optional">Cancellation policy</label>
									</td>
									<td class="input-part">
										<div class="">
											<textarea id="spa-break-cancellationPolicy" name="spa-break-cancellationPolicy" rows="3" class="full" cols="30"></textarea>
										</div>
									</td>
								</tr>
								<!-- Other policies -->
								<tr class="form-separator-row">
									<td colspan="2"><span></span></td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Minimum age&lt;/strong&gt; - Set if you have any restrictions regarding customer age range in your venue." class="form-row">
									<td class="label-part">
										<label for="policies-minimumClientAge" class="optional">Minimum age</label>
									</td>
									<td class="input-part">
										<select id="policies-minimumClientAge" name="minimumClientAge" class="full"><option value="0">Not set</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
</select>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Other venue policies&lt;/strong&gt; - Use this field to set out other venue policies such as underwear requirements, mobile phone usage and more." class="form-row">
									<td class="label-part">
										<label for="policies-otherPolicies" class="optional">Other policies</label>
									</td>
									<td class="input-part">
										<textarea id="policies-otherPolicies" name="otherPolicies" cols="5" rows="3" class="full"></textarea>
									</td>
								</tr>
							</tbody></table>
						</div>
						<div class="form-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					</form>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="room-types">
					<div class="room-types-list">
						<div class="data-content">
							<div class="data-title clearfix">
								<div class="item-name">
									Name
								</div>
								<div class="item-category">
									Room class
								</div>
								<div class="item-amount">
									Number of guests
								</div>
							</div>
							<ul class="data-list"></ul>
						</div>
						<div class="data-actions">
							<button class="button button-primary a-new" id="create-category" type="button"><div class="button-inner"><div class="button-icon icons-plus"></div>Add room type</div></button>
						</div>
					</div>
					<div class="empty-page">
						<p><strong>No room types are defined.</strong><br>You have to add at least one room type to start managing your dated services.</p>
						<button class="button button-primary a-new" id="create-category" type="button"><div class="button-inner"><div class="button-icon icons-plus"></div>Add first room type</div></button>
					</div>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="venue-vouchers">
					<form>
						<div class="data-content">
							<div class="content-note">
								<div class="icon icons-info"></div>
								<p class="main-txt">The Wahanda Gift Voucher is the UK’s most widely accepted beauty and wellness voucher</p>
								<p class="second-txt">It is used as full or part payment for your full price treatments/packages. If a client doesn’t use the full voucher there’s no obligation to offer change, but you can give credit towards a future appointment to encourage repeat business. If they spend over the voucher value, you collect the difference from them direct. To accept our Voucher and enjoy the extra revenue this will bring, tick the box below.</p>
							</div>
							<div class="enabler">
								<input type="checkbox" value="true" name="venue-vouchers-acceptsWahandaVoucher" id="venue-vouchers-acceptsWahandaVoucher">
								<label for="venue-vouchers-acceptsWahandaVoucher">
									Accept Wahanda Gift Vouchers
								</label>
							</div>
							<div class="info smaller b-info-text hidden">
                                <p>When a customer uses a voucher in your venue, simply write your venue name and the date on the back of the voucher and write Void on the front. Return to us by post, keeping a note of the serial number, and you’ll receive payment 15 days after we receive your voucher, minus 15% plus VAT commission from the voucher value.</p><p><strong>Our address is:</strong></p><p>Finance Dept, Wahanda<br>2nd Floor Threeways House<br>40-44 Clipstone Street<br>London<br>W1W 5DW</p>
                            </div>
						</div>
						<div class="data-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="section-main ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="finance">
			<div class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all" id="finance-tabs">
				<div class="nav3">
					<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
						<li id="finance-subtab-payments" class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
							<a href="#payments">Payments</a>
						</li>
						<li id="finance-subtab-billing-details" class="ui-state-default ui-corner-top">
							<a href="#billing-details">Billing information</a>
						</li>
						<li id="finance-subtab-bank-details" class="ui-state-default ui-corner-top">
							<a href="#bank-details">Bank details</a>
						</li>
					</ul>
				</div>
				<div class="tab-content multi ui-tabs-panel ui-widget-content ui-corner-bottom" id="payments">
					<div class="data-content">
						<div class="payment-summary clearfix">
							<div class="first hidden">
								<span class="title">Total Earnings through Wahanda</span>
								<span class="explanation">* minus commission and fees</span>
								<span class="amount"></span>

							</div>
							<div class="second hidden">
								<div data-y-axis-label="Earnings" data-x-axis-label="Months" class="chart"></div>
							</div>
						</div>
						<div class="content-note hidden">
							<div class="icon icons-info"></div>
							<p class="main-txt">
								Why is this screen empty?
							</p>
							<p class="second-txt">
								The list of payments will be displayed here when you will start selling through Wahanda.
							</p>
						</div>

						<div class="content-table-wrapper hidden">
							<div class="content-table-head">
								<table cellspacing="0" cellpadding="0" class="has-tick">
									<tbody><tr>
										<th class="number-column">Number</th>
										<th class="date-column">Payment date</th>
										<th class="amount-column">Amount</th>
										<th class="items-column">Items</th>
										<th class="status-column">Status</th>
										<th class="report-column">Detailed report</th>
										<th class="tick">&nbsp;</th>
									</tr>
								</tbody></table>
							</div>
							<div class="content-table-body">
								<table cellspacing="0" cellpadding="0">
								</table>

								<div class="hint-tooltip-wrapper paid hint-tooltip-note hint-tooltip-left hint-tooltip-confirmed hidden">
									<div class="type">Note</div>

									<div class="note-content">
										This invoice has been paid
									</div>

									<div class="arrow">
										<div class="arrow-inner"></div>
									</div>
								</div>
								<div class="hint-tooltip-wrapper cancelled hint-tooltip-note hint-tooltip-left hint-tooltip-note hidden">
									<div class="type">Note</div>

									<div class="note-content">
										This invoice has been cancelled
									</div>

									<div class="arrow">
										<div class="arrow-inner"></div>
									</div>
								</div>
								<div class="hint-tooltip-wrapper hint-tooltip-note held hint-tooltip-left hint-tooltip-not-confirmed hidden">
									<div class="type">Note</div>

									<div class="note-content">
										Payment of this invoice is on hold, pending review
									</div>

									<div class="arrow">
										<div class="arrow-inner"></div>
									</div>
								</div>
								<div class="hint-tooltip-wrapper hint-tooltip-note payment-due hint-tooltip-left hint-tooltip-critical hidden">
									<div class="type">Note</div>

									<div class="note-content">
										Amounts payable to Wahanda for services provided, e.g. Premium Listing.
									</div>

									<div class="arrow">
										<div class="arrow-inner"></div>
									</div>
								</div>
								<div class="hint-tooltip-wrapper hint-tooltip-note unpaid hint-tooltip-left hint-tooltip-critical hidden">
									<div class="type">Note</div>

									<div class="note-content">
										This invoice is to be paid on the payment date shown
									</div>

									<div class="arrow">
										<div class="arrow-inner"></div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				<div class="tab-content multi ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="billing-details">
					<form action="" novalidate="novalidate">
						<div class="form-content">
								<table cellspacing="0" cellpadding="0" class="default-form">
		<tbody><tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-name">Company title</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-name" name="supplier-settings-name" class="required">
				</div>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-companyNumber" class="optional">Company number</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-companyNumber" name="supplier-settings-companyNumber" class="alphanumeric">
				</div>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-vatNumber" class="optional">VAT number</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-vatNumber" name="supplier-settings-vatNumber" class="alphanumeric">
				</div>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-address">Address</label>
			</td>
			<td class="input-part">
				<textarea max-text-lines="4" id="supplier-settings-address" name="supplier-settings-address" rows="4" class="full required"></textarea>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-addressPostalRef">Postcode</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-addressPostalRef" name="supplier-settings-addressPostalRef" class="required postal-code">
				</div>
			</td>
		</tr>
		<tr class="form-row state-row hidden">
			<td class="label-part">
				<label for="supplier-settings-addressStateCode">State</label>
			</td>
			<td class="input-part">
				<select id="supplier-settings-addressStateCode" name="supplier-settings-addressStateCode" class="required"><option value="">Not set</option>
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AS">American Samoa</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="GU">Guam</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MH">Marshall Islands</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="FM">Micronesia</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PW">Palau</option>
		<option value="PA">Pennsylvania</option>
		<option value="PR">Puerto Rico</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="DC">Washington DC</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
</select>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-addressCountryCode">Country</label>
			</td>
			<td class="input-part">
				<select id="supplier-settings-addressCountryCode" name="supplier-settings-addressCountryCode" class="required"><option value="">Not set</option>
		<option value="AF">Afghanistan</option>
		<option value="AL">Albania</option>
		<option value="DZ">Algeria</option>
		<option value="AS">American Samoa</option>
		<option value="AD">Andorra</option>
		<option value="AO">Angola</option>
		<option value="AI">Anguilla</option>
		<option value="AG">Antigua And Barbuda</option>
		<option value="AR">Argentina</option>
		<option value="AM">Armenia</option>
		<option value="AW">Aruba</option>
		<option value="AU">Australia</option>
		<option value="AT">Austria</option>
		<option value="AZ">Azerbaijan</option>
		<option value="BS">Bahamas</option>
		<option value="BH">Bahrain</option>
		<option value="BD">Bangladesh</option>
		<option value="BB">Barbados</option>
		<option value="BY">Belarus</option>
		<option value="BE">Belgium</option>
		<option value="BZ">Belize</option>
		<option value="BJ">Benin</option>
		<option value="BM">Bermuda</option>
		<option value="BT">Bhutan</option>
		<option value="BO">Bolivia</option>
		<option value="BA">Bosnia-Herzegovina</option>
		<option value="BW">Botswana</option>
		<option value="BR">Brazil</option>
		<option value="IO">British Indian Ocean Territory</option>
		<option value="BN">Brunei Darussalam</option>
		<option value="BG">Bulgaria</option>
		<option value="BF">Burkina Faso</option>
		<option value="BI">Burundi</option>
		<option value="KH">Cambodia</option>
		<option value="CM">Cameroon</option>
		<option value="CA">Canada</option>
		<option value="CV">Cape Verde</option>
		<option value="KY">Cayman Islands</option>
		<option value="CF">Central African Republic</option>
		<option value="TD">Chad</option>
		<option value="CL">Chile</option>
		<option value="CN">China</option>
		<option value="CX">Christmas Island</option>
		<option value="CC">Cocos Islands</option>
		<option value="CO">Colombia</option>
		<option value="KM">Comoros</option>
		<option value="CD">Congo, Democratic Republic Of</option>
		<option value="CG">Congo, People's Republic Of</option>
		<option value="CK">Cook Islands</option>
		<option value="CR">Costa Rica</option>
		<option value="CI">Cote D'ivoire</option>
		<option value="HR">Croatia</option>
		<option value="CU">Cuba</option>
		<option value="CY">Cyprus</option>
		<option value="CZ">Czech Republic</option>
		<option value="DK">Denmark</option>
		<option value="DJ">Djibouti</option>
		<option value="DM">Dominica</option>
		<option value="DO">Dominican Republic</option>
		<option value="TL">East Timor</option>
		<option value="EC">Ecuador</option>
		<option value="EG">Egypt</option>
		<option value="SV">El Salvador</option>
		<option value="GQ">Equatorial Guinea</option>
		<option value="ER">Eritrea</option>
		<option value="EE">Estonia</option>
		<option value="ET">Ethiopia</option>
		<option value="FK">Falkland Islands</option>
		<option value="FO">Faroe Islands</option>
		<option value="FJ">Fiji</option>
		<option value="FI">Finland</option>
		<option value="FR">France</option>
		<option value="GF">French Guiana</option>
		<option value="PF">French Polynesia</option>
		<option value="TF">French Southern Territories</option>
		<option value="GA">Gabon</option>
		<option value="GM">Gambia</option>
		<option value="GE">Georgia</option>
		<option value="DE">Germany</option>
		<option value="GH">Ghana</option>
		<option value="GI">Gibraltar</option>
		<option value="GR">Greece</option>
		<option value="GL">Greenland</option>
		<option value="GD">Grenada</option>
		<option value="GP">Guadeloupe</option>
		<option value="GU">Guam</option>
		<option value="GT">Guatemala</option>
		<option value="GG">Guernsey</option>
		<option value="GN">Guinea</option>
		<option value="GW">Guinea-bissau</option>
		<option value="GY">Guyana</option>
		<option value="HT">Haiti</option>
		<option value="HN">Honduras</option>
		<option value="HK">Hong Kong</option>
		<option value="HU">Hungary</option>
		<option value="IS">Iceland</option>
		<option value="IN">India</option>
		<option value="ID">Indonesia</option>
		<option value="IR">Iran</option>
		<option value="IQ">Iraq</option>
		<option value="IE">Ireland</option>
		<option value="IM">Isle of Man</option>
		<option value="IL">Israel</option>
		<option value="IT">Italy</option>
		<option value="JM">Jamaica</option>
		<option value="JP">Japan</option>
		<option value="JE">Jersey</option>
		<option value="JO">Jordan</option>
		<option value="KZ">Kazakhstan</option>
		<option value="KE">Kenya</option>
		<option value="KI">Kiribati</option>
		<option value="KW">Kuwait</option>
		<option value="KG">Kyrgyzstan</option>
		<option value="LA">Laos</option>
		<option value="LV">Latvia</option>
		<option value="LB">Lebanon</option>
		<option value="LS">Lesotho</option>
		<option value="LR">Liberia</option>
		<option value="LY">Libya</option>
		<option value="LI">Liechtenstein</option>
		<option value="LT">Lithuania</option>
		<option value="LU">Luxembourg</option>
		<option value="MO">Macau</option>
		<option value="MK">Macedonia</option>
		<option value="MG">Madagascar</option>
		<option value="MW">Malawi</option>
		<option value="MY">Malaysia</option>
		<option value="MV">Maldives</option>
		<option value="ML">Mali</option>
		<option value="MT">Malta</option>
		<option value="MH">Marshall Islands</option>
		<option value="MQ">Martinique</option>
		<option value="MR">Mauritania</option>
		<option value="MU">Mauritius</option>
		<option value="YT">Mayotte</option>
		<option value="MX">Mexico</option>
		<option value="FM">Micronesia</option>
		<option value="MD">Moldova</option>
		<option value="MC">Monaco</option>
		<option value="MN">Mongolia</option>
		<option value="ME">Montenegro</option>
		<option value="MS">Montserrat</option>
		<option value="MA">Morocco</option>
		<option value="MZ">Mozambique</option>
		<option value="MM">Myanmar</option>
		<option value="NA">Namibia</option>
		<option value="NR">Nauru</option>
		<option value="NP">Nepal</option>
		<option value="NL">Netherlands</option>
		<option value="AN">Netherlands Antilles</option>
		<option value="NC">New Caledonia</option>
		<option value="NZ">New Zealand</option>
		<option value="NI">Nicaragua</option>
		<option value="NE">Niger</option>
		<option value="NG">Nigeria</option>
		<option value="NU">Niue</option>
		<option value="NF">Norfolk Island</option>
		<option value="KP">North Korea</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="NO">Norway</option>
		<option value="OM">Oman</option>
		<option value="PK">Pakistan</option>
		<option value="PW">Palau</option>
		<option value="PA">Panama</option>
		<option value="PG">Papua New Guinea</option>
		<option value="PY">Paraguay</option>
		<option value="PE">Peru</option>
		<option value="PH">Philippines</option>
		<option value="PN">Pitcairn</option>
		<option value="PL">Poland</option>
		<option value="PT">Portugal</option>
		<option value="PR">Puerto Rico</option>
		<option value="QA">Qatar</option>
		<option value="RE">Reunion</option>
		<option value="RO">Romania</option>
		<option value="RU">Russia</option>
		<option value="RW">Rwanda</option>
		<option value="WS">Samoa</option>
		<option value="SM">San Marino</option>
		<option value="ST">Sao Tome And Principe</option>
		<option value="SA">Saudi Arabia</option>
		<option value="SN">Senegal</option>
		<option value="RS">Serbia</option>
		<option value="CS">Serbia &amp; Montenegro</option>
		<option value="SC">Seychelles</option>
		<option value="SL">Sierra Leone</option>
		<option value="SG">Singapore</option>
		<option value="SK">Slovakia</option>
		<option value="SI">Slovenia</option>
		<option value="SB">Solomon Islands</option>
		<option value="SO">Somalia</option>
		<option value="ZA">South Africa</option>
		<option value="GS">South Georgia And Sandwich Isl.</option>
		<option value="KR">South Korea</option>
		<option value="ES">Spain</option>
		<option value="LK">Sri Lanka</option>
		<option value="BL">St. Barthélemy</option>
		<option value="SH">St. Helena</option>
		<option value="KN">St. Kitts And Nevis</option>
		<option value="LC">St. Lucia</option>
		<option value="MF">St. Martin</option>
		<option value="PM">St. Pierre And Miquelon</option>
		<option value="VC">St. Vincent And The Grenadines</option>
		<option value="SD">Sudan</option>
		<option value="SR">Suriname</option>
		<option value="SZ">Swaziland</option>
		<option value="SE">Sweden</option>
		<option value="CH">Switzerland</option>
		<option value="SY">Syria</option>
		<option value="TW">Taiwan</option>
		<option value="TJ">Tajikistan</option>
		<option value="TZ">Tanzania</option>
		<option value="TH">Thailand</option>
		<option value="TG">Togo</option>
		<option value="TK">Tokelau</option>
		<option value="TO">Tonga</option>
		<option value="TT">Trinidad And Tobago</option>
		<option value="TN">Tunisia</option>
		<option value="TR">Turkey</option>
		<option value="TM">Turkmenistan</option>
		<option value="TC">Turks And Caicos Islands</option>
		<option value="TV">Tuvalu</option>
		<option value="UG">Uganda</option>
		<option value="UA">Ukraine</option>
		<option value="AE">United Arab Emirates</option>
		<option value="GB">United Kingdom</option>
		<option value="US">United States</option>
		<option value="UY">Uruguay</option>
		<option value="UZ">Uzbekistan</option>
		<option value="VU">Vanuatu</option>
		<option value="VA">Vatican City State (Holy See)</option>
		<option value="VE">Venezuela</option>
		<option value="VN">Vietnam</option>
		<option value="VG">Virgin Islands (British)</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="WF">Wallis And Futuna Islands</option>
		<option value="EH">Western Sahara</option>
		<option value="YE">Yemen</option>
		<option value="ZM">Zambia</option>
		<option value="ZW">Zimbabwe</option>
</select>
			</td>
		</tr>
		<tr class="form-separator-row">
			<td colspan="2"><span></span></td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-operatingCountryCode">Operating country</label>
			</td>
			<td class="input-part">
				<select id="supplier-settings-operatingCountryCode" name="supplier-settings-operatingCountryCode" class="required"><option value="">Not set</option>
		<option value="AF">Afghanistan</option>
		<option value="AL">Albania</option>
		<option value="DZ">Algeria</option>
		<option value="AS">American Samoa</option>
		<option value="AD">Andorra</option>
		<option value="AO">Angola</option>
		<option value="AI">Anguilla</option>
		<option value="AG">Antigua And Barbuda</option>
		<option value="AR">Argentina</option>
		<option value="AM">Armenia</option>
		<option value="AW">Aruba</option>
		<option value="AU">Australia</option>
		<option value="AT">Austria</option>
		<option value="AZ">Azerbaijan</option>
		<option value="BS">Bahamas</option>
		<option value="BH">Bahrain</option>
		<option value="BD">Bangladesh</option>
		<option value="BB">Barbados</option>
		<option value="BY">Belarus</option>
		<option value="BE">Belgium</option>
		<option value="BZ">Belize</option>
		<option value="BJ">Benin</option>
		<option value="BM">Bermuda</option>
		<option value="BT">Bhutan</option>
		<option value="BO">Bolivia</option>
		<option value="BA">Bosnia-Herzegovina</option>
		<option value="BW">Botswana</option>
		<option value="BR">Brazil</option>
		<option value="IO">British Indian Ocean Territory</option>
		<option value="BN">Brunei Darussalam</option>
		<option value="BG">Bulgaria</option>
		<option value="BF">Burkina Faso</option>
		<option value="BI">Burundi</option>
		<option value="KH">Cambodia</option>
		<option value="CM">Cameroon</option>
		<option value="CA">Canada</option>
		<option value="CV">Cape Verde</option>
		<option value="KY">Cayman Islands</option>
		<option value="CF">Central African Republic</option>
		<option value="TD">Chad</option>
		<option value="CL">Chile</option>
		<option value="CN">China</option>
		<option value="CX">Christmas Island</option>
		<option value="CC">Cocos Islands</option>
		<option value="CO">Colombia</option>
		<option value="KM">Comoros</option>
		<option value="CD">Congo, Democratic Republic Of</option>
		<option value="CG">Congo, People's Republic Of</option>
		<option value="CK">Cook Islands</option>
		<option value="CR">Costa Rica</option>
		<option value="CI">Cote D'ivoire</option>
		<option value="HR">Croatia</option>
		<option value="CU">Cuba</option>
		<option value="CY">Cyprus</option>
		<option value="CZ">Czech Republic</option>
		<option value="DK">Denmark</option>
		<option value="DJ">Djibouti</option>
		<option value="DM">Dominica</option>
		<option value="DO">Dominican Republic</option>
		<option value="TL">East Timor</option>
		<option value="EC">Ecuador</option>
		<option value="EG">Egypt</option>
		<option value="SV">El Salvador</option>
		<option value="GQ">Equatorial Guinea</option>
		<option value="ER">Eritrea</option>
		<option value="EE">Estonia</option>
		<option value="ET">Ethiopia</option>
		<option value="FK">Falkland Islands</option>
		<option value="FO">Faroe Islands</option>
		<option value="FJ">Fiji</option>
		<option value="FI">Finland</option>
		<option value="FR">France</option>
		<option value="GF">French Guiana</option>
		<option value="PF">French Polynesia</option>
		<option value="TF">French Southern Territories</option>
		<option value="GA">Gabon</option>
		<option value="GM">Gambia</option>
		<option value="GE">Georgia</option>
		<option value="DE">Germany</option>
		<option value="GH">Ghana</option>
		<option value="GI">Gibraltar</option>
		<option value="GR">Greece</option>
		<option value="GL">Greenland</option>
		<option value="GD">Grenada</option>
		<option value="GP">Guadeloupe</option>
		<option value="GU">Guam</option>
		<option value="GT">Guatemala</option>
		<option value="GG">Guernsey</option>
		<option value="GN">Guinea</option>
		<option value="GW">Guinea-bissau</option>
		<option value="GY">Guyana</option>
		<option value="HT">Haiti</option>
		<option value="HN">Honduras</option>
		<option value="HK">Hong Kong</option>
		<option value="HU">Hungary</option>
		<option value="IS">Iceland</option>
		<option value="IN">India</option>
		<option value="ID">Indonesia</option>
		<option value="IR">Iran</option>
		<option value="IQ">Iraq</option>
		<option value="IE">Ireland</option>
		<option value="IM">Isle of Man</option>
		<option value="IL">Israel</option>
		<option value="IT">Italy</option>
		<option value="JM">Jamaica</option>
		<option value="JP">Japan</option>
		<option value="JE">Jersey</option>
		<option value="JO">Jordan</option>
		<option value="KZ">Kazakhstan</option>
		<option value="KE">Kenya</option>
		<option value="KI">Kiribati</option>
		<option value="KW">Kuwait</option>
		<option value="KG">Kyrgyzstan</option>
		<option value="LA">Laos</option>
		<option value="LV">Latvia</option>
		<option value="LB">Lebanon</option>
		<option value="LS">Lesotho</option>
		<option value="LR">Liberia</option>
		<option value="LY">Libya</option>
		<option value="LI">Liechtenstein</option>
		<option value="LT">Lithuania</option>
		<option value="LU">Luxembourg</option>
		<option value="MO">Macau</option>
		<option value="MK">Macedonia</option>
		<option value="MG">Madagascar</option>
		<option value="MW">Malawi</option>
		<option value="MY">Malaysia</option>
		<option value="MV">Maldives</option>
		<option value="ML">Mali</option>
		<option value="MT">Malta</option>
		<option value="MH">Marshall Islands</option>
		<option value="MQ">Martinique</option>
		<option value="MR">Mauritania</option>
		<option value="MU">Mauritius</option>
		<option value="YT">Mayotte</option>
		<option value="MX">Mexico</option>
		<option value="FM">Micronesia</option>
		<option value="MD">Moldova</option>
		<option value="MC">Monaco</option>
		<option value="MN">Mongolia</option>
		<option value="ME">Montenegro</option>
		<option value="MS">Montserrat</option>
		<option value="MA">Morocco</option>
		<option value="MZ">Mozambique</option>
		<option value="MM">Myanmar</option>
		<option value="NA">Namibia</option>
		<option value="NR">Nauru</option>
		<option value="NP">Nepal</option>
		<option value="NL">Netherlands</option>
		<option value="AN">Netherlands Antilles</option>
		<option value="NC">New Caledonia</option>
		<option value="NZ">New Zealand</option>
		<option value="NI">Nicaragua</option>
		<option value="NE">Niger</option>
		<option value="NG">Nigeria</option>
		<option value="NU">Niue</option>
		<option value="NF">Norfolk Island</option>
		<option value="KP">North Korea</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="NO">Norway</option>
		<option value="OM">Oman</option>
		<option value="PK">Pakistan</option>
		<option value="PW">Palau</option>
		<option value="PA">Panama</option>
		<option value="PG">Papua New Guinea</option>
		<option value="PY">Paraguay</option>
		<option value="PE">Peru</option>
		<option value="PH">Philippines</option>
		<option value="PN">Pitcairn</option>
		<option value="PL">Poland</option>
		<option value="PT">Portugal</option>
		<option value="PR">Puerto Rico</option>
		<option value="QA">Qatar</option>
		<option value="RE">Reunion</option>
		<option value="RO">Romania</option>
		<option value="RU">Russia</option>
		<option value="RW">Rwanda</option>
		<option value="WS">Samoa</option>
		<option value="SM">San Marino</option>
		<option value="ST">Sao Tome And Principe</option>
		<option value="SA">Saudi Arabia</option>
		<option value="SN">Senegal</option>
		<option value="RS">Serbia</option>
		<option value="CS">Serbia &amp; Montenegro</option>
		<option value="SC">Seychelles</option>
		<option value="SL">Sierra Leone</option>
		<option value="SG">Singapore</option>
		<option value="SK">Slovakia</option>
		<option value="SI">Slovenia</option>
		<option value="SB">Solomon Islands</option>
		<option value="SO">Somalia</option>
		<option value="ZA">South Africa</option>
		<option value="GS">South Georgia And Sandwich Isl.</option>
		<option value="KR">South Korea</option>
		<option value="ES">Spain</option>
		<option value="LK">Sri Lanka</option>
		<option value="BL">St. Barthélemy</option>
		<option value="SH">St. Helena</option>
		<option value="KN">St. Kitts And Nevis</option>
		<option value="LC">St. Lucia</option>
		<option value="MF">St. Martin</option>
		<option value="PM">St. Pierre And Miquelon</option>
		<option value="VC">St. Vincent And The Grenadines</option>
		<option value="SD">Sudan</option>
		<option value="SR">Suriname</option>
		<option value="SZ">Swaziland</option>
		<option value="SE">Sweden</option>
		<option value="CH">Switzerland</option>
		<option value="SY">Syria</option>
		<option value="TW">Taiwan</option>
		<option value="TJ">Tajikistan</option>
		<option value="TZ">Tanzania</option>
		<option value="TH">Thailand</option>
		<option value="TG">Togo</option>
		<option value="TK">Tokelau</option>
		<option value="TO">Tonga</option>
		<option value="TT">Trinidad And Tobago</option>
		<option value="TN">Tunisia</option>
		<option value="TR">Turkey</option>
		<option value="TM">Turkmenistan</option>
		<option value="TC">Turks And Caicos Islands</option>
		<option value="TV">Tuvalu</option>
		<option value="UG">Uganda</option>
		<option value="UA">Ukraine</option>
		<option value="AE">United Arab Emirates</option>
		<option value="GB">United Kingdom</option>
		<option value="US">United States</option>
		<option value="UY">Uruguay</option>
		<option value="UZ">Uzbekistan</option>
		<option value="VU">Vanuatu</option>
		<option value="VA">Vatican City State (Holy See)</option>
		<option value="VE">Venezuela</option>
		<option value="VN">Vietnam</option>
		<option value="VG">Virgin Islands (British)</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="WF">Wallis And Futuna Islands</option>
		<option value="EH">Western Sahara</option>
		<option value="YE">Yemen</option>
		<option value="ZM">Zambia</option>
		<option value="ZW">Zimbabwe</option>
</select>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-invoiceCurrencyCode">Operating currency</label>
			</td>
			<td class="input-part">
				<select id="supplier-settings-invoiceCurrencyCode" name="supplier-settings-invoiceCurrencyCode" class="required">
		<option value="GBP">British Pound</option>
		<option value="EUR">Euro</option>
		<option value="USD">US Dollar</option>
</select>
			</td>
		</tr>
		<tr class="form-separator-row">
			<td colspan="2"><span></span></td>
		</tr>
		<tr class="form-header-row">
			<td colspan="2">Contact person</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-name-cn">Contact name</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-contact-name-cn" name="supplier-settings-contact-name-cn" class="required">
				</div>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-email-cn">Email</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-email-cn" name="supplier-settings-email-cn" class="email required">
				</div>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-phone-cn">Phone</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-phone-cn" name="supplier-settings-phone-cn" phone-by-country-field="#supplier-settings-addressCountryCode" class="required">
				</div>
			</td>
		</tr>
		<tr class="form-row">
			<td class="label-part">
				<label for="supplier-settings-phone-fn" class="optional">Billing contact phone</label>
			</td>
			<td class="input-part">
				<div class="txt-input">
					<input type="text" id="supplier-settings-phone-fn" name="supplier-settings-phone-fn" phone-by-country-field="#supplier-settings-addressCountryCode" class="">
				</div>
			</td>
		</tr>
	</tbody></table>

						</div>
						<div class="form-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					<div class="top-shadow hidden" style="top: -1px; left: 0px; width: 0px;"></div><div class="bottom-shadow hidden" style="top: -4px; left: 0px; width: 0px;"></div></form>
				</div>
				<div class="tab-content multi ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="bank-details">
					<form action="" novalidate="novalidate">
						<div class="form-content">
							<div class="content-note">
								<div class="icons-info"></div>
								<p class="main-txt">Our finance team makes regular payments for appointment and voucher sales through Wahanda. Based on your agreed payment terms:</p>
								<div class="b-payment-term b-payment-poo" style="display: none;">
									<ul class="simple-list">
										<li>eVouchers will be paid <strong>30 days</strong> after sale.</li>
										<li>All dated services will be automatically paid <strong>30 days</strong> after the appointment/check in.</li>
									</ul>
									<p>To discuss moving to a more prompt payment cycle, please contact <a href="mailto:supply.support@wahanda.com">supply.support@wahanda.com</a></p>
								</div>
								<div class="b-payment-term b-payment-por hidden" style="display: block;">
									<ul class="simple-list">
										<li>eVouchers will be paid <strong>15 days</strong> after they have been redeemed by you in Connect.</li>
										<li>All dated services will be automatically paid <strong>15 days</strong> after the date of the appointment/check in.</li>
									</ul>
								</div>
							</div>
							<table cellspacing="0" cellpadding="0" class="default-form">
								<tbody><tr class="form-row">
									<td class="label-part">
										<label for="bank-details-accountName">Account holder name</label>
									</td>
									<td class="input-part">
										<div class="txt-input">
											<input type="text" id="bank-details-accountName" name="bank-details-accountName" class="required">
										</div>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="bank-details-accountNumber">Account number</label>
									</td>
									<td class="input-part">
										<div class="txt-input">
											<input type="text" id="bank-details-accountNumber" name="bank-details-accountNumber" class="required account-no">
										</div>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="bank-details-bankCode">Bank sort code</label>
									</td>
									<td class="input-part">
										<div class="txt-input">
											<input type="text" id="bank-details-bankCode" name="bank-details-bankCode" class="required">
										</div>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="bank-details-bankName">Bank name</label>
									</td>
									<td class="input-part">
										<div class="txt-input">
											<input type="text" id="bank-details-bankName" name="bank-details-bankName" class="required">
										</div>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="bank-details-bankAddress">Bank address</label>
									</td>
									<td class="input-part">
										<textarea max-text-lines="4" id="bank-details-bankAddress" name="bank-details-bankAddress" rows="4" class="full required"></textarea>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="bank-details-bankAddressPostalRef">Postcode</label>
									</td>
									<td class="input-part">
										<div class="txt-input">
											<input type="text" id="bank-details-bankAddressPostalRef" name="bank-details-bankAddressPostalRef" class="required postal-code">
										</div>
									</td>
								</tr>
								<tr class="form-row state-row hidden">
									<td class="label-part">
										<label for="bank-details-bankAddressStateCode">State</label>
									</td>
									<td class="input-part">
										<select id="bank-details-bankAddressStateCode" name="bank-details-bankAddressStateCode" class="required"><option value="">Not set</option>
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AS">American Samoa</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="GU">Guam</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MH">Marshall Islands</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="FM">Micronesia</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PW">Palau</option>
		<option value="PA">Pennsylvania</option>
		<option value="PR">Puerto Rico</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="DC">Washington DC</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
</select>
									</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="bank-details-bankAddressCountryCode">Country</label>
									</td>
									<td class="input-part">
										<select id="bank-details-bankAddressCountryCode" name="bank-details-bankAddressCountryCode" class="required"><option value="">Not set</option>
		<option value="AF">Afghanistan</option>
		<option value="AL">Albania</option>
		<option value="DZ">Algeria</option>
		<option value="AS">American Samoa</option>
		<option value="AD">Andorra</option>
		<option value="AO">Angola</option>
		<option value="AI">Anguilla</option>
		<option value="AG">Antigua And Barbuda</option>
		<option value="AR">Argentina</option>
		<option value="AM">Armenia</option>
		<option value="AW">Aruba</option>
		<option value="AU">Australia</option>
		<option value="AT">Austria</option>
		<option value="AZ">Azerbaijan</option>
		<option value="BS">Bahamas</option>
		<option value="BH">Bahrain</option>
		<option value="BD">Bangladesh</option>
		<option value="BB">Barbados</option>
		<option value="BY">Belarus</option>
		<option value="BE">Belgium</option>
		<option value="BZ">Belize</option>
		<option value="BJ">Benin</option>
		<option value="BM">Bermuda</option>
		<option value="BT">Bhutan</option>
		<option value="BO">Bolivia</option>
		<option value="BA">Bosnia-Herzegovina</option>
		<option value="BW">Botswana</option>
		<option value="BR">Brazil</option>
		<option value="IO">British Indian Ocean Territory</option>
		<option value="BN">Brunei Darussalam</option>
		<option value="BG">Bulgaria</option>
		<option value="BF">Burkina Faso</option>
		<option value="BI">Burundi</option>
		<option value="KH">Cambodia</option>
		<option value="CM">Cameroon</option>
		<option value="CA">Canada</option>
		<option value="CV">Cape Verde</option>
		<option value="KY">Cayman Islands</option>
		<option value="CF">Central African Republic</option>
		<option value="TD">Chad</option>
		<option value="CL">Chile</option>
		<option value="CN">China</option>
		<option value="CX">Christmas Island</option>
		<option value="CC">Cocos Islands</option>
		<option value="CO">Colombia</option>
		<option value="KM">Comoros</option>
		<option value="CD">Congo, Democratic Republic Of</option>
		<option value="CG">Congo, People's Republic Of</option>
		<option value="CK">Cook Islands</option>
		<option value="CR">Costa Rica</option>
		<option value="CI">Cote D'ivoire</option>
		<option value="HR">Croatia</option>
		<option value="CU">Cuba</option>
		<option value="CY">Cyprus</option>
		<option value="CZ">Czech Republic</option>
		<option value="DK">Denmark</option>
		<option value="DJ">Djibouti</option>
		<option value="DM">Dominica</option>
		<option value="DO">Dominican Republic</option>
		<option value="TL">East Timor</option>
		<option value="EC">Ecuador</option>
		<option value="EG">Egypt</option>
		<option value="SV">El Salvador</option>
		<option value="GQ">Equatorial Guinea</option>
		<option value="ER">Eritrea</option>
		<option value="EE">Estonia</option>
		<option value="ET">Ethiopia</option>
		<option value="FK">Falkland Islands</option>
		<option value="FO">Faroe Islands</option>
		<option value="FJ">Fiji</option>
		<option value="FI">Finland</option>
		<option value="FR">France</option>
		<option value="GF">French Guiana</option>
		<option value="PF">French Polynesia</option>
		<option value="TF">French Southern Territories</option>
		<option value="GA">Gabon</option>
		<option value="GM">Gambia</option>
		<option value="GE">Georgia</option>
		<option value="DE">Germany</option>
		<option value="GH">Ghana</option>
		<option value="GI">Gibraltar</option>
		<option value="GR">Greece</option>
		<option value="GL">Greenland</option>
		<option value="GD">Grenada</option>
		<option value="GP">Guadeloupe</option>
		<option value="GU">Guam</option>
		<option value="GT">Guatemala</option>
		<option value="GG">Guernsey</option>
		<option value="GN">Guinea</option>
		<option value="GW">Guinea-bissau</option>
		<option value="GY">Guyana</option>
		<option value="HT">Haiti</option>
		<option value="HN">Honduras</option>
		<option value="HK">Hong Kong</option>
		<option value="HU">Hungary</option>
		<option value="IS">Iceland</option>
		<option value="IN">India</option>
		<option value="ID">Indonesia</option>
		<option value="IR">Iran</option>
		<option value="IQ">Iraq</option>
		<option value="IE">Ireland</option>
		<option value="IM">Isle of Man</option>
		<option value="IL">Israel</option>
		<option value="IT">Italy</option>
		<option value="JM">Jamaica</option>
		<option value="JP">Japan</option>
		<option value="JE">Jersey</option>
		<option value="JO">Jordan</option>
		<option value="KZ">Kazakhstan</option>
		<option value="KE">Kenya</option>
		<option value="KI">Kiribati</option>
		<option value="KW">Kuwait</option>
		<option value="KG">Kyrgyzstan</option>
		<option value="LA">Laos</option>
		<option value="LV">Latvia</option>
		<option value="LB">Lebanon</option>
		<option value="LS">Lesotho</option>
		<option value="LR">Liberia</option>
		<option value="LY">Libya</option>
		<option value="LI">Liechtenstein</option>
		<option value="LT">Lithuania</option>
		<option value="LU">Luxembourg</option>
		<option value="MO">Macau</option>
		<option value="MK">Macedonia</option>
		<option value="MG">Madagascar</option>
		<option value="MW">Malawi</option>
		<option value="MY">Malaysia</option>
		<option value="MV">Maldives</option>
		<option value="ML">Mali</option>
		<option value="MT">Malta</option>
		<option value="MH">Marshall Islands</option>
		<option value="MQ">Martinique</option>
		<option value="MR">Mauritania</option>
		<option value="MU">Mauritius</option>
		<option value="YT">Mayotte</option>
		<option value="MX">Mexico</option>
		<option value="FM">Micronesia</option>
		<option value="MD">Moldova</option>
		<option value="MC">Monaco</option>
		<option value="MN">Mongolia</option>
		<option value="ME">Montenegro</option>
		<option value="MS">Montserrat</option>
		<option value="MA">Morocco</option>
		<option value="MZ">Mozambique</option>
		<option value="MM">Myanmar</option>
		<option value="NA">Namibia</option>
		<option value="NR">Nauru</option>
		<option value="NP">Nepal</option>
		<option value="NL">Netherlands</option>
		<option value="AN">Netherlands Antilles</option>
		<option value="NC">New Caledonia</option>
		<option value="NZ">New Zealand</option>
		<option value="NI">Nicaragua</option>
		<option value="NE">Niger</option>
		<option value="NG">Nigeria</option>
		<option value="NU">Niue</option>
		<option value="NF">Norfolk Island</option>
		<option value="KP">North Korea</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="NO">Norway</option>
		<option value="OM">Oman</option>
		<option value="PK">Pakistan</option>
		<option value="PW">Palau</option>
		<option value="PA">Panama</option>
		<option value="PG">Papua New Guinea</option>
		<option value="PY">Paraguay</option>
		<option value="PE">Peru</option>
		<option value="PH">Philippines</option>
		<option value="PN">Pitcairn</option>
		<option value="PL">Poland</option>
		<option value="PT">Portugal</option>
		<option value="PR">Puerto Rico</option>
		<option value="QA">Qatar</option>
		<option value="RE">Reunion</option>
		<option value="RO">Romania</option>
		<option value="RU">Russia</option>
		<option value="RW">Rwanda</option>
		<option value="WS">Samoa</option>
		<option value="SM">San Marino</option>
		<option value="ST">Sao Tome And Principe</option>
		<option value="SA">Saudi Arabia</option>
		<option value="SN">Senegal</option>
		<option value="RS">Serbia</option>
		<option value="CS">Serbia &amp; Montenegro</option>
		<option value="SC">Seychelles</option>
		<option value="SL">Sierra Leone</option>
		<option value="SG">Singapore</option>
		<option value="SK">Slovakia</option>
		<option value="SI">Slovenia</option>
		<option value="SB">Solomon Islands</option>
		<option value="SO">Somalia</option>
		<option value="ZA">South Africa</option>
		<option value="GS">South Georgia And Sandwich Isl.</option>
		<option value="KR">South Korea</option>
		<option value="ES">Spain</option>
		<option value="LK">Sri Lanka</option>
		<option value="BL">St. Barthélemy</option>
		<option value="SH">St. Helena</option>
		<option value="KN">St. Kitts And Nevis</option>
		<option value="LC">St. Lucia</option>
		<option value="MF">St. Martin</option>
		<option value="PM">St. Pierre And Miquelon</option>
		<option value="VC">St. Vincent And The Grenadines</option>
		<option value="SD">Sudan</option>
		<option value="SR">Suriname</option>
		<option value="SZ">Swaziland</option>
		<option value="SE">Sweden</option>
		<option value="CH">Switzerland</option>
		<option value="SY">Syria</option>
		<option value="TW">Taiwan</option>
		<option value="TJ">Tajikistan</option>
		<option value="TZ">Tanzania</option>
		<option value="TH">Thailand</option>
		<option value="TG">Togo</option>
		<option value="TK">Tokelau</option>
		<option value="TO">Tonga</option>
		<option value="TT">Trinidad And Tobago</option>
		<option value="TN">Tunisia</option>
		<option value="TR">Turkey</option>
		<option value="TM">Turkmenistan</option>
		<option value="TC">Turks And Caicos Islands</option>
		<option value="TV">Tuvalu</option>
		<option value="UG">Uganda</option>
		<option value="UA">Ukraine</option>
		<option value="AE">United Arab Emirates</option>
		<option value="GB">United Kingdom</option>
		<option value="US">United States</option>
		<option value="UY">Uruguay</option>
		<option value="UZ">Uzbekistan</option>
		<option value="VU">Vanuatu</option>
		<option value="VA">Vatican City State (Holy See)</option>
		<option value="VE">Venezuela</option>
		<option value="VN">Vietnam</option>
		<option value="VG">Virgin Islands (British)</option>
		<option value="VI">Virgin Islands (U.S.)</option>
		<option value="WF">Wallis And Futuna Islands</option>
		<option value="EH">Western Sahara</option>
		<option value="YE">Yemen</option>
		<option value="ZM">Zambia</option>
		<option value="ZW">Zimbabwe</option>
</select>
									</td>
								</tr>

							</tbody></table>
						</div>
						<div class="form-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					<div class="top-shadow hidden" style="top: -1px; left: 0px; width: 0px;"></div><div class="bottom-shadow hidden" style="top: -9px; left: 0px; width: 0px;"></div></form>
				</div>
			</div>
		</div>
		<div class="section-main ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="team-settings">
			<div class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all" id="team-settings-tabs">
				<div class="nav3">
					<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
						<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
							<a href="#team">Team</a>
						</li>
						<li class="ui-state-default ui-corner-top">
							<a href="#team-categories">Pricing Levels</a>
						</li>
					</ul>
				</div>
				<div class="tab-content multi ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="team-categories">
					<div class="data-content">
						<div class="content-note">
							<div class="icons-info"></div>
							<p class="main-txt">Pricing levels are managed at a chain level.</p>
							<p class="second-txt">Please get in touch with Wahanda's support team to edit this list.</p>
						</div>

						<div>
							<div class="data-title">
								Pricing level title
							</div>
						</div>

						<ul class="data-list">
	<li class="data-list-row on" data-id="3170">
		<div class="data-list-item">
			Top Staff
		</div>
	</li>
</ul>
						<div class="empty-note">This list is looking a little empty.</div>
					</div>
					<div class="data-actions">
						<div class="action add-action">
							<button class="button button-primary" id="create-category" type="button"><div class="button-inner"><div class="button-icon icons-plus"></div>Add new</div></button>
						</div>
					</div>

					<div id="no-categories">
						<div class="icons-employees-big"></div>
						<p>Create pricing levels here if you have different prices for specific staff groups.</p>
						<button class="button button-primary" type="button"><div class="button-inner"><div class="button-icon icons-plus"></div>Add new</div></button>
					</div>
				</div>
				<div class="tab-content multi ui-tabs-panel ui-widget-content ui-corner-bottom" id="team">
					<div class="static-allocation hidden">
						<form action="">
							<div class="form-content">
								<div class="content-note">
									<div class="icons-info"></div>
									<p class="main-txt">Your account is currently set up for a fixed booking allowance.</p>
									<p class="second-txt">This means you don't need to manage your team's individual appointments, but simply set the maximum number of appointments you can take at any given time. This setting will make sure we don't send you more customers than you can handle.</p>
								</div>
								<table cellspacing="0" cellpadding="0" class="default-form">
									<tbody><tr class="form-row">
										<td class="label-part">
											<label for="employee-count">Number of specialists</label>
										</td>
										<td class="input-part">
											<div class="txt-input txt-input-mini"><input type="text" class="required digits" min="1" name="maximumAppointmentsPerTimeSlot" id="employee-count"></div>
										</td>
									</tr>
								</tbody></table>
							</div>
							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</form>
					</div>

					<div class="dynamic-allocation">
						<div class="data-content ui-sortable">
	<div class="employee" data-id="26156">
		<div class="pic item-icon b-handle">
		</div>
		<div class="info">
			<div class="name">
				Sunspa Resort
			</div>
			<div class="role">
					Top Staff
			</div>
			<div class="statuses">
					<div class="status status-neutral">Owner</div>
					<div class="status status-on">Can log in</div>
		            <div class="provides-services">
		                <div class="icon icons-status-bullet"></div>
		                <div class="text">Provides services</div>
		            </div>
			</div>
		</div>
	</div>
</div>
						<div class="data-actions">
							<button class="button button-primary add-employee" type="button"><div class="button-inner"><div class="button-icon icons-plus"></div>Add team member</div></button>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="section-main ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="notifications-settings">
			<div class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all" id="notifications-settings-tabs">
				<div class="nav3">
					<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
						<li id="notifications-client-notifications-link" class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
							<a href="#client-notifications">Client notifications</a>
						</li>
						<li id="notifications-fulfillment-link" class="ui-state-default ui-corner-top">
							<a href="#fulfillment">Contacting You</a>
						</li>
					</ul>
				</div>
				<div class="tab-content  ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="fulfillment">
					<form action="" novalidate="novalidate">
					<div class="data-content">
						<div class="content-note">
							<div class="icon icons-info"></div>
							<p class="second-txt">When we receive a lead or a sale from a customer, we send an email to you. Here you can specify what address we should send those emails to.</p>
						</div>

                        <div class="email-settings">
    						<div class="part-title">Email settings</div>
    						<table cellspacing="0" cellpadding="0" class="default-form">
    							<tbody><tr class="form-row for-appointments">
    								<td class="label-part">
    									<label for="notifications-settings-address">Your email address</label>
    								</td>
    								<td class="input-part">
    									<div class="txt-input"><input type="text" id="notifications-settings-address" name="notifications-settings-address" class="required email"></div>
    								</td>
    							</tr>
    							<tr class="form-row">
    								<td class="label-part">
    									<label for="notifications-settings-method">Email format</label>
    								</td>
    								<td class="input-part">
    									<select id="notifications-settings-method" name="notifications-settings-method" class="full">
    										<option value="EMH">HTML</option>
    										<option value="EMT">Plain text</option>
    									</select>
    								</td>
    							</tr>
    						</tbody></table>
						</div>
						<div class="separating-line"></div>
						<div class="text-message-settings">
                            <div class="part-title">Text message settings</div>
                            <div class="send-sms">
                                <input type="checkbox" value="true" name="client-notifications-sendSMS" id="client-notifications-sendSMS">
                                <label for="client-notifications-sendSMS">Send text (SMS) new order confirmations for Wahanda bookings</label>
                            </div>
                            <table cellspacing="0" cellpadding="0" class="default-form hidden">
                                <tbody><tr class="form-row for-appointments">
                                    <td class="label-part">
                                        <label for="appointmentBookingNotificationSms">Phone number to send appointment confirmations to</label>
                                    </td>
                                    <td class="input-part">
                                        <div class="txt-input"><input type="text" id="appointmentBookingNotificationSms" name="appointmentBookingNotificationSms" class="mobile-phone-by-country required disabled" disabled=""></div>
                                    </td>
                                </tr>
                                <tr class="form-row">
                                    <td class="label-part">
                                        <label for="datedBookingNotificationSms">Phone number to send overnight/dated confirmations to</label>
                                    </td>
                                    <td class="input-part">
                                        <div class="txt-input"><input type="text" id="datedBookingNotificationSms" name="datedBookingNotificationSms" class="mobile-phone-by-country required disabled" disabled=""></div>
                                    </td>
                                </tr>
                            </tbody></table>
                       </div>
					</div>
					<div class="data-actions">
						<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
					</div>
					</form>
				</div>
				<div class="tab-content  ui-tabs-panel ui-widget-content ui-corner-bottom" id="client-notifications">
					<form novalidate="novalidate">
						<div class="data-content">
							<div class="content-note">
								<div class="icon icons-info"></div>
								<p class="second-txt">
									We will send out automated notifications to your customers reminding them about their appointments. For more information, visit <a href="http://www.wahanda.com/info/connect-faq/#do-you-send-notifications-and-reminders-to-our-clients" target="_blank">Connect FAQ</a>.
								</p>
							</div>
							<div class="text-message-settings">
								<div class="part-title">Text message settings</div>
								<div class="content-note b-premium">
									<div class="icon icons-info"></div>
									<p class="second-txt">
										Text reminders to clients are available for premium venues only.<br>
										<a class="a-upgrade-dialog" href="#">Read more...</a>
									</p>
								</div>
								<div class="send-text-reminder b-for-premium hidden">
									<input type="checkbox" value="true" name="client-notifications-sendSmsReminders" id="client-notifications-sendSmsReminders">
									<label for="client-notifications-sendSmsReminders">Send text message reminder</label>

									<div class="txt-input txt-input-mini"><input type="text" min="1" class="digits required" name="client-notifications-smsReminderHours" id="client-notifications-smsReminderHours"></div>
									<label for="client-notifications-smsReminderHours">hour(s) before appointment</label>
								</div>
								<div class="send-messages-from b-for-premium hidden">
									<label for="client-notifications-smsFromNumber">Send messages from this number:</label>
									<div class="txt-input"><input type="text" class="mobile-phone-by-country" name="client-notifications-smsFromNumber" id="client-notifications-smsFromNumber"></div>
								</div>
							</div>
							<div class="separating-line"></div>
							<div class="email-settings">
								<div class="part-title">Email settings</div>
								<div class="send-confirmations">
									<input type="checkbox" value="true" name="client-notifications-sendEmailNotifications" id="client-notifications-sendEmailNotifications">
									<label for="client-notifications-sendEmailNotifications">Send email confirmations to clients about confirmed, rescheduled and cancelled appointments</label>
								</div>
								<div class="send-reminder">
									<input type="checkbox" value="true" name="client-notifications-sendEmailReminders" id="client-notifications-sendEmailReminders">
									<label for="client-notifications-sendEmailReminders">Send email reminder</label>

									<div class="txt-input txt-input-mini"><input type="text" min="1" class="digits required" name="client-notifications-emailReminderHours" id="client-notifications-emailReminderHours"></div>
									<label for="client-notifications-emailReminderHours">hour(s) before appointment</label>
								</div>
								<div class="input-row">
									<input type="checkbox" value="true" name="client-notifications-directReviewRequestEnabled" id="client-notifications-directReviewRequestEnabled">
									<label for="client-notifications-directReviewRequestEnabled">Send emails encouraging Wahanda reviews for direct customers</label>
									<p class="small-note">We send emails asking customers to review your services on Wahanda. You can uncheck this box to opt out from sending these emails to your customers entered directly in Connect and the ones who booked through your website.</p>
								</div>
							</div>
						</div>
						<div class="data-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="section-main ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="online-booking">
			<div class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all" id="online-booking-tabs">
				<div class="nav3">
					<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
						<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
							<a href="#online-booking-settings">Settings</a>
						</li>
						<li class="ui-state-default ui-corner-top">
							<a href="#online-booking-widget">Booking Widget</a>
						</li>
					</ul>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom" id="online-booking-settings">
					<form novalidate="novalidate">
						<div class="data-content">
							<div class="content-note">
								<div class="icon icons-info"></div>
								<p class="main-txt">Here you can set how your clients can book in through Wahanda website and Online booking widget.</p>
							</div>
							<table cellspacing="0" cellpadding="0" class="default-form">
								<tbody><tr data-tooltip="&lt;strong&gt;Time scale&lt;/strong&gt; - Reflects the shortest service duration performed by your venue. Sets how time slots are split in Calendar." class="form-row">
									<td class="label-part">
										<label for="booking-settings-appointmentSlotType">Calendar time scale</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-appointmentSlotType" name="booking-settings-appointmentSlotType" class="required">
		<option value="15M">15 minutes</option>
		<option value="30M">30 minutes</option>
		<option selected="selected" value="1HR">Hourly</option>
</select>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Time interval&lt;/strong&gt; - Sets shortest interval between slots available for Wahanda and Booking Widget appointments." class="form-row">
									<td class="label-part">
										<label for="booking-settings-onlineBookingInterval">Online booking time interval</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-onlineBookingInterval" name="booking-settings-onlineBookingInterval" class="required">
		<option value="0">Same as Calendar time scale</option>
		<option value="15">15 min</option>
		<option value="30">30 min</option>
		<option value="45">45 min</option>
		<option value="60">Full hours</option>
		<option value="75">1 h 15 min</option>
		<option value="90">1 h 30 min</option>
		<option value="105">1 h 45 min</option>
		<option value="120">2 hours</option>
</select>
									</td>
								</tr>
								<tr class="form-separator-row">
									<td colspan="2"><span></span></td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Lead time&lt;/strong&gt; - Set how soon the first time slot is available for online bookings. Bigger values prevent last minute bookings." class="form-row">
									<td class="label-part">
										<label for="booking-settings-onlineBookingMinHours">Booking lead time for appointments</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-onlineBookingMinHours" name="booking-settings-onlineBookingMinHours" class="required"><option value="0">No closeout</option><option value="1">1 hour</option><option value="2">2 hours</option><option value="3">3 hours</option><option value="4">4 hours</option><option value="5">5 hours</option><option value="6">6 hours</option><option value="7">7 hours</option><option value="8">8 hours</option><option value="24">1 day</option><option value="48">2 days</option><option value="72">3 days</option><option value="120">5 days</option><option value="168">1 week</option><option value="336">2 weeks</option><option value="504">3 weeks</option><option value="672">4 weeks</option></select>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Online booking limit&lt;/strong&gt; - Set how far in future your clients can book online." class="form-row">
									<td class="label-part">
										<label for="policies-onlineBookingMaxDays">Online booking limit</label>
									</td>
									<td class="input-part">
										<div class="txt-input txt-input-mini"><input type="text" max="365" min="1" id="policies-onlineBookingMaxDays" name="onlineBookingMaxDays" class="required digits"></div>
										<span class="help-txt">days in advance</span>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Booking lead time for Spa Days&lt;/strong&gt; - Sets how soon the customer can book a Spa day for. No lead time will allow booking right before the check in time." class="form-row b-for-dated">
									<td class="label-part">
										<label for="booking-settings-onlineBookingMinHours">Booking lead time for Spa Days</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-spaDayDatedServiceCloseoutHours" name="booking-settings-spaDayDatedServiceCloseoutHours" class="required"><option value="24">1 day</option><option value="48">2 days</option><option value="72">3 days</option><option value="120">5 days</option><option value="168">1 week</option><option value="336">2 weeks</option><option value="504">3 weeks</option><option value="672">4 weeks</option></select>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Booking lead time for Overnight stays&lt;/strong&gt; - Sets how soon the customer can book an Overnight stay for. No lead time will allow booking right before the check in time." class="form-row b-for-dated">
									<td class="label-part">
										<label for="booking-settings-onlineBookingMinHours">Booking lead time for Overnight stays</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-overnightStayDatedServiceCloseoutHours" name="booking-settings-overnightStayDatedServiceCloseoutHours" class="required"><option value="24">1 day</option><option value="48">2 days</option><option value="72">3 days</option><option value="120">5 days</option><option value="168">1 week</option><option value="336">2 weeks</option><option value="504">3 weeks</option><option value="672">4 weeks</option></select>
									</td>
								</tr>
								<tr class="form-separator-row">
									<td colspan="2"><span></span></td>
								</tr>
								<tr class="form-header-row">
									<td colspan="2">Off-peak discounting settings</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Afternoon starts at&lt;/strong&gt; - The time before which morning off-peak discounts will be applied, and after which afternoon off-peak discounts will be applied." class="form-row">
									<td class="label-part">
										<label for="booking-settings-appointmentMorningEndTime">Afternoon starts at</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-appointmentMorningEndTime" name="booking-settings-appointmentMorningEndTime" class="required">
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option selected="selected" value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
</select>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Evening starts at&lt;/strong&gt; - The time before which afternoon off-peak discounts will be applied, and after which evening off-peak discounts will be applied." class="form-row">
									<td class="label-part">
										<label for="booking-settings-appointmentAfternoonEndTime">Evening starts at</label>
									</td>
									<td class="input-part">
										<select id="booking-settings-appointmentAfternoonEndTime" name="booking-settings-appointmentAfternoonEndTime" class="required">
		<option value="09:00">09:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option selected="selected" value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
</select>
									</td>
								</tr>
							</tbody></table>
						</div>
						<div class="data-actions">
							<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
						</div>
					</form>
				</div>
				<div class="tab-content ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide" id="online-booking-widget">
					<form>
						<div class="data-content">
							<div class="content-note">
								<div class="icon icons-info"></div>
								<p class="main-txt">This is an Enhanced Wahanda feature</p>
								<p class="second-txt">You will be charged a £0.5 plus VAT administration fee for every appointment that is booked through the online booking widget. This fee covers a booking button, booking widget on your website, email notifications and SMS reminders to your clients. You will be billed for confirmed appointments only.</p>
							</div>
							<div data-tooltip="&lt;strong&gt;Enable online booking widget&lt;/strong&gt; - Start taking appointments through your website with the online booking widget - simply add to your site and customers can book in with you 24/7." class="enabler b-enabled">
								<input type="checkbox" name="online-booking-useOnlineBookingWidget" id="online-booking-useOnlineBookingWidget">
								<label for="online-booking-useOnlineBookingWidget">Enable online booking widget</label>
							</div>
							<table cellspacing="0" cellpadding="0" class="default-form b-form-contents">
								<tbody><tr class="form-separator-row">
									<td colspan="2"><span></span></td>
								</tr>
								<tr class="form-header-row">
									<td colspan="2">You can add an online booking widget to your existing website.</td>
								</tr>
								<tr class="form-row">
									<td class="label-part">
										<label for="cv-online-booking-buttonText">Text on the button</label>
									</td>
									<td class="input-part">
										<div class="txt-input"><input type="text" maxlength="50" id="cv-online-booking-buttonText" value="Book now!"></div>
									</td>
								</tr>
								<tr data-tooltip="&lt;strong&gt;Preview&lt;/strong&gt; - Click here to preview the online booking widget. If you can't see some of your services in the widget, make sure you have at least one team member assigned to the service." class="form-row ui-preview-row b-preview">
									<td class="label-part">
										<label for="cv-online-booking-preview">Preview</label>
									</td>
									<td class="input-part">
										<div class="button-preview">

            

            <a target="_blank" onclick="wahanda.openOnlineBookingWidget(&quot;http://widget.wahanda.com/place/285925/menu/&quot;); return false;" id="wahanda-online-booking-widget" href="http://www.wahanda.com/">
                <span>Book now!</span>
            </a></div>
									</td>
								</tr>
								<tr class="form-row">
									<td class="input-part" colspan="2">
										Paste this code in your website source to add a widget button:
										<div class="code-for-widget">
											<div class="v-widget-txt">&lt;script src="https://widget.wahanda.com/common/venue-menu/javascript/widget-button.js"&gt;&lt;/script&gt;

            &lt;script&gt;
              (function() {
                var link = document.createElement("link");
                link.type = "text/css";
                link.href = "https://widget.wahanda.com/common/venue-menu/css/widget-button.css";
                link.rel = "stylesheet";
                link.media = "screen";
                document.getElementsByTagName("head")[0].appendChild(link);
              }());
            &lt;/script&gt;

            &lt;a href='http://www.wahanda.com/' id="wahanda-online-booking-widget"
                    onclick='wahanda.openOnlineBookingWidget("http://widget.wahanda.com/place/285925/menu/"); return false;' target="_blank"&gt;
                &lt;span&gt;Book now!&lt;/span&gt;
            &lt;/a&gt;</div>
										</div>
									</td>
								</tr>
							</tbody></table>
						</div>
					<div class="top-shadow hidden" style="top: -1px; left: 0px; width: 0px;"></div><div class="bottom-shadow hidden" style="top: 25px; left: 0px; width: 0px;"></div></form>
					<div id="feature-for-premium">
						<p class="title">The online booking widget is only available for<br>Enhanced Wahanda venues.</p>
						<p>To add the online booking widget to your website you need a Enhanced Wahanda listing. Online booking is a great way to save time and allow your clients to book in with you 24 hours a day.<br>To change your listing type, click the button below.</p>
						<button class="button button-primary button-reverse a-upgrade-to-enhanced" type="button"><div class="button-inner"><div class="button-icon icons-arrow-right2"></div>More information</div></button>
					</div>
					<div id="static-allocation-message">
						<p>To start using the online booking widget, start using Wahanda Connect as your primary appointment book. Click below to make your Calendar live.</p>
						<button class="button button-primary button-reverse a-convert-to-dynamic" type="button"><div class="button-inner"><div class="button-icon icons-arrow-right2"></div>Continue</div></button>
					</div>
					<div id="static-allocation-restricted-message">
						<p>To start using the online booking widget, start using Wahanda Connect as your primary appointment book.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>