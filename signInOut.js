$(document).ready(function(){
	$(".newMessage").hide();

	$("#messageBoxSignIn").click(function(){
		$("#username").focus();//when SignIn is clicked this username input field will be hightlighted
		window.alert("Sign in with a username");

	});

});
$(document).ready(function(){
	$(".error").hide();
	$("#username").keyup(function(){
		
	$("#signIn").click(function(){
		var username = $("#username").val();
		if(username=="" || username=="Enter username"){
		$(".error").show();
		return false;
	}
		$(".error").hide();
		$("#messageBoxSignIn").hide();
		$("#newMessageBox").show();

		$.ajax({
			type:  "POST",
			url:  "signInOut.php",
			data: {username:username},
			success:function()
			{
				$(".user").html('<span id="Welcomespan">Welcome <span id="loggedUser">'+ username+'</span></span><a id="Signout" onclick="window.location.reload()">Sign out</a>');
			}

		});
	
	});

	});
});