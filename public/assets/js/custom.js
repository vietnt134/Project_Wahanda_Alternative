$(document).ready(function() {
	loadServiceList();
	$('#user_description_see_more').on('click', function() {
		$('#user_description').css({
			'white-space' : 'normal',
			'overflow' : 'auto'
		});
		$(this).hide();
	});
	$('#service_detail').on('hide.bs.modal', function() {
		CHOOSEN_DATE = '';
		CHOOSEN_DATE_STORE = '';
		CHOOSEN_TIME = '';
		CHOOSEN_PRICE = '';
		WEEK_PAGE = 1;
		$('#user_description').css({
			'white-space' : 'nowrap',
			'overflow' : 'hidden',
		});
		$('#user_description_see_more').show();
	});
});
$(document).on('click', '#login_btn', function() {
	//alert(window.location.href);
	//alert(URL);
	$('#email_login').val('');
	$('#pass_login').val('');
	$('#footer_login').children('i').remove();
	$('#footer_login').children('span').remove();
});
$('#login_modal').on('shown.bs.modal', function() {
	$('#email_login').focus();
});
/*LOAD SERVICE LIST*/
function loadServiceList() {
	$.ajax({
		url : URL + 'index/loadServiceList',
		type : 'post',
		dataType : 'json',
		success : function(response) {
			//console.log(response);
			// console.log(CHOOSEN_DATE);
			// console.log(CHOOSEN_TIME);
			// console.log(CHOOSEN_PRICE);
			// console.log(USER_SERVICE_ID);

			var html = '';
			$.each(response, function(key, value) {
				html += '<div class="col-sm-6 col-md-4 top_service_items" style="display : none;">';
				html += '<div class="item">';
				html += '<input class="user_service_id" name="user_service_id" type="hidden" value="' + value.user_service_id + '"/>';
				html += '<p align="center" class="name">';
				html += value.user_service_name.toUpperCase();
				html += '</p>';
				html += '<div class="clearfix svl-01">';
				html += '<span class="rating pull-left"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> </span>';
				html += '<span class="count-rating pull-right">';
				html += '345 lượt bình chọn';
				html += '</span>';
				html += '</div>';
				html += '<div class="image" class="clearfix">';
				html += '<img class="img-responsive" alt="Responsive image" src="' + URL + 'public/assets/img/tp-hcm-thanh-dai-cong-truong-thi-cong-metro-1408499845_490x294.jpg" />';
				html += '</div>';
				html += '<div class="clearfix">';
				html += '<span class="price pull-left">' + value.user_service_sale_price + ' VNĐ</span>';
				html += '<span class="sale-percent pull-right"> <i class="fa fa-arrow-down"></i>' + ' GIẢM ' + Math.floor((value.user_service_full_price - value.user_service_sale_price) / value.user_service_full_price * 100) + '%</span>';
				html += '</div>';
				html += '<p title="' + value.user_service_description + '" class="description">' + value.user_service_description;
				html += '</p>';
				html += '<div class="clearfix">';
				html += '<button class="btn btn-sm btn-orange pull-right book-now-btn">';
				html += '<i style="display:none;" class="waiting_booking_detail fa fa-refresh fa-spin"></i> BOOK NOW';
				html += '</button>';
				html += '<a href="#" class="service-similar pull-left">DỊCH VỤ TƯƠNG TỰ</a>';
				html += '</div>';
				html += '</div>';
				html += '</div>';
			});
			if (response[0] != null) {
				$('#error_loading').remove();
				$('#top_service').append(html);
			} else {
				$('#top_service').append('<div id="error_loading" style="color : #A1A1A1;display : none" class="text-center"><h4>Xin lỗi quý khách, hiện không có dịch vụ nào cả!</h4></div>');
				setTimeout(function() {
					$('#error_loading').fadeIn();
				}, 600);				
			}
		},
		complete : function() {
			$('#waiting_for_top_service').fadeOut(function() {
				$('.top_service_items').fadeIn();
			});

			$('.top_service_items').on('click', function(e) {
				if (e.target.className != 'service-similar pull-left') {
					$(this).find('i.waiting_booking_detail').fadeIn();
					USER_SERVICE_ID = $(this).find('.user_service_id').val();
					//console.log(USER_SERVICE_ID);
					loadServiceDetail(USER_SERVICE_ID);
					//$(this).find('i.waiting_booking_detail').fadeOut();
				}
			});
		}
	});
}

