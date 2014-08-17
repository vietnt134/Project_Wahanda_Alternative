<div id="calendar-holder" class="content-holder type-appointment">
	<div class="section-aside has-upgrade-note">
		<div class="calendar-wrapper">
			<div class="calendar-buttons">
				<div class="redeem-evoucher-box">
					<button class="button button-primary button-flexible redeem" type="button" data-toggle="modal" data-target="#redeemVoucher_modal">
						<div class="button-inner">
							<div class="button-icon icons-voucher"></div>
							Redeem an eVoucher
						</div>
					</button>
				</div>
			</div><!-- END redeem-evoucher-box -->


		</div>
	</div><!-- END Side bar -->



	<!-- Section Main -->
	<div class="section-main">
		<div class="calendar-pane">
			<div class="calendar-main-header">
				<div class="calendar-search top-search">
					<div class="txt-input">
						<input type="text" placeholder="Search: client, phone#, order#..." id="calendar-search" name="calendar-search" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
						<a class="clear-search" href="#" ><div class="icons-clear-search-mini"></div></a>
						<div class="search-loader" ></div>
					</div>
					<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all search-results" role="listbox" aria-activedescendant="ui-active-menuitem" style="top: 0px; left: 0px; display: none;"></ul>
				</div>
			</div>
		</div>


		<div>
			<div id='script-warning'>
				<code>php/get-events.php</code> must be running.
			</div>

			<div id='loading' class="search-loader"> loading...</div>

			<div id='calendar'></div>
		</div>

		<div class="sync-button" id="employee-ext-calendar-sync">
			<button title="Click to update availabilities from external calendar" class="button button-basic no-txt" type="button">
				<div class="button-inner">
					<div class="button-icon icons-sync"></div>
				</div>
			</button>
		</div>
	</div>
</div>



<!-- Modal redeemVoucher_modal-->
<div id="redeemVoucher_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ui-dialog-title-voucher-redemption" aria-hidden="true">
	<div class="modal-dialog" style="width: 500px;">
		<div class="modal-content">
			<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable">
				<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
					<span class="ui-dialog-title" id="ui-dialog-title-voucher-redemption">eVoucher</span>
					<a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button">
						<span class="ui-icon ui-icon-closethick">close</span>
					</a>
				</div>
				<div id="voucher-redemption" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
					<div class="voucher-search">
						<form novalidate="novalidate">
							<div class="icon icons-logo-vouchers"></div>

							<div class="reference-container txt-input txt-input-big">
								<input type="tel" class="required evoucher-code valid" name="voucher-reference">
								<div class="clear-search"><div class="icons-delete3"></div></div>
							</div>
							<button class="button action action-default button-primary find-action" type="submit"><div class="button-inner"><span class="msg msg-action-default">Find</span><span class="msg msg-action-doing">Searching...</span></div></button>
						</form>
					</div>
					<div class="voucher-redemption-wrapper">
						<div class="voucher-note voucher-start" style="position: relative;">
							<div class="voucher-note-inner vertically-centered" style="position: absolute; height: 101px; top: 50%; margin-top: -50.5px;">
								<p class="main-title">Please enter eVoucher number</p>
								<ul class="simple-list">
									<li>Look for eVoucher number on the booking confirmation email.</li>
									<li>Redeem eVoucher bookings only. For appointments, you just need to confirm them to get paid.</li>
								</ul>
							</div>
						</div>
						<div class="voucher-note voucher-searching hidden">
							<div class="voucher-note-inner vertically-centered">
								<div class="icon"></div>
								Searching...
							</div>
						</div>
						<div class="voucher-note voucher-not-found hidden">
							<div class="voucher-note-inner vertically-centered">
								Voucher not found.
								<span>Please check that you have entered the voucher number correctly.</span>
							</div>
						</div>
						<div class="voucher-note voucher-belongs hidden">
							<div class="voucher-note-inner vertically-centered">
								Voucher belongs to another venue
								<span><a class="login-link" target="_blank" href="/login?route=%2Fhome">Do you want to login as different user?</a></span>
							</div>
						</div>
						<div class="voucher-info hidden">
							<ul class="voucher-container">
								<li class="price-wrapper">
									<span class="evoucher-price"></span>
								</li>
								<li class="title-wrapper">
									<span class="title"></span>
								</li>
								<li class="status-wrapper status-active">
									Status:
									<span class="evoucher-status status-txt"></span>
								</li>
								<li class="expiration-wrapper">
									<span class="label-wrapper">Expires on</span>
									<span class="evoucher-expiry"></span>
								</li>
								<li class="recipient-wrapper">
									<span class="label-wrapper">Recipient</span>
									<span class="evoucher-recipient"></span>
								</li>
							</ul>
							<div class="meta-wrapper">
								Order ref#:
								<span class="evoucher-order-ref"></span>

								<span class="b-booking-link hidden">
									<span class="separator">|</span>
									Booking ID:
									<a class="evoucher-booking-id" href="javascript:;"></a>
								</span>
							</div>
							<div class="venue-wrapper hidden">
								<form novalidate="novalidate">
									<table cellspacing="0" cellpadding="0" class="default-form ">
										<tbody><tr class="form-row">
											<td class="label-part"><label for="voucher-redemption-venue-id">Redeem at this venue:</label></td>
											<td class="input-part evoucher-venue-container"></td>
										</tr>
									</tbody></table>
								</form>
							</div>
							<div class="message-wrapper message-valid hidden">
								<div class="message">
									<span class="v-message-title">Voucher redeemed</span>
									<span class="payment-date b-payment-date v-payment-date"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="dialog-actions">
						<button class="button action action-default button-primary redeem-another hidden" type="button"><div class="button-inner"><div class="button-icon icons-voucher"></div>Redeem another</div></button>
						<button class="button action action-default button-primary redeem-action hidden" type="button"><div class="button-inner"><div class="button-icon icons-voucher"></div><span class="msg msg-action-default">Redeem</span><span class="msg msg-action-doing">Working...</span></div></button>
						<button class="button button-primary a-create-appointment hidden" type="button"><div class="button-inner"><div class="button-icon icons-plus"></div>Book an appointment</div></button>
						<a class="button-cancel a-cancel" data-dismiss="modal" href="javascript:;">Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>