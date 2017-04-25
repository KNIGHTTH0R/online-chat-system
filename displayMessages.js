$(setInterval(function(){
	$('.main').load('loadMessages.php');
	$("#scroll").scrollTop($("#scroll")[0]);
},600));