/*END LOAD SERVICE LIST*/
/*-----------------------*/

/*LOAD SERVICE DETAIL*/
function loadServiceDetail(user_service_id) {				
	// console.log(CHOOSEN_DATE);
	// console.log(CHOOSEN_TIME);
	// console.log(CHOOSEN_PRICE);
	// console.log(USER_SERVICE_ID);
	$.ajax({
		url : URL + 'index/loadServiceDetail',
		type : 'post',
		dataType : 'json',
		data : {
			user_service_id : user_service_id
		},
		success : function(response) {
			if (response[0] != null) {
				$('#service_detail_modal_body').show();
				$('#error_service_detail_modal_body').hide();
				//console.log(response);
				var user_open_hour_1 = '';
				var user_open_hour_2 = '';
				var separate_count = 0;
				LIMIT_TIME_BEFORE_SERVICE = parseInt(response[0].user_limit_before_service);
				var user_limit_before_booking = parseInt(response[0].user_limit_before_booking);
				var day = '';
				var date = '';
				var month_year = '';
				var this_month_year = '';
				var day_of_week = parseInt(response[0].day_of_week);
				TODAY_OF_WEEK = parseInt(response[0].day_of_week);
				var day_of_month = parseInt(response[0].day_of_month);
				TODAY_OF_MONTH = parseInt(response[0].day_of_month);
				var total_days_current_month = '';
				var year = parseInt(response[0].year);
				TODAY_YEAR = parseInt(response[0].year);
				TODAY_HOUR = parseInt(response[0].hour);
				TODAY_MINUTE = parseInt(response[0].minute);
				//console.log(TODAY_MINUTE);
				var this_month;
				var month = parseInt(response[0].month);
				TODAY_MONTH = parseInt(response[0].month);
				var month_in_year = [];
				month_in_year[1] = 31;
				month_in_year[2] = 28;
				month_in_year[3] = 31;
				month_in_year[4] = 30;
				month_in_year[5] = 31;
				month_in_year[6] = 30;
				month_in_year[7] = 31;
				month_in_year[8] = 31;
				month_in_year[9] = 30;
				month_in_year[10] = 31;
				month_in_year[11] = 30;
				month_in_year[12] = 31;
				var month_in_sp_year = [];
				month_in_sp_year[1] = 31;
				month_in_sp_year[2] = 29;
				month_in_sp_year[3] = 31;
				month_in_sp_year[4] = 30;
				month_in_sp_year[5] = 31;
				month_in_sp_year[6] = 30;
				month_in_sp_year[7] = 31;
				month_in_sp_year[8] = 31;
				month_in_sp_year[9] = 30;
				month_in_sp_year[10] = 31;
				month_in_sp_year[11] = 30;
				month_in_sp_year[12] = 31;
				//console.log(month_in_sp_year);
				for ( mon = 1; mon <= 12; mon++) {
					if (mon == month) {
						this_month = 'Tháng ' + mon;
					}
				}
				var week = 1;
				month_year += '<span style="display:none" class="week_' + week + '"> ' + this_month.toUpperCase() + ', ';
				month_year += ' ' + year + ' </span>';
				TOTAL_WEEK = week;
				var days_order = 1;
				for ( i = 1; i <= user_limit_before_booking; i++) {
					if (day_of_month < 10) {
						days_of_month = '0' + day_of_month;
					} else {
						days_of_month = day_of_month;
					}
					if (day_of_week == 8) {
						day_of_week = 1;
					}
					if (days_order > 7) {
						date += '<span day-data="' + day_of_week + '" value="' + year + '-' + month + '-' + day_of_month + '" class="week_' + week + '" style="display:none">' + days_of_month + '</span>';
						if (day_of_week == 1) {
							day += '<span class="week_' + week + '" style="display:none"><b>CN</b></span>';
							
							month_year += '<span style="display:none" class="week_' + week + '"> ' + this_month.toUpperCase() + ', ';
							month_year += ' ' + year + ' </span>';
							week++;
							TOTAL_WEEK = week;
						} else if (day_of_week == 2) {
							day += '<span class="week_' + week + '" style="display:none"><b>T2</b></span>';
						} else if (day_of_week == 3) {
							day += '<span class="week_' + week + '" style="display:none"><b>T3</b></span>';
						} else if (day_of_week == 4) {
							day += '<span class="week_' + week + '" style="display:none"><b>T4</b></span>';
						} else if (day_of_week == 5) {
							day += '<span class="week_' + week + '" style="display:none"><b>T5</b></span>';
						} else if (day_of_week == 6) {
							day += '<span class="week_' + week + '" style="display:none"><b>T6</b></span>';
						} else if (day_of_week == 7) {
							day += '<span class="week_' + week + '" style="display:none"><b>T7</b></span>';
						}
					} else {
						if (week == 1) {
							date += '<span day-data="' + day_of_week + '" value="' + year + '-' + month + '-' + day_of_month + '" class="week_' + week + '">' + days_of_month + '</span>';
							if (day_of_week == 1) {
								day += '<span class="week_' + week + '"><b>CN</b></span>';
								
								month_year += '<span class="week_' + week + '"> ' + this_month.toUpperCase() + ', ';
								month_year += ' ' + year + ' </span>';
								week++;
								TOTAL_WEEK = week;
							} else if (day_of_week == 2) {
								day += '<span class="week_' + week + '"><b>T2</span>';
							} else if (day_of_week == 3) {
								day += '<span class="week_' + week + '"><b>T3</span>';
							} else if (day_of_week == 4) {
								day += '<span class="week_' + week + '"><b>T4</span>';
							} else if (day_of_week == 5) {
								day += '<span class="week_' + week + '"><b>T5</span>';
							} else if (day_of_week == 6) {
								day += '<span class="week_' + week + '"><b>T6</span>';
							} else if (day_of_week == 7) {
								day += '<span class="week_' + week + '"><b>T7</span>';
							}
						} else if (week == 2) {
							date += '<span day-data="' + day_of_week + '" value="' + year + '-' + month + '-' + day_of_month + '" class="week_1 week_' + week + '">' + days_of_month + '</span>';
							if (day_of_week == 1) {
								day += '<span class="week_1 week_' + week + '"><b>CN</b></span>';
								
								month_year += '<span style="display:none" class="week_' + week + '"> ' + this_month.toUpperCase() + ', ';
								month_year += ' ' + year + ' </span>';
								week++;
								TOTAL_WEEK = week;
							} else if (day_of_week == 2) {
								day += '<span class="week_1 week_' + week + '"><b>T2</b></span>';
							} else if (day_of_week == 3) {
								day += '<span class="week_1 week_' + week + '"><b>T3</b></span>';
							} else if (day_of_week == 4) {
								day += '<span class="week_1 week_' + week + '"><b>T4</b></span>';
							} else if (day_of_week == 5) {
								day += '<span class="week_1 week_' + week + '"><b>T5</b></span>';
							} else if (day_of_week == 6) {
								day += '<span class="week_1 week_' + week + '"><b>T6</b></span>';
							} else if (day_of_week == 7) {
								day += '<span class="week_1 week_' + week + '"><b>T7</b></span>';
							}
						}
					}
					day_of_week++;
					days_order++;
					day_of_month++;
					if ((year % 400 == 0) || (year % 4 == 0 && year % 100 != 0)) {
						if (day_of_month > month_in_sp_year[month]) {
							day_of_month = 1;
							month++;
							if (month > 12) {
								month = 1;
								year++;
							}
							for ( mon = 1; mon <= 12; mon++) {
								if (mon == month) {
									this_month = 'Tháng ' + mon;
								}
							}
						}
					} else {
						if (day_of_month > month_in_year[month]) {
							day_of_month = 1;
							month++;
							if (month > 12) {
								month = 1;
								year++;
							}
							for ( mon = 1; mon <= 12; mon++) {
								if (mon == month) {
									this_month = 'Tháng ' + mon;
								}
							}
						}
					}
				}
				month_year += '<span style="display:none" class="week_' + week + '"> ' + this_month.toUpperCase() + ', ';
				month_year += ' ' + year + ' </span>';
				$('#days_booking').children().html(day);
				$('#date_booking').children().html(date);
				$('#month_and_year').children().html('<span onclick="clickLastWeek()" id="last_week" style="cursor:pointer" class="glyphicon glyphicon-chevron-left pull-left"></span>' + month_year + '<span onclick="clickNextWeek()" id="next_week" style="cursor:pointer" class="glyphicon glyphicon-chevron-right pull-right"></span>');
				$.each(response[0], function(key, value) {
					if (key == 'user_service_sale_price') {
						USER_SERVICE_SALE_PRICE = value;
					}
					if (key == 'user_service_duration') {
						USER_SERVICE_DURATION = value;
					}
					if (key == 'user_business_name') {
						USER_BUSINESS_NAME = value;
					}
					if (key == 'user_service_name') {
						USER_SERVICE_NAME = value;
					}			
					if (key == 'user_service_use_evoucher') {
						if (value == '0') {
							$('#btn_evoucher_booking_zone').attr('disabled', 'disabled');
						}
					}
					$('#' + key).val(value);
					$('#' + key + ', .' + key).text(value);
					if (key == 'user_open_hour') {
						json_user_open_hour = jQuery.parseJSON(value);
						//console.log(json_user_open_hour);
						$.each(json_user_open_hour, function(day, hour) {
							separate_count++;
							if (separate_count == '1') {
								MON_OPEN_CLOSE['status'] = hour[0];
								MON_OPEN_CLOSE['open'] = hour[1];
								MON_OPEN_CLOSE['close'] = hour[2];
								//console.log(MON_OPEN_CLOSE);
							} else if (separate_count == '2') {
								TUE_OPEN_CLOSE['status'] = hour[0];
								TUE_OPEN_CLOSE['open'] = hour[1];
								TUE_OPEN_CLOSE['close'] = hour[2];
								//console.log(TUE_OPEN_CLOSE);
							} else if (separate_count == '3') {
								WED_OPEN_CLOSE['status'] = hour[0];
								WED_OPEN_CLOSE['open'] = hour[1];
								WED_OPEN_CLOSE['close'] = hour[2];
								//console.log(WED_OPEN_CLOSE);
							} else if (separate_count == '4') {
								THU_OPEN_CLOSE['status'] = hour[0];
								THU_OPEN_CLOSE['open'] = hour[1];
								THU_OPEN_CLOSE['close'] = hour[2];
								//console.log(THU_OPEN_CLOSE);
							} else if (separate_count == '5') {
								FRI_OPEN_CLOSE['status'] = hour[0];
								FRI_OPEN_CLOSE['open'] = hour[1];
								FRI_OPEN_CLOSE['close'] = hour[2];
								//console.log(FRI_OPEN_CLOSE);
							} else if (separate_count == '6') {
								SAT_OPEN_CLOSE['status'] = hour[0];
								SAT_OPEN_CLOSE['open'] = hour[1];
								SAT_OPEN_CLOSE['close'] = hour[2];
								//console.log(SAT_OPEN_CLOSE);
							} else if (separate_count == '7') {
								SUN_OPEN_CLOSE['status'] = hour[0];
								SUN_OPEN_CLOSE['open'] = hour[1];
								SUN_OPEN_CLOSE['close'] = hour[2];
								//console.log(SUN_OPEN_CLOSE);
							}
							if (separate_count > 3) {
								if (hour[0] == 1) {
									user_open_hour_2 += '<p><i>' + day + ' : từ ' + hour[1] + ' h - ' + hour[2] + ' h</i></p>';
								} else if (hour[0] == 0) {
									user_open_hour_2 += '<p><i>' + day + ' : Nghỉ</i></p>';
								}
							} else {
								if (hour[0] == 1) {
									user_open_hour_1 += '<p><i>' + day + ' : từ ' + hour[1] + ' h - ' + hour[2] + ' h</i></p>';
								} else if (hour[0] == 0) {
									user_open_hour_1 += '<p><i>' + day + ' : Nghỉ</i></p>';
								}
							}
						});
					}
				});
				//response[0].user_open_hour;
				$('#user_open_hour_1').html(user_open_hour_1);
				$('#user_open_hour_2').html(user_open_hour_2);
			} else {
				$('#error_service_detail_modal_body').show();
				$('#service_detail_modal_body').hide();
			}
		},
		complete : function() {
			$('i.waiting_booking_detail').fadeOut();
			$('#service_detail').modal('show');
			$('#btn_user_service_price').text(USER_SERVICE_SALE_PRICE);
			var time_html = '';
			$('#date_booking span').on('click', function() {
				var time_html = '';
				var service_remain = false;
				$(this).addClass('active');
				$(this).siblings().removeClass('active');
				$('#time_booking').children().remove();
				CHOOSEN_DATE = $(this).attr('value');
				var temp_1_array = [];
				switch($(this).attr('day-data')) {
				case '2' :
					temp_1_array = MON_OPEN_CLOSE;
					break;
				case '3' :
					temp_1_array = TUE_OPEN_CLOSE;
					break;
				case '4' :
					temp_1_array = WED_OPEN_CLOSE;
					break;
				case '5' :
					temp_1_array = THU_OPEN_CLOSE;
					break;
				case '6' :
					temp_1_array = FRI_OPEN_CLOSE;
					break;
				case '7' :
					temp_1_array = SAT_OPEN_CLOSE;
					break;
				case '1' :
					temp_1_array = SUN_OPEN_CLOSE;
					break;
				}
				//console.log(temp_1_array['status']);
				if (temp_1_array['status'] == '1') {
					var current_hour_in_min = (TODAY_HOUR * 60) + TODAY_MINUTE;
					var open_hour_in_min = parseInt(temp_1_array['open']) * 60;
					if ($(this).attr('value') == TODAY_YEAR + '-' + TODAY_MONTH + '-' + TODAY_OF_MONTH) {
						while (current_hour_in_min > open_hour_in_min) {
							open_hour_in_min = open_hour_in_min + parseInt(USER_SERVICE_DURATION);
						}
						open_hour_in_min = open_hour_in_min + LIMIT_TIME_BEFORE_SERVICE;
					}
					var close_hour_in_min = parseInt(temp_1_array['close']) * 60;
					var am_pm = '';
					var minute;
					var hour;
					//console.log(close_hour_in_min);
					//console.log(LIMIT_TIME_BEFORE_SERVICE);
					while (close_hour_in_min > open_hour_in_min) {
						service_remain = true;
						if (open_hour_in_min <= 720) {
							am_pm = 'am';
						} else {
							am_pm = 'pm';
						}
						if (open_hour_in_min % 60 < 10) {
							minute = '0' + (open_hour_in_min % 60);
						} else {
							minute = open_hour_in_min % 60;
						}
						if ((open_hour_in_min - open_hour_in_min % 60) / 60 < 10) {
							hour = '0' + ((open_hour_in_min - open_hour_in_min % 60) / 60);
						} else {
							hour = (open_hour_in_min - open_hour_in_min % 60) / 60;
						}
						time_html += '<hr/>';
						time_html += '<div class="row" price-data="' + USER_SERVICE_SALE_PRICE + '" date-time-data="' + hour + ':' + minute + '">';
						time_html += '<div class="col-md-offset-1 col-md-6"><strong>' + hour + ':' + minute + am_pm + '</strong></div>';
						time_html += '<div class="col-md-5">' + USER_SERVICE_SALE_PRICE + ' VNĐ</div>';
						time_html += '</div>';
						open_hour_in_min = open_hour_in_min + parseInt(USER_SERVICE_DURATION);
						$('#btn_user_service_price').text(USER_SERVICE_SALE_PRICE);
					}
				} else if (temp_1_array['status'] == '0') {
					service_remain = true;
					time_html += '<hr/>';
					time_html += '<div class="row can_not_book">';
					time_html += '<div class="col-md-offset-1 col-md-11 text-center"><strong>Dịch vụ không mở trong ngày này!<strong></div>';
					time_html += '</div>';
					time_html += '<hr/>';
					$('#btn_user_service_price').text('');
				}
				if(time_html == '' && service_remain == false){
					time_html += '<hr/>';
					time_html += '<div class="row can_not_book">';
					time_html += '<div class="col-md-offset-1 col-md-11 text-center"><strong>Hết lịch hẹn trong ngày!<strong></div>';
					time_html += '</div>';
					time_html += '<hr/>';
					$('#btn_user_service_price').text('');
				}
				$('#time_booking').html(time_html);
				
				$('#time_booking div.row:not(.can_not_book)').on('click', function() {
					$(this).addClass('active');
					$(this).siblings().removeClass('active');
					CHOOSEN_TIME = $(this).attr('date-time-data');
					CHOOSEN_PRICE = $(this).attr('price-data');
					CHOOSEN_DATE_STORE = CHOOSEN_DATE;
					console.log(CHOOSEN_DATE);
					console.log(CHOOSEN_TIME);
					console.log(CHOOSEN_PRICE);
					console.log(USER_SERVICE_ID);
				});
				$('#time_booking div.row:not(.can_not_book)').each(function(index) {
					if ($(this).attr('date-time-data') == CHOOSEN_TIME && CHOOSEN_DATE == CHOOSEN_DATE_STORE) {
						$(this).addClass('active');
						$(this).siblings().removeClass('active');
					}
				});
			});

			$('#date_booking span').each(function(index) {
				if ($(this).attr('value') == TODAY_YEAR + '-' + TODAY_MONTH + '-' + TODAY_OF_MONTH) {
					CHOOSEN_DATE = $(this).attr('value');
					var service_remain_default = false;
					$(this).addClass('active');
					$('#btn_online_booking_zone').addClass('btn-choose').removeClass('btn-orange');
					var time_html = '';
					if ($(this).attr('day-data') == TODAY_OF_WEEK) {
						var temp_2_array = [];
						if ($(this).attr('day-data') == '1') {
							temp_2_array = SUN_OPEN_CLOSE;
						} else if ($(this).attr('day-data') == '2') {
							temp_2_array = MON_OPEN_CLOSE;
						} else if ($(this).attr('day-data') == '3') {
							temp_2_array = TUE_OPEN_CLOSE;
						} else if ($(this).attr('day-data') == '4') {
							temp_2_array = WED_OPEN_CLOSE;
						} else if ($(this).attr('day-data') == '5') {
							temp_2_array = THU_OPEN_CLOSE;
						} else if ($(this).attr('day-data') == '6') {
							temp_2_array = FRI_OPEN_CLOSE;
						} else if ($(this).attr('day-data') == '7') {
							temp_2_array = SAT_OPEN_CLOSE;
						}
						if (temp_2_array['status'] == '1') {
							var open_hour_in_min = parseInt(temp_2_array['open']) * 60;
							var current_hour_in_min = (TODAY_HOUR * 60) + TODAY_MINUTE;
							while (current_hour_in_min > open_hour_in_min) {
								open_hour_in_min = open_hour_in_min + parseInt(USER_SERVICE_DURATION);
							}
							var close_hour_in_min = parseInt(temp_2_array['close']) * 60;
							open_hour_in_min = open_hour_in_min + LIMIT_TIME_BEFORE_SERVICE;
							var am_pm = '';
							var minute;
							var hour;
							while (close_hour_in_min > open_hour_in_min) {
								service_remain_default = true;
								if (open_hour_in_min <= 720) {
									am_pm = 'am';
								} else {
									am_pm = 'pm';
								}
								if (open_hour_in_min % 60 < 10) {
									minute = '0' + (open_hour_in_min % 60);
								} else {
									minute = open_hour_in_min % 60;
								}
								if ((open_hour_in_min - open_hour_in_min % 60) / 60 < 10) {
									hour = '0' + ((open_hour_in_min - open_hour_in_min % 60) / 60);
								} else {
									hour = (open_hour_in_min - open_hour_in_min % 60) / 60;
								}
								time_html += '<hr/>';
								time_html += '<div class="row" price-data="' + USER_SERVICE_SALE_PRICE + '" date-time-data="' + hour + ':' + minute + '">';
								time_html += '<div class="col-md-offset-1 col-md-6"><strong>' + hour + ':' + minute + am_pm + '</strong></div>';
								time_html += '<div class="col-md-5">' + USER_SERVICE_SALE_PRICE + ' VNĐ</div>';
								time_html += '</div>';
								open_hour_in_min = open_hour_in_min + parseInt(USER_SERVICE_DURATION);
								$('#btn_user_service_price').text(USER_SERVICE_SALE_PRICE);
							}
						} else if (temp_2_array['status'] == '0') {
							service_remain_default = true;
							time_html += '<hr/>';
							time_html += '<div class="row can_not_book">';
							time_html += '<div class="col-md-offset-1 col-md-11 text-center"><strong>Dịch vụ không mở trong ngày này!<strong></div>';
							time_html += '</div>';
							time_html += '<hr/>';
							$('#btn_user_service_price').text('');
						}
					}
					if(time_html == '' && service_remain_default == false){
						time_html += '<hr/>';
						time_html += '<div class="row can_not_book">';
						time_html += '<div class="col-md-offset-1 col-md-11 text-center"><strong>Hết lịch hẹn trong ngày!<strong></div>';
						time_html += '</div>';
						time_html += '<hr/>';
						$('#btn_user_service_price').text('');
					}
					$('#time_booking').html(time_html);
					$('#time_booking div.row:not(.can_not_book)').on('click', function() {
						$(this).addClass('active');
						$(this).siblings().removeClass('active');
						CHOOSEN_TIME = $(this).attr('date-time-data');
						CHOOSEN_PRICE = $(this).attr('price-data');
						CHOOSEN_DATE_STORE = CHOOSEN_DATE;
						console.log(CHOOSEN_DATE);
						console.log(CHOOSEN_TIME);
						console.log(CHOOSEN_PRICE);
						console.log(USER_SERVICE_ID);
					});
				}
			});
		}
	});
}

