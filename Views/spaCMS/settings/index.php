<div id="settings-holder" class="content-holder">
	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="settings-tabs">
		<div class="section-aside">
			<ul id="nav2" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
				<li id="venue-settings-tab" class="ui-state-default ui-corner-top active" >
					<a href="#venue-settings" style="position: relative;" role="tab" data-toggle="tab">
						<div class="nav-icon icons-nav-venue"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Venue</div>
					</a>
				</li>
				<li id="finance-tab" class="ui-state-default ui-corner-top">
					<a href="#finance" style="position: relative;" role="tab" data-toggle="tab">
						<div class="nav-icon icons-nav-supplier"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Finance</div>
					</a>
				</li>
				<li id="notifications-settings-tab" class="ui-state-default ui-corner-top">
					<a href="#notifications-settings" style="position: relative;" role="tab" data-toggle="tab">
						<div class="nav-icon icons-nav-notifications"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Notifications</div>
					</a>
				</li>
				<li id="online-booking-tab" class="ui-state-default ui-corner-top">
					<a href="#online-booking" style="position: relative;" role="tab" data-toggle="tab">
						<div class="nav-icon icons-nav-booking"></div>
						<div class="title" style="position: absolute; height: 17px; top: 50%; margin-top: -8.5px;">Online booking</div>
					</a>
				</li>
			</ul>
		</div>


		<div class="tab-content section-main">

			<div class="tab-pane active" id="venue-settings">
				<div id="venue-settings-tabs" class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all">
					<div class="nav3">
						<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class="ui-state-default ui-corner-top active">
								<a href="#venue-details" role="tab" data-toggle="tab">Venue details</a>
							</li>
							<li class="ui-state-default ui-corner-top">
								<a href="#opening-hours" role="tab" data-toggle="tab">Opening hours</a>
							</li>
							<li class="ui-state-default ui-corner-top">
								<a href="#policies" role="tab" data-toggle="tab">Policies</a>
							</li>
							<li id="venue-vouchers-tab" class="ui-state-default ui-corner-top">
								<a href="#venue-vouchers" role="tab" data-toggle="tab">Gift Vouchers</a>
							</li>
						</ul>
					</div>

					<div class="tab-content tab-content-fix">
						<div id="venue-details" class="tab-pane active tab-content ui-tabs-panel ui-widget-content ui-corner-bottom">
							<div class="form-content">
							<div class="form-venue-details">
								<div class="venue-main-info">
									<div class="picture-logo">
										<img class="logo-image" src="https://connect.wahanda.com/api/v2.0.0/media/venue/285925/gallery/image/257441?width=156&amp;height=121">
										<div class="edit"><a class="set-logo" href="javascript:;">Set logo</a></div>
									</div>
									<table cellspacing="0" cellpadding="0" class="default-form">
										<tbody><tr title="Venue name - Enter your venue name here - make sure it's all spelt correctly." class="tooltips form-row">
											<td colspan="2">
												<div class="txt-input txt-input-big"><input type="text" id="" name="venue-details-name" class="required"></div>
												<div class="part-of hidden">part of <span class="chain-name"></span></div>
											</td>
										</tr>
										<tr data-tooltip="&lt;strong&gt;Primary venue type&lt;/strong&gt; - Set the venue type here. If you can't find the exact type, choose the one that's closest to what you do." class="form-row">
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
									<tr data-tooltip="&lt;strong&gt;Venue address&lt;/strong&gt; - You can include short instructions in the address such as &amp;#34;entrance on New Bond Street&amp;#34;" class="form-row">
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
									<tr data-tooltip="&lt;strong&gt;Location on the map&lt;/strong&gt; - Click on the map to enlarge it and drag the pointer to the exact location of your venue." class="form-row">
										<td class="label-part">
											<label for="">Location on the map</label>
										</td>
										<td class="input-part">
											<input type="hidden" id="venue-details-latitude" name="venue-details-latitude" value="54.54516881" class="">
											<input type="hidden" id="venue-details-gmapLatitude" name="venue-details-gmapLatitude" value="54.54457136" class="">
											<input type="hidden" id="venue-details-longitude" name="venue-details-longitude" value="-1.27919913" class="">
											<input type="hidden" id="venue-details-gmapLongitude" name="venue-details-gmapLongitude" value="-1.27979995" class="">
											<input type="hidden" id="venue-details-gmapScale" name="venue-details-gmapScale" value="15" class="">

											<div class="location-map-wrapper"><img alt="" src="https://maps.googleapis.com/maps/api/staticmap?sensor=false&amp;zoom=15&amp;size=397x98&amp;maptype=roadmap&amp;markers=icon%3Ahttps%3A%2F%2Fconnect.wahanda.com%2Fassets%2Fmap-marker.png%7C54.54516881%2C-1.27919913">
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
									<tr data-tooltip="&lt;strong&gt;Phone number&lt;/strong&gt; - Enter your reception phone number. This should be the number that your clients can call for any enquiries." class="form-row">
										<td class="label-part">
											<label for="venue-details-phone">Phone number</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-phone" name="venue-details-phone" class="required" phone-by-country-field="#venue-details-addressCountryCode"></div>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Email&lt;/strong&gt; - Enter the email address that customers can use to enquire about your services." class="form-row">
										<td class="label-part">
											<label for="venue-details-emailAddress" class="optional">Email</label>
										</td>
										<td class="input-part">
											<div class="txt-input"><input type="text" id="venue-details-emailAddress" name="venue-details-emailAddress" class="email"></div>
										</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Website&lt;/strong&gt; - Enter the link to your venue's website." class="form-row">
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
									<tr data-tooltip="&lt;strong&gt;Venue description&lt;/strong&gt; - Enter a few sentences about your venue - those with good descriptions always receive more bookings." class="form-header-row">
										<td colspan="2">Description</td>
									</tr>
									<tr data-tooltip="&lt;strong&gt;Venue description&lt;/strong&gt; - Enter a few sentences about your venue - those with good descriptions always receive more bookings." class="form-row">
										<td class="description-part" colspan="2">
											<textarea rows="10" cols="40" name="venue-details-longDescription" class="" id="editor_61" style="visibility: hidden; display: none;"></textarea><div lang="en" aria-labelledby="cke_editor_61_arialbl" role="application" dir="ltr" class="cke_1 cke cke_reset cke_chrome cke_editor_editor_61 cke_ltr cke_browser_gecko" id="cke_editor_61"><span class="cke_voice_label" id="cke_editor_61_arialbl">Rich Text Editor, editor_61</span><div role="presentation" class="cke_inner cke_reset"><span style="height: auto; -moz-user-select: none;" role="presentation" class="cke_top cke_reset_all" id="cke_1_top"><span class="cke_voice_label" id="cke_8">Editor toolbars</span><span onmousedown="return false;" aria-labelledby="cke_8" role="group" class="cke_toolbox" id="cke_1_toolbox"><span role="toolbar" class="cke_toolbar" id="cke_9"><span class="cke_toolbar_start"></span><span role="presentation" class="cke_toolgroup"><a onclick="CKEDITOR.tools.callFunction(5,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(4,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_10_label" role="button" hidefocus="true" tabindex="-1" title="Bold" class="cke_button cke_button__bold  cke_button_off" id="cke_10"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -24px;background-size:auto;" class="cke_button_icon cke_button__bold_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__bold_label" id="cke_10_label">Bold</span></a><a onclick="CKEDITOR.tools.callFunction(9,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(7,event);" onkeydown="return CKEDITOR.tools.callFunction(6,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_11_label" role="button" hidefocus="true" tabindex="-1" title="Italic" class="cke_button cke_button__italic  cke_button_off" id="cke_11"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -48px;background-size:auto;" class="cke_button_icon cke_button__italic_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__italic_label" id="cke_11_label">Italic</span></a><a onclick="CKEDITOR.tools.callFunction(13,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(12,event);" onfocus="return CKEDITOR.tools.callFunction(11,event);" onkeydown="return CKEDITOR.tools.callFunction(10,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_12_label" role="button" hidefocus="true" tabindex="-1" title="Underline" class="cke_button cke_button__underline  cke_button_off" id="cke_12"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -144px;background-size:auto;" class="cke_button_icon cke_button__underline_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__underline_label" id="cke_12_label">Underline</span></a><a onclick="CKEDITOR.tools.callFunction(17,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(16,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_13_label" role="button" hidefocus="true" tabindex="-1" title="Insert/Remove Numbered List" class="cke_button cke_button__numberedlist  cke_button_off" id="cke_13"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -1368px;background-size:auto;" class="cke_button_icon cke_button__numberedlist_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__numberedlist_label" id="cke_13_label">Insert/Remove Numbered List</span></a><a onclick="CKEDITOR.tools.callFunction(21,this);return false;" onmousedown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(19,event);" onkeydown="return CKEDITOR.tools.callFunction(18,event);" onblur="this.style.cssText = this.style.cssText;" aria-haspopup="false" aria-labelledby="cke_14_label" role="button" hidefocus="true" tabindex="-1" title="Insert/Remove Bulleted List" class="cke_button cke_button__bulletedlist  cke_button_off" id="cke_14"><span style="background-image:url(https://connect.wahanda.com/assets/ckeditor/plugins/icons.png?t=DBAA);background-position:0 -1320px;background-size:auto;" class="cke_button_icon cke_button__bulletedlist_icon">&nbsp;</span><span aria-hidden="false" class="cke_button_label cke_button__bulletedlist_label" id="cke_14_label">Insert/Remove Bulleted List</span></a></span><span class="cke_toolbar_end"></span></span></span></span><div role="presentation" class="cke_contents cke_reset" id="cke_1_contents" style="height: 70px;"><span class="cke_voice_label" id="cke_18">Press ALT 0 for help</span><iframe frameborder="0" src="" style="width: 100%; height: 100%;" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, editor_61" aria-describedby="cke_18" tabindex="0" allowtransparency="true"></iframe></div><span role="presentation" class="cke_bottom cke_reset_all" id="cke_1_bottom" style="-moz-user-select: none;"><span onmousedown="CKEDITOR.tools.callFunction(0, event)" title="Resize" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" id="cke_1_resizer">◢</span></span></div></div>
										</td>
									</tr>
								</tbody></table>
							</div>
							<div class="form-venue-pictures ui-sortable">
								<div class="part-title">Venue photos</div>
								<ul class="menu-item-pictures">
	<li class="single-picture">
		<div class="single-picture-wrapper">
			<img data-id="257441" src="https://connect.wahanda.com/api/v2.0.0/media/venue/285925/gallery/image/257441?width=100&amp;height=70">
		</div>
		<div class="single-picture-title"><span>Primary image</span></div>
		<div class="icons-delete2"></div>
	</li>

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
						<div class="top-shadow hidden" style="top: 0px; left: 17px; width: 606px;"></div><div class="bottom-shadow" style="top: 103px; left: 17px; width: 606px;"></div><div class="top-shadow hidden" style="top: 0px; left: 623px; width: 138px;"></div><div class="bottom-shadow" style="top: 103px; left: 623px; width: 138px;"></div></div>
						</div>




















						<div id="opening-hours" class="tab-pane ">
							opening hours
						</div>
						<div id="policies" class="tab-pane">
							opening hours
						</div>
						<div id="venue-vouchers" class="tab-pane">
							opening hours
						</div>
					</div>
					
				</div>
			</div>






			<div class="tab-pane" id="finance">
				finance
			</div>



			<div class="tab-pane" id="notifications-settings">
				notifications
			</div>



			<div class="tab-pane" id="online-booking">
				booking
			</div>



		</div>
	</div>
</div>

		