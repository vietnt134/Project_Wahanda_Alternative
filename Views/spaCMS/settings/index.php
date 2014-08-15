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
						<div id="venue-details" class="tab-pane active">
							<form action="" novalidate="novalidate">
								<div class="form-content">
									<div class="form-venue-details">
										<div class="venue-main-info">
											<div class="picture-logo">
												<img class="logo-image" src="https://connect.wahanda.com/api/v2.0.0/media/venue/285925/gallery/image/257441?width=156&amp;height=121">
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

														</select>
													</td>
												</tr>
											</tbody></table>
										</div>
										<table cellspacing="0" cellpadding="0" class="default-form">
											<tbody><tr class="form-header-row">
												<td colspan="2">Where is your venue located?</td>
											</tr>
											<tr data-tooltip="&lt;strong&gt;Venue location&lt;/strong&gt; - If your venue operates within a hotel, health centre or other venue, specify it here. It will then be shown as e.g. &amp;#34;Paola&amp;#39;s Therapy at Fitzrovia Health Centre&amp;#34;" class="form-row text-location-link" aria-describedby="ui-tooltip-2">
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
											<tr class="form-row state-row hidden">
												<td class="label-part">
													<label for="venue-details-addressStateCode" class="optional">State</label>
												</td>
												<td class="input-part">
													<select id="venue-details-addressStateCode" name="venue-details-addressStateCode" class=""><option value="">Not set</option>

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
													<input type="hidden" id="venue-details-latitude" name="venue-details-latitude" class="" value="54.54516881">
													<input type="hidden" id="venue-details-gmapLatitude" name="venue-details-gmapLatitude" class="" value="54.54457136">
													<input type="hidden" id="venue-details-longitude" name="venue-details-longitude" class="" value="-1.27919913">
													<input type="hidden" id="venue-details-gmapLongitude" name="venue-details-gmapLongitude" class="" value="-1.27979995">
													<input type="hidden" id="venue-details-gmapScale" name="venue-details-gmapScale" class="" value="15">

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
											<tr data-tooltip="&lt;strong&gt;Website&lt;/strong&gt; - Enter the link to your venue's website." class="form-row">
												<td class="label-part">
													<label for="venue-details-facebook" class="optional">Facebook</label>
												</td>
												<td class="input-part">
													<div class="txt-input"><input type="text" id="venue-details-facebook" name="venue-details-facebook" class=""></div>
												</td>
											</tr>
											<tr data-tooltip="&lt;strong&gt;Website&lt;/strong&gt; - Enter the link to your venue's website." class="form-row">
												<td class="label-part">
													<label for="venue-details-googleplus" class="optional">Google+</label>
												</td>
												<td class="input-part">
													<div class="txt-input"><input type="text" id="venue-details-googleplus" name="venue-details-googleplus" class=""></div>
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
									<div class="top-shadow" style="width: 606px;"></div>
									<div class="bottom-shadow" style="width: 606px;"></div>
								</div>

								<div class="form-actions">
									<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
									<a target="_blank" class="button-link preview-link" href="http://www.wahanda.com/place/sunspa-resort/overview/">Preview on Wahanda</a>
								</div>
							</form>
						</div><!-- END VENUA DETAILS -->






						<div id="opening-hours" class="tab-pane ">
							<div class="form-content">
								<ul class="form-list">
									<li data-tooltip="&lt;strong&gt;Business hours&lt;/strong&gt; - Define what days and times your venue is open. This will show up in your Wahanda.com listing and will be used for appointment bookings." class="special" aria-describedby="ui-tooltip-172">
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
									<li data-tooltip="&lt;strong&gt;Time zone&lt;/strong&gt; - Set the timezone that your venue is operating in." aria-describedby="ui-tooltip-173">
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
						</div><!-- END OPEN HOUR -->







						<div id="policies" class="tab-pane">
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
						</div><!-- END POLICIES -->







						<div id="venue-vouchers" class="tab-pane">
							<div class="data-content" style="top: 32px;">
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
							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</div><!-- END VENUE VOUCHERS -->

					</div>
				</div>
			</div> <!-- END VENUE SETTINGS -->






			<div class="tab-pane" id="finance">
				<div id="finance-tabs" class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all">
					<div class="nav3">
						<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class="ui-state-default ui-corner-top active">
								<a href="#billing-details" role="tab" data-toggle="tab">Thông tin doanh nghiệp</a>
							</li>
							<li class="ui-state-default ui-corner-top">
								<a href="#bank-details" role="tab" data-toggle="tab">Thông tin ngân hàng</a>
							</li>
						</ul>
					</div>

					<div class="tab-content tab-content-fix">
						<div id="billing-details" class="tab-pane active">
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
											<label for="supplier-settings-addressCountryCode">Country</label>
										</td>
										<td class="input-part">
											<select id="supplier-settings-addressCountryCode" name="supplier-settings-addressCountryCode" class="required"><option value="">Not set</option>
												
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
											<label for="supplier-settings-position-cn">Chức vụ</label>
										</td>
										<td class="input-part">
											<div class="txt-input">
												<input type="text" id="supplier-settings-position-cn" name="supplier-settings-position-cn" phone-by-country-field="#supplier-settings-addressCountryCode" class="required">
											</div>
										</td>
									</tr>
								</tbody></table>

							</div>

							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</div><!-- END BILLING DETAILS -->




						<div id="bank-details" class="tab-pane">
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
									<div class="b-payment-term b-payment-por">
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
								</tbody></table>
							</div>

							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</div><!-- END BANK DETAILS -->
					</div>
				</div>
			</div> <!-- END FINANCE SETTINGS -->







			<div class="tab-pane" id="notifications-settings">
				<div id="notifications-settings-tabs" class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all">
					<div class="nav3">
						<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class="ui-state-default ui-corner-top active">
								<a href="#client-notifications" role="tab" data-toggle="tab">Thông báo cho khách hàng</a>
							</li>
							<li class="ui-state-default ui-corner-top">
								<a href="#fulfillment" role="tab" data-toggle="tab">Thông báo cho bạn</a>
							</li>
						</ul>
					</div>

					<div class="tab-content tab-content-fix">
						<div id="client-notifications" class="tab-pane active">
							<div class="form-content">
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

							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</div><!-- END Client Notifications -->


						<div id="fulfillment" class="tab-pane">
							<div class="form-content">
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

							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</div> <!-- END Contact You -->
					</div>
				</div>
			</div><!-- END NOTIFICATIONS SETTINGS -->






			<div class="tab-pane" id="online-booking">
				<div id="online-booking-tabs" class="tabs-inner ui-tabs ui-widget ui-widget-content ui-corner-all">
					<div class="nav3">
						<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class="ui-state-default ui-corner-top active">
								<a href="#online-booking-settings" role="tab" data-toggle="tab">Cài đặt</a>
							</li>
						</ul>
					</div>

					<div class="tab-content tab-content-fix">
						<div id="online-booking-settings" class="tab-pane active">
							<div class="form-content">
								<div class="content-note">
									<div class="icon icons-info"></div>
									<p class="main-txt">Here you can set how your clients can book in through Wahanda website and Online booking widget.</p>
								</div>
								<table cellspacing="0" cellpadding="0" class="default-form">
									<tbody>
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

									</tbody>
								</table>
							</div>

							<div class="form-actions">
								<button class="button action action-default button-primary save-action" type="submit"><div class="button-inner"><div class="button-icon icons-tick"></div><span class="msg msg-action-default">Save</span><span class="msg msg-action-doing">Saving...</span></div></button>
							</div>
						</div>
					</div>
				</div>
			</div><!-- END BOOKING SETTINGS -->



		</div>
	</div>
</div>

		