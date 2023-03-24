<!DOCTYPE html>
<?php 
require_once "../adm/conecta.php";
require_once "../adm/class.php";
require_once "../adm/function.php";
$banners = listaBannerHome($soller); 
$col_imgs = listaColecaoImgHomeES($soller);?>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Fabricação própria e não testado em animais (cruelty free). Linhas para redução de volumes, tratamentos, finalizadores, colocação e descoloração.">
<style type="text/css">@-ms-viewport{width: device-width;}</style>
<title>Cosméticos para cabelos S'ollér Brasil - Sua beleza ganhou mais força</title>
<link rel="stylesheet" href="../css/layers.min.css" media="screen">
<link rel="stylesheet" href="../css/font-awesome.min.css" media="screen"> 
<link rel="stylesheet" href="../style.css" media="screen">
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
<meta itemprop="name" content="S'ollér Brasil - Cosméticos para Cabelos">
<meta itemprop="url" content="https://www.sollerbrasil.com/"/>
<meta itemprop="image" content="img/soller_shared.jpg" >
<meta itemprop="description" content="A S’ollér Brasil produz suas coleções de cosméticos para sempre oferecer produtos diferenciados. Linhas para redução de volumes, tratamentos, finalizadores, colocação e descoloração.">
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
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
</head>
<body class="page">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZ3HQQ6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php require_once "header.php" ?>
<main role="main">
	<div id="intro-wrap">
		<div id="intro" class="preload" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fade">	
			<?php foreach ($banners as $banner) { ?>	
			<div class="intro-item">
						<!-- style="background-image:url(../adm/arquivos/<?=$banner->arquivo;?>);" -->
                 <!-- 	<div class="intro-mockup-wrapper">		
					<div class="caption-mockup caption-right column six last-special">
						<a class="button white transparent" href="#">Know more</a>
					</div>					
				</div> -->

				<picture>
					<source media="(min-width:768px)" srcset="../adm/arquivos/<?=$banner->arquivo;?>">
					<source media="(min-width:320px)" srcset="../adm/arquivos/<?=$banner->arquivo_mobile;?>">
					<img src="../adm/arquivos/<?=$banner->arquivo;?>" alt="S'ollér Brasil" style="width:auto;">
				</picture> 
			</div>
			<?php } ?>		
		</div>
	</div>
	<div id="main">
		<section class="row section text-light fundo-black">
			<div class="row-content buffer even clear-after"  style="padding-top:4%;">
				<div class="slogan animation" style="width:70%;" >
					<h2>SU BELEZA HA GANADO MAS FUERZA</h2>	
					<p>S’ollér Brasil és una empresa multinacional brasileña presente en más de 40 países y con distribuidores por todo el territorio nacional</p>
				</div><!-- slogan -->				
			</div>
		</section>
		<section class="row section soller" style="padding-top:0;">
			<div class="row-content buffer even clear-after" style="padding-top:0;">
				<div class="section-title"><h2>A S'ollér</h2></div>
				<p class="centertxt">A través de nuestra increíble red de socios S'ollér, logramos alcanzar profesionales, <br>consumidores y llevar nuestras colecciones a todo el mundo</p>
				<div class="row" style="text-align:center;">
        			<div class="column four" style="text-align:center;margin-left:4%;">
            			<img src="../img/13-anos.svg" height="70">
            			<div class="alinha-soller">
            				<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">20 años en el mercado<br> de cosméticos</h4>
            			</div> 
        			</div>
    				<div class="column three" style="text-align:center;">
      					<img src="../img/paises-alcancados.svg" height="70">
      					<div class="alinha-soller">
          					<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">países alcanzados<br> hasta 2017</h4>
          				</div>
        			</div>
	                <div class="column four" style="text-align:center;">
	                  	<img src="../img/icon-cruelty-free.svg" height="70">
	                  	<div class="alinha-soller">
	                  		<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">X no testeamos en<br>animales</h4>
	                  	</div>
	                </div>
    			</div>
			</div>	
		</section>

		<section class="row section">
			<div class="owl-carousel">
				<?php foreach ($col_imgs as $col_img) { ?>
					<?php if ($col_img->arquivo_home != '')  {?>
						<div><a href="colecoes.php?id=<?=$col_img->link?>"><img src="../adm/arquivos/<?=$col_img->arquivo_home;?>" alt="<?=$col_img->nome;?>" class="sombra"></a></div>	
					<?php } ?>
				<?php } ?>
			</div>
		</section>	

		<section class="row section section-volume">
			<div class="row-content buffer even clear-after">	
				<div class="column six">
					<h2>Reducción de Volumen</h2>
					<p>Nuestros reductores de volume realinean los cabellos sin dañarlos, promoviendo hidratación intensa. Cada colección tiene activos que mejor si adecuan a cada tipo de cabelo, tratando los hilos de la manera correcta.</p>
					<a class="button transparent aqua" href="colecoes.php?id=18">Coleccíon Completa</a>
				</div>
				<div class="side-mockup right-mockup animation">
						<figure>
							<div><img src="../img/colecao-agi-max.png" alt="Volume Reduction" class="sombra"></div>
						</figure>
				</div>
			</div>	
		</section>	

		<section class="row section section-volume">
			<div class="row-content buffer even clear-after">	
				<div class="column six push-six last-special">
					<h2>Tratamientos</h2>
					<p>Nuestros tratamientos fueron desarrollados para rescatar los cabellos de los daños sufridos a lo largo del día. Nuestras colecciones son enfocadas en los diferentes niveles de daños con la máxima eficiencia para la solución del problema. </p>
					<a class="button transparent aqua" href="colecoes.php?id=21">Coleccíon Completa</a>
				</div>							
				<div class="side-mockup left-mockup animation">
						<figure>
							<div><img src="../img/colecao-treat-system.png" alt="Treatments" class="sombra"></div>
						</figure>
				</div>					
			</div>	
		</section>					

		<section class="row section section-finishing">
			<div class="row-content buffer even clear-after">	
				<div class="column six">
					<h2>Finalizadores</h2>
					<p>Nuestra colleción de finalizadores és perfecta para soltar su creatividad y mantener su peinado por el tiempo que deseas. Además de modelar, los productos contienen activos naturales que tratan su cabello durante el uso.</p>
					<a class="button transparent aqua" href="colecoes.php?id=24">Coleccíon Completa</a>
				</div>
				<div class="side-mockup right-mockup animation">
					<figure>
						<div><img src="../img/colecao-australian.png" alt="Finishing" class="sombra" width="90%"></div>
					</figure>
				</div>
			</div>	
		</section>	

		<section class="row section">
			<div class="row-content buffer even clear-after">	
				<div class="column six push-six last-special">
					<h2>Coloración & Decoloración</h2>
					<p>La colección <strong>Radiance Plus</strong> és considerada una de las más completes líneas de coloración y decoloración disponibles en el mercado. Fue desarrollada especialmente para colorir y descolorir sin dañar los hilos, tratando y proporcionando brillo y una mayor durabilidad de la color. </p>
					<a class="button transparent aqua" href="colecoes.php?id=27">Coleccíon Completa</a>
				</div>							
				<div class="side-mockup left-mockup animation">
					<figure>
						<div><img src="../img/colecao-radiance-plus.png" alt="Casting & Bleaching" class="sombra"></div>
					</figure>
				</div>					
			</div>	
		</section>

		<section class="row section">
		</section>

		<section class="row section call-to-action">
			<div class="row-content buffer even animation">
				<p>¿Quieres ser nuestra representante?</p>
				<a class="button red" href="reseller.php">Contacta con nosotras</a>
			</div>
		</section>				
	</div>
	<?php require "alerta.php";?>
</main><!-- main -->
<?php require_once "footer.php" ?>
<style type="text/css">
.swal2-title {
font-size: 1.5em;
}
</style>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="../js/owl.carousel.min.js"></script>	
<script src="../js/plugins.js"></script>
<script src="../js/beetle.js"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
loop:true,
margin:10,
nav:true,
items:4,
dots:true,
autoPlay:true,
autoPlaySpeed:1000,
autoPlayTimeout:2000,
responsiveClass:true,
responsive:{
0:{
items:1,
nav:true
},
600:{
items:3,
nav:false
},
1000:{
items:5,
nav:true,
loop:false
}
}
})
</script>
</body>
</html>