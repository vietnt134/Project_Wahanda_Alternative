$(document).ready(function() {
	$('#manage_booking').change(function() {
		var check_val = $(this).val();
		if (check_val === "PP" || check_val === "") {
			$('#manage_booking_spec').hide();
		} else {
			$('#manage_booking_spec').show();
		}
	});
	$("#venue_signup_form").validate({
		errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
		rules : {
			rePassword : {
				equalTo : "#password" // So sánh trường repassword với trường có id là password
			},
		}
	});
});
