/* 
Author: Mike Sinkula
URL: mikesinkula.com
*/

window.onload = function() { // when window loads...
	
	$("form#user-login-form li.first a").click(function() { // open create an account
		$("#block-formblock-user_register").show();
		return false;
	});
	
	$("form#user-login-form li.last a").click(function() { // open request new password
		$("#block-formblock-user_password_request").show();
		return false;
	});
	
	$("#user-pass,#user-register-form").prepend('<nav class="close"><a href="#">x</a></nav>'); // create the close navigation 
		
	$("nav.close a").click(function() { // close create an account or request new password
		$("#block-formblock-user_register,#block-formblock-user_password_request").hide();
		return false;
	});
	
};