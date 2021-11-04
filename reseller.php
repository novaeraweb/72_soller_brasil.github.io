<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Reseller | S'ollér Brasil</title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css" media="screen">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">			
	</head>
	<body class="page">
	<?php require_once "header.php" ?>
		<main role="main">
			<div class="banner-reseller" style="color:white; text-align: center;padding-top:4%;">
			<div class="slogan animation" style="width:70%;font-size: 0.8em;" >
				<h2 style="color:white;">Be representative</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra Aenean molestie nisi<br>vel vestibulum scelerisque. Duis quis placerat diam.Nunc fermentum porttitor porttitor. <br>In maximus orci lobortis lectus pellentesque aliquam. </p>
				</div>
			</div><!-- intro-wrap -->

			<div id="main">

				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="section-title"><h3>Want to be our representative?</h3></div>	
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra quam quis justo euismod, vitae fringilla magna rhoncus. Aenean molestie nisi vel vestibulum scelerisque. Duis quis placerat diam. Nunc fermentum porttitor porttitor. In maximus orci lobortis lectus pellentesque aliquam. Nunc ut nisi eu</p>
						<div class="column nine">
							<form id="contact-form" class="contact-section" method="post" action="">
								<span class="pre-input"><i class="icon icon-user"></i></span>
								<input class="name plain buffer" type="text" name="name" placeholder="Full name">
								<span class="pre-input"><i class="icon icon-email"></i></span>
								<input class="email plain buffer" type="email" name="email" placeholder="Email address">
								<span class="pre-input"><i class="icon icon-smartphone"></i></span>
								<input class="email plain buffer" type="text" name="cel" placeholder="Cell phone">
								<span class="pre-input"><i class="icon "></i></span>
								<input class="email plain buffer" type="text" name="cel" placeholder="Country for representation">
								<textarea class="plain buffer" name="message" placeholder="Message"></textarea>
								<input id="send" class="plain button red" type="button" value="Send a Message">
							</form>	
							<div id="success"></div>
						</div>
						<div class="column three last">
							<div class="widget">
								<h4>Location</h4>
								<p>R. Dr. Napoleão Laureano, 707 <br> Vila Antartica, 18608-590<br> Botucatu/SP | Brasil</p>
							</div>
							<div class="widget">
								<h4>Social Media</h4>
								<ul class="inline meta-social">
									<li><a href="https://www.instagram.com/sollerinternational/" class="instagram-share border-box"><i class="fa fa-instagram fa-lg"></i></a></li>
									<li><a href="https://web.facebook.com/sollerinternational" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/company/s'oll%C3%A9rbrasil/" class="linkedin-share border-box"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCVQPXq5vYtCDXcKTr71pDZg" class="youtube-share border-box"><i class="fa fa-youtube fa-lg"></i></a></li>
								</ul>
							</div>								
						</div>
					</div>
				</section>

			</div><!-- id-main -->
		</main><!-- main -->

<?php require_once "footer.php" ?>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
		<script>
		$(document).ready(function(){
			$('#send').click(function(){
				$(this).val('Sending ...');
				$('#success p').remove();
				$.post('contact/contact.php', $('#contact-form').serialize(), function(response) {
					$('#success').html(response);
					//$('#success').hide('slow');
					$('#send').val('Send a Message');
				});
				return false;
			});
		});
		</script>		
	</body>
</html>