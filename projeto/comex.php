<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Comex Internacional</title>
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

		<div class="banner-comex" style="color:white; text-align: center;padding-top:2.5%;">
			<div class="slogan animation" style="width:70%;font-size: 0.8em;" >
				<h2 style="color:white;">S'ollér Internacional</h2>
				<p>In order to bring the quality of S'ollér Brazil products to every corner of the world, we dream higher<br>and start our international opening in 2008, with partners who believe<br>in the brand and gain space in other continents.</p>
      </div>
			</div><!-- intro-wrap -->

			<div id="main">
							
				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="column" style="text-align:justify;">
							<h4>ETHICS AND VALUES</h4>
							<p>Today, S'ollér Brasil products are present in more than 40 countries. We export 200 tons of beauty per year to various continents. We work with import of raw materials and we have qualified professionals for all steps necessary for these transactions.</p>

							<p>With great determination and determination, International Trade only grows.</p>
							<img src="img/mapa-mundi-soller.jpeg" style="margin:0 auto">
							<p><strong>Meet some of our Distributors</strong></p>
							<div class="column six">
								<ul>
									<li>Australia</li>
									<li>Belgium</li>
									<li>Canada</li>
									<li>Caribe</li>
									<li>Central America</li>
									<li>Costa Rica</li>
									<li>Colombia</li>
									<li>Iran</li>
									<li>Iraq</li>
									<li>Italy</li>
									<li>Marroco</li>
								</ul>
							</div>
							<div class="column third">
								<ul>
									<li>Mexico</li>
									<li>Mongolia</li>
									<li>Panama</li>
									<li>Paraguay</li>
									<li>Portugal</li>
									<li>Russia</li>
									<li>Spain</li>
									<li>Tunisia</li>
									<li>USA</li>
									<li>United Arab Emirates</li>
									<li>Uruguay</li>
								</ul>
							</div>
						</div><!-- timeline-label -->		
					</div>	
				</section>							
				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="section-title"><h3>Want to be our representative?</h3></div>	
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra quam quis justo euismod, vitae fringilla magna rhoncus.</p>
						<div class="column nine">
						<form id="contact-form" class="contact-section" method="post" action="phpmailer/mailer.php" onsubmit="return validaCaptcha()">
								<span class="pre-input"><i class="icon icon-user"></i></span>
								<input class="name plain buffer" type="text" name="nome" placeholder="Full name">
								<span class="pre-input"><i class="icon icon-email"></i></span>
								<input class="email plain buffer" type="email" name="email" placeholder="Email address">
								<textarea class="plain buffer" name="message" placeholder="Message"></textarea>
								<div class="g-recaptcha" data-sitekey="6LfmOUUdAAAAAHlg5AkSqbo_d3qw7c6M7_ujem88"></div>
								<button id="send" class="plain button red">Send a Message</button>
								
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
									<li><a href="https://www.instagram.com/sollerinternational/" class="instagram-share border-box" target="_blank" rel="noopener" rel="noreferrer"><i class="fa fa-instagram fa-lg"></i></a></li>
									<li><a href="https://web.facebook.com/sollerinternational" class="facebook-share border-box" target="_blank" rel="noopener" rel="noreferrer"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="https://www.linkedin.com/company/s'oll%C3%A9rbrasil/" class="linkedin-share border-box" target="_blank" rel="noopener" rel="noreferrer"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCVQPXq5vYtCDXcKTr71pDZg" class="youtube-share border-box" target="_blank" rel="noopener" rel="noreferrer"><i class="fa fa-youtube fa-lg"></i></a></li>
								</ul>
							</div>								
						</div>
					</div>
				</section>
			</div><!-- id-main -->
		</main><!-- main -->
<?php require_once "footer.php" ?>
<script src="https://code.jquery.com/jquery.js"></script>	
<script src="js/plugins.js"></script>
<script src="js/beetle.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>
		<script type="text/javascript">
			function validaCaptcha() {
			if(document.querySelector('#g-recaptcha-response').value == '') {
				swal('Valide o reCaptcha!', 'Obrigatório para o envio da mensagem', 'error');return false;
			}
		}
		</script>
</body>
</html>