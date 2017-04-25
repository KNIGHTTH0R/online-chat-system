$(document).ready(function(){
	
	$("#SendMessageButton").click(function(){
		
		initialize();
		
		
	});
	$("newMessageContent").keypress(function(e){
			if(e.which==13)
			{
					initialize();
					
			}
			e.preventDefault();
			
	});


	function initialize()
	{

		var username = $("#loggedUser").html();
		var message = $("#newMessageContent").val();
		if(message == "" || message == "Enter your message")
		{
			return false;
		}

		$.ajax({
			type: "POST",
			url: "send_messages.php",
			data : {username:username,newMessage:message},
			success:function()
			{

				$("#newMessageContent").val("");
			}
			});
	}


});