/*END LOAD SERVICE DETAIL*/
/*-----------------------*/

/*WEEK PAGE*/
function clickNextWeek() {
	if (WEEK_PAGE == TOTAL_WEEK) {
		return false;
	} else {
		WEEK_PAGE++;
		for ( i = 1; i <= TOTAL_WEEK; i++) {
			$('.week_' + i).hide();
		}
		$('.week_' + WEEK_PAGE).fadeIn();
	}
}

function clickLastWeek() {
	if (WEEK_PAGE == 1) {
		return false;
	} else {
		WEEK_PAGE--;
		for ( i = 1; i <= TOTAL_WEEK; i++) {
			$('.week_' + i).hide();
		}
		$('.week_' + WEEK_PAGE).fadeIn();
	}
}

/*END WEEK PAGE*/
/*-----------------------*/

/*LOGIN*/
function enterEvent(event) {
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if (keycode == '13') {
		login();
	}
}

function login() {
	var email_login = $('#email_login').val();
	var pass_login = $('#pass_login').val();
	var login_flg;
	var user_name;
	if (email_login != '' && pass_login != '') {
		$('#footer_login').children('span').remove();
		$('#footer_login').prepend('<i class="fa fa-refresh fa-spin"></i>');
		$.ajax({
			url : URL + 'clientlogin/clientLogin',
			type : 'post',
			dataType : 'json',
			data : {
				email : email_login,
				pass : pass_login
			},
			success : function(response) {
				if (response[0] == null) {
					login_flg = 0;
				} else {
					login_flg = 1;
					user_name = response[0].client_username;
				}
			},
			complete : function() {
				if (login_flg == 0) {
					$('#footer_login').children('i').remove();
					$('#footer_login').prepend('<span class="text-danger"><small><i> Đăng nhập thất bại!</small></i></span>');
				} else if (login_flg == 1) {
					$('#footer_login').children('i').remove();
					$('#login_modal').modal('hide');
					//window.location = URL;
					$('#login_group').children().remove();
					$('#login_group').append('<div class="col-sm-12 remove-padding" style="margin-bottom: 10px;">' + '<div class="dropdown">' + '<a id="dropdown_profile" data-toggle="dropdown" class="btn btn-warning btn-block dropdown-toggle" style="border-radius: 4px;">' + 'Xin chào bạn: <i class="fa fa-user"></i> ' + user_name + ' <span class="caret"></span>' + '</a>' + '<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdown_profile">' + '<li role="presentation"><a role="menuitem" tabindex="-1" href="' + URL + 'clientsetting"><i class="fa fa-wrench"></i> Quản lý tài khoản</a></li>' + '<li role="presentation" class="divider"></li>' + '<li role="presentation"><a role="menuitem" tabindex="-1" onclick="javascript:logout()" style="cursor: pointer;"><i class="fa fa-power-off"></i> Thoát</a></li>' + '</ul>' + '</div>' + '</div>');
					var http_path = window.location.href.replace('http:', '');
					var https_path = window.location.href.replace('https:', '');
					if (http_path != URL && https_path != URL) {
						window.location = URL;
					}
				}
			}
		});
	} else {
		$('#footer_login').children('span').remove();
		$('#footer_login').prepend('<span class="text-danger"><small><i> Hãy nhập email và mật khẩu!</small></i></span>');
	}
}

