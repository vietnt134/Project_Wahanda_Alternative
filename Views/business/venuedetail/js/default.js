$('#manage_booking').change(function(){
	var check_val = $(this).val();
	if(check_val === "PP" || check_val === ""){
		$('#manage_booking_spec').hide();
	}else{
		$('#manage_booking_spec').show();
	}
});
