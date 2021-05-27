<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Chat</title>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->


</head>
<body>

<div id="frame">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="../images/ikura.jpg" class="online" alt="" />
				<p>Lila Ikura</p>
				<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
				<div id="status-options">
					<ul>
						<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
						<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
						<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
						<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
					</ul>
				</div>
				<div id="expanded">
					<label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mikeross" />
					<label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="ross81" />
					<label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mike.ross" />
				</div>
			</div>
		</div>
		<div id="search">
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" placeholder="Search contacts..." />
		</div>
		<div id="contacts">
			<ul>
				<li class="contact active">
					<div class="wrap">
						<span class="contact-status busy"></span>
						<img src="../images/ikura.jpg" alt="" />
						<div class="meta">
							<p class="name">Lila Ikura</p>
							<p class="preview">Well, thats line from GTA V right ?</p>
						</div>
					</div>
				</li>
				<li class="contact">
					<div class="wrap">
						<span class="contact-status away"></span>
						<img src="../images/default.png" alt="" />
						<div class="meta">
							<p class="name">Rachel Zane</p>
							<p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
						</div>
					</div>
				</li>
				
				
			</ul>
		</div>
		
	</div>
	<div class="content">
		<div class="contact-profile">
			<img src="../images/ikura.jpg" alt="" />
			<p>Lila Ikura</p>
			<div class="social-media">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				 <i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
		</div>
		<div class="messages">
			<ul>
				<li class="sent">
					<img src="../images/ikura.jpg" alt="" />
					<p>You forget a thousand things every day, make sure this is one of them</p>
				</li>
				<li class="replies">
					<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
					<p>Well, thats line from GTA V right ?</p>
				</li>
				
		</div>
		<div class="message-input">
			<div class="wrap">
			<input type="text" placeholder="Write your message..." />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>


</body>
</html>