function logout() {
	$.ajax({
		url : URL + 'clientlogin/clientLogout',
		complete : function() {
			$('#booking_amount').text('0');
			$('#login_group').children().remove();
			$('#login_group').append('<div class="col-sm-5 remove-padding">' + 
									 '<button id="login_btn" class="btn btn-block login-btn" data-toggle="modal" data-target="#login_modal" type="button">Đăng nhập</button>' + 
									 '</div>' + 
									 '<div class="col-sm-2"></div>' + 
									 '<div class="col-sm-5 remove-padding">' + 
									 '<button class="btn btn-block login-face-btn" type="button">Login Face</button>' + 
									 '</div>');
			var http_path = window.location.href.replace('http:', '');
			var https_path = window.location.href.replace('https:', '');
			if (http_path != URL && https_path != URL) {
				window.location = URL;
			}
		}
	});
}

/*END LOGIN*/
/*-----------------------*/

/*JUMP TO TAB*/
function jumbToTab(tab) {
	$('#' + tab).siblings().hide();
	$('#' + tab).fadeIn();
	$('#btn_' + tab).addClass('btn-choose').removeClass('btn-orange');
	$('#btn_' + tab).parent().siblings().children().addClass('btn-orange').removeClass('btn-choose'); 
}
/*END JUMP TO TAB*/
/*-----------------------*/

