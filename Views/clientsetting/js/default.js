$(document).ready(function() {
	$('#hidden_change_pass').on('click', function() {

		if ($('#client_change_pass').is(':hidden') == false) {
			$('#client_change_pass').slideUp();
		} else {
			$('#client_change_pass').slideDown();
			$('body,html').animate({
				scrollTop : $(window).height()
			});
		}
	});
	loadUserDetail();
});
function loadUserDetail() {
	$.ajax({
		url : URL + 'clientsetting/loadUserDetail',
		type : 'post',
		dataType : 'json',
		success : function(response) {
			$.each(response[0], function(key, value) {
				$('p#'+key).text(value);
			});
			if($('p#client_sex').text() == 0){
				$('p#client_sex').html('<i class="fa fa-male"></i>');
			}else if($('p#client_sex').text() == 1){
				$('p#client_sex').html('<i class="fa fa-female"></i>');
			}
		}
	});
}
