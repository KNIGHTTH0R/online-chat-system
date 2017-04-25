
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="jQuery.js"></script>
	<title>Chat room</title>
</head>
<body>
<div class="container-fluid col-xs-12 col-sm-12 col-md-12">
		<h1 style=" text-align:center;border: 1px solid #fff;width:200px;background-color:lightgreen;">	<a  style="cursor:pointer; text-decoration:none; color:grey;" href="chat.php">ChaT r00m</a></h1>		
		
	</div>
		<div class="time">
		<?php
		echo date("l dS \of F Y h:i:s A");
		?>
		</div>
	</div>
 	
	<div class="container">
	 <div class="row">
	  <div class="col-xs-12 col-sm-12 col-ls-12 col-md-12">
		<div class="chatbox">
			<div class="user">
				<form action=""  name="signIn" onsubmit="return false" >
					<span class="error">Invalid  username</span>
						<input type="text" size="15px" placeholder="Enter username" id="username" name="username">
						<input type="button" id="signIn" value="Sign In">
				</form>
			</div>
			<div class="main scroll">
					
			</div>
			<div class="messageBox">
					<form action=""   name="messageBoxSignInForm" id="messageBoxSignInForm" onsubmit="return false">
						<input type="submit" id="messageBoxSignIn" value="Sign in to chat">
					</form>
		
					<form name ="newMessage" id ="newMessageBox" class="newMessage"  action="" onsubmit="return false">
						<div class="left">
						
						<textarea  id="newMessageContent" name="newMessage"  placeholder="Enter your message"></textarea>
				
						</div>
						<div class="right">
							<input type="button"  id="SendMessageButton" value="Send">
						</div>
					</form>
			</div>
		</div>
	  </div>
	 </div>
	</div>
  </div>
  <script src="signInOut.js"></script>
  <script src="send_messages.js"></script>
  <script src="displayMessages.js"></script>
  </body>
		
</html>