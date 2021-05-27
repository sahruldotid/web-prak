$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
        $(this).addClass('active');
        document.getElementById("auth-label").innerHTML = "LOGIN"
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
        $(this).addClass('active');
        document.getElementById("auth-label").innerHTML = "SIGNUP"
		e.preventDefault();
	});

});
