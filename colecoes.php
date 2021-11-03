<!DOCTYPE html>
<?php
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";

$categoria_get = $_GET['id'];

$query_categorias = "SELECT * FROM categoria WHERE idcategoria = '$categoria_get'";
$resultado_categorias = mysqli_query($soller, $query_categorias);
$result = mysqli_fetch_assoc($resultado_categorias);


$colecoes = listaColecaoFrontEn($soller, $categoria_get);

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Fabricação própria e não testado em animais (cruelty free). Linhas para redução de volumes, tratamentos, finalizadores, colocação e descoloração.">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Cosméticos para cabelos S'ollér Brasil - Sua beleza ganhou mais força</title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css" media="screen">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
    <!-- Favico -->
    <link rel="shortcut icon" href="img/fav/favicon.ico" type="image/x-icon">
    <link rel="apple-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
    <link rel="apple-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Schema.org markup -->
    <meta itemprop="name" content="S'ollér Brasil - Cosméticos para Cabelos">
    <meta itemprop="url" content="https://www.sollerbrasil.com/"/>
    <meta itemprop="image" content="img/soller_shared.jpg" >
    <meta itemprop="description" content="A S’ollér Brasil produz suas coleções de cosméticos para sempre oferecer produtos diferenciados. Linhas para redução de volumes, tratamentos, finalizadores, colocação e descoloração.">

    <!-- facebook -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="S'ollér Brasil - Cosméticos para Cabelos">
    <meta property="og:description" content="A S’ollér Brasil produz suas coleções de cosméticos para sempre oferecer produtos diferenciados. Linhas para redução de volumes, tratamentos, finalizadores, colocação e descoloração.">
    <meta property="og:site_name" content="S'ollér Brasil - Cosméticos para Cabelos">
    <meta property="og:url" content="https://www.sollerbrasil.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.sollerbrasil.com/img/soller_shared.jpg">
    <meta property="og:image:secure_url" content="https://www.sollerbrasil.com/img/soller_shared.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="2720">
    <meta property="og:image:height" content="960">
    <meta property="fb:app_id" content="819613408060975" />

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PZ3HQQ6');</script>
	<!-- End Google Tag Manager -->
	    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    		<script src="js/owl.carousel.min.js"></script>
	</head>
	<body class="page">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZ3HQQ6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php require_once "header.php" ?>
		<main role="main">
			<div id="intro-wrap"  style="height: 25em;">
				<div id="intro" class="preload" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fade">	
					<div class="intro-item" style="background-image:url(img/black-back.jpg);">
					<div class="section-title">
						<h2>Volume Reduction</h2>
						<p>OUR VOLUME REDUCTORS REALIGN HAIR WITHOUT DAMAGE THEM, PROVIDING INTENSE MOISTURIZING.<br>EACH COLLECTION HAVE ACTIVES WHICH FITS BETTER TO EACH KIND OF HAIR, PERFORMING THE CORRECT TREATMENT.</p>
					</div>	
				</div>					
			
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main">
				
				<section class="row section">
					<div class="row-content buffer even clear-after">
						<?=$result['descricao_longa'];?>
					</div>	
				</section>	


				<section class="row section section-volume bg" style="background: url(adm/arquivos/coleção-agi-max-plus.png) no-repeat;background-size: 100%;">
				</section>
				<div class="row colecao" style="text-align:center;padding-bottom:54%;">
					<h3>Professional Line</h3>
            		<div class="column four" style="text-align:center;width: 27.75%;margin-left:4%;">
                		<img src="img/produtos/agi-plus-1.png"  style="margin:0 auto">
						<h4>Step 1 | Shampoo Deep Cleasing</h4>
                		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Deep Cleansing Shampoo</strong> has a foaming action. deep cleasing hair without damaging is fiber.</p>
                		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>60ml – 2.02 fl oz</li>
							<li>500ml – 16.90 fl oz</li>
							<li>1000ml – 33.81 fl oz</li>
                		</ul>   
            		</div>
            		<div class="column four" style="text-align:center;width: 27.75%;">
              			<img src="img/produtos/agi-plus-2.png"  style="margin:0 auto">
						<h4>Step 2 | Reconstructive Butter</h4>
                  		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Reconstructive Butter</strong>, promotes deep nutrition and emollience, making hair more manageable, frizz free and qith as intense shine.</p>
                  		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>60ml – 2.02 fl oz</li>
							<li>500ml – 16.90 fl oz</li>
							<li>1000ml – 33.81 fl oz</li>
                		</ul>  
                	</div>
                	<div class="column four" style="text-align:center;width: 27.75%;">
                  		<img src="img/produtos/agi-plus-3.png"  style="margin:0 auto">
                  		<h4>Step 3 | Finish Mask</h4>
                 		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Finishing Mask</strong> instantly nourishes your hair, untangling and promoting fiber softness.</p>
                        <ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>55g – 1.94 oz</li>
							<li>460g – 16.23 oz</li>
							<li>920g – 32.45 oz</li>
                		</ul>  
                	</div>
                	<h3 style="padding:7% 0 2% 0">Line Maintenance</h3>
                 	<div class="column four" style="text-align:center;width: 27.75%;margin-left:4%;">
                		<img src="img/produtos/agi-max-shampoo-maintenance-250ml.png"  style="margin:0 auto">
						<h4>Shampoo Maintenance</h4>
                		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Maintenance Shampoo</strong> gently cleanses providing full emollience and volume control on frizzy hair.</p>
                		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>250ml – 2.02 fl oz</li>
                		</ul>   
            		</div>
            		<div class="column four" style="text-align:center;width: 27.75%;">
              			<img src="img/produtos/agi-max-conditioner-maintenance-240g.png"  style="margin:0 auto">
						<h4>Conditioner Maintenance</h4>
                  		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Reconstructive Butter</strong>, promotes deep nutrition and emollience, making hair more manageable, frizz free and qith as intense shine.</p>
                  		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>240g – 2.02 oz</li>
                		</ul>  
                	</div>
                	<div class="column four" style="text-align:center;width: 27.75%;">
                  		<img src="img/produtos/agi-max-hair-mask-maintenance-250g.png"  style="margin:0 auto">
                  		<h4>Hair Mask Maintenance</h4>
                 		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Finishing Mask</strong> instantly nourishes your hair, untangling and promoting fiber softness.</p>
                        <ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>250g – 1.94 oz</li>
                		</ul>  
                	</div>

     			</div>
				<section class="row section section-volume bg"style="background: url(adm/arquivos/coleção-agi-one.png) no-repeat;background-size: 100%;">
				</section>
				<div class="row colecao" style="text-align:center;">
					<h3>Professional Line</h3>
            		<div class="column four" style="text-align:center;width: 27.75%;margin-left:4%;">
                		<img src="img/produtos/agi-plus-1.png"  style="margin:0 auto">
						<h4>Step 1 | Shampoo Deep Cleasing</h4>
                		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Deep Cleansing Shampoo</strong> has a foaming action. deep cleasing hair without damaging is fiber.</p>
                		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>60ml – 2.02 fl oz</li>
							<li>500ml – 16.90 fl oz</li>
							<li>1000ml – 33.81 fl oz</li>
                		</ul>   
            		</div>
            		<div class="column four" style="text-align:center;width: 27.75%;">
              			<img src="img/produtos/agi-plus-2.png"  style="margin:0 auto">
						<h4>Step 2 | Reconstructive Butter</h4>
                  		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Reconstructive Butter</strong>, promotes deep nutrition and emollience, making hair more manageable, frizz free and qith as intense shine.</p>
                  		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>60ml – 2.02 fl oz</li>
							<li>500ml – 16.90 fl oz</li>
							<li>1000ml – 33.81 fl oz</li>
                		</ul>  
                	</div>
                	<div class="column four" style="text-align:center;width: 27.75%;">
                  		<img src="img/produtos/agi-plus-3.png"  style="margin:0 auto">
                  		<h4>Step 3 | Finish Mask</h4>
                 		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong>Agi Max Plus Finishing Mask</strong> instantly nourishes your hair, untangling and promoting fiber softness.</p>
                        <ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>55g – 1.94 oz</li>
							<li>460g – 16.23 oz</li>
							<li>920g – 32.45 oz</li>
                		</ul>  
                	</div>
                	<h3 style="padding:7% 0 2% 0">Line Maintenance</h3>
                 	<div class="column four" style="text-align:center;width: 27.75%;margin-left:4%;">
                		<img src="img/produtos/agi-one-shampoo-maintenance-500ml.png" width="150" style="margin:0 auto">
						<h4>Shampoo Maintenance</h4>
                		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7">Developed to increase the durability of the treatment and to keep your hair hydrated, reduces the volume and makes the hair softer and realigned much longer.</p>
                		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>500ml – 16.90 fl oz</li>
                		</ul>   
            		</div>
            		<div class="column four" style="text-align:center;width: 27.75%;">
              			<img src="img/produtos/agi-one-conditioning-maintenance-460g.png" width="150" style="margin:0 auto">
						<h4>Conditioner Maintenance</h4>
                  		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7">The combinated use with Shampoo Agi One Maintenance ensures that the treatment lasts much longer. Keeps your hair hydrated, controlling the volume and providing softness to your hair.</p>
                  		<ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>460g – 16.22 oz</li>
                		</ul>  
                	</div>
                	<div class="column four" style="text-align:center;width: 27.75%;">
                  		<img src="img/produtos/agi-one-thermo- control-maintenance-120ml.png" width="150" style="margin:0 auto">
                  		<h4>Thermo Control Maintenance</h4>
                 		<p class="mbr-content-title mbr-bold mbr-fonts-style display-7">Forms a film that seals the cuticles and shields your hair from damage caused by heat of the dryer and flat iron. Prolongs the smooth effect, decreases the volume, moisturizes and conditions the hair, restoring shine and softness lost for damage caused in chemical processes.</p>
                        <ul style="padding-left: 0;font-size: 0.8em;font-weight: bold;">
                			<li>120ml – 4.06 fl oz</li>
                		</ul>  
                	</div>

     			</div>
				<section class="row section section-volume bg"style="background: url(adm/arquivos/soller-brasil-296329079.png) no-repeat; background-size: 100%;">	
				</section>
				<section class="row section section-volume">
					<div class="row-content buffer even clear-after">	
						<div class="text-center">
							<h2>NOme</h2>
						
							<!-- <a class="button transparent aqua" href="#">Full Collection</a> -->
						</div>
					</div>	
				</section>
			

				
				
				<section class="row section call-to-action">
					<div class="row-content buffer even animation">
						<p>Have you fallen in love with Beetle?</p>
						<a class="button red" href="#">Buy it now!</a>
					</div>
				</section>				

			</div><!-- id-main -->
		</main><!-- main -->
		<?php require_once "footer.php" ?>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
	</body>
</html>