/*GET ONLINE BOOKING INFOMATION*/
function getBookingInfo() {
	if (USER_SERVICE_ID == '' || CHOOSEN_DATE == '' || CHOOSEN_DATE_STORE == '' || CHOOSEN_TIME == '' || CHOOSEN_PRICE == '') {
		alert('Bạn chưa chọn dịch vụ, vui lòng chọn!');
	} else {
		$('#waiting_for_booking_save').fadeIn();
		// console.log(CHOOSEN_DATE);
		// console.log(CHOOSEN_TIME);
		// console.log(CHOOSEN_PRICE);
		// console.log(USER_SERVICE_ID);
		$.ajax({
			url : URL + 'index/getBookingInfo',
			type : 'post',
			//dataType : 'json',
			data : {
				user_service_id : USER_SERVICE_ID,
				booking_detail_date : CHOOSEN_DATE,
				booking_detail_time : CHOOSEN_TIME,
				choosen_price : CHOOSEN_PRICE,
				user_business_name : USER_BUSINESS_NAME,
				user_service_name : USER_SERVICE_NAME,
				booking_quantity : 1
			},
			success: function(response){
				//console.log(response);
				$('#booking_amount').text(response);
			},
			complete: function(){
				$('#waiting_for_booking_save').fadeOut(function(){
					$('#service_detail').modal('hide');
				});
			}
		});
		
	}
}
/*END GET ONLINE BOOKING INFOMATION*/
/*-----------------------*/

