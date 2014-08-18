$('#user-nav .a-login').click(function(){
	if($('#header-login').is(':hidden')){
  		$('#header-login').slideDown();
  		$('.button-inside').text('Close');
	}else{
		$('#header-login').slideUp();
		$('.button-inside').text('Sign up');
	}
});
$('.site-close-form').click(function(){
	$('#header-login').slideUp();
	$('.button-inside').text('Sign up');
});