/*LOAD SHOPPING CART*/
function shoppingCartDetail(){
	$.ajax({
		url : URL + 'index/shoppingCartDetail',
		type: 'post',
		dataType : 'json',
		success : function(response){
			var html = '';
			if(response[0] != null){
				html = '<tr>';
				html += '<th  style="border: none">DỊCH VỤ</th>';
				html += '<th  style="border: none">NGÀY - GIỜ</th>';
				html += '<th  style="border: none">GIÁ</th>';
				html += '<th  style="border: none">SỐ LƯỢNG</th>';
				html += '<th  style="border: none">TỔNG TIỀN</th>';
				html += '</tr>';
				$('#update_cart').attr('disabled',false);
				$('#confirm_cart').attr('disabled',false);
				$('#cart_amount').text(response.length);
				var total_money = 0;
				$.each(response, function(index, item){
					html += '<tr>';
					html += '<td width="30%">' + item.user_service_name.toUpperCase() + ' - <b>' + item.user_business_name + '</b></td>';
					html += '<td width="20%">' + item.booking_detail_date + ' - ' + item.booking_detail_time + '</td>'; 
					html += '<td width="19%">' + item.choosen_price + ' VNĐ</td>';
					html += '<td width="12%"><input type="text" class="form-control appointment_quantity" value="' + item.booking_quantity + '"/></td>';
					html += '<td width="19%">' + parseInt(item.choosen_price) * parseInt(item.booking_quantity) + ' VNĐ</td>';
					html += '</tr>';
					total_money = total_money + parseInt(item.choosen_price) * parseInt(item.booking_quantity);
				});
				$('#total_cart').text(total_money);	
			}else{	
				$('#update_cart').attr('disabled',true);
				$('#confirm_cart').attr('disabled',true);
				$('#total_cart').text('0');	
				$('#cart_amount').text('0');	
				html = '<tr>';
				html += '<th  style="border: none">DỊCH VỤ</th>';
				html += '<th  style="border: none">NGÀY - GIỜ</th>';
				html += '<th  style="border: none">GÍA</th>';
				html += '<th  style="border: none">SỐ LƯỢNG</th>';
				html += '<th  style="border: none">TỔNG TIỀN</th>';
				html += '</tr>';
				html += '<tr><td class="text-center" colspan="5"><h3><i class="fa fa-exclamation-circle"></i> Giỏ hàng của bạn đang rỗng! <i class="fa fa-frown-o"></i></h3></td></tr>';
			}
			$('table#table_shopping_cart').html(html); 
		}
	});
}
/*END LOAD SHOPPING CART*/