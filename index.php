<!DOCTYPE html>
<?php 
require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";
$banners = listaBannerHome($soller);
$col_imgs = listaColecaoImgHomeUS($soller);
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="S’ollér Brasil produces its cosmetics collections to always offer differentiated products. Lines for volume reduction, treatments, finishers, placement and discoloration. ">
<style type="text/css">@-ms-viewport{width: device-width;}</style>
<title>S'ollér Brasil - Hair Cosmetics</title>
<link rel="stylesheet" href="css/layers.min.css" media="screen">
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
<link rel="stylesheet" href="style.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="theme-color" content="#ffffff">
<meta itemprop="name" content="S'ollér Brasil - Hair Cosmetics">
<meta itemprop="url" content="https://www.sollerbrasil.com/index.php"/>
<meta itemprop="image" content="img/soller_shared.jpg" >
<meta itemprop="description" content="S’ollér Brasil produces its cosmetics collections to always offer differentiated products. Lines for volume reduction, treatments, finishers, placement and discoloration. ">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="S'ollér Brasil - Hair Cosmetics">
<meta property="og:description" content="S’ollér Brasil produces its cosmetics collections to always offer differentiated products. Lines for volume reduction, treatments, finishers, placement and discoloration. ">
<meta property="og:site_name" content="S'ollér Brasil - Hair Cosmetics">
<meta property="og:url" content="https://www.sollerbrasil.com/index.php">
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
<style type="text/css">
#par {position: relative;}
</style>
</head>
<body class="page">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZ3HQQ6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php require_once "header.php" ?>
<main role="main">
	<div id="intro-wrap">
		<div id="intro" class="preload" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fade">
			<?php foreach ($banners as $banner) { ?>	
			<div class="intro-item">		
				<!-- style="background-image:url(adm/arquivos/<?=$banner->arquivo;?>);" -->
                 <!-- 	<div class="intro-mockup-wrapper">		
					<div class="caption-mockup caption-right column six last-special">
						<a class="button white transparent" href="#">Know more</a>
					</div>					
				</div> -->
				<picture>
					<source media="(min-width:768px)" srcset="adm/arquivos/<?=$banner->arquivo;?>">
					<source media="(min-width:320px)" srcset="adm/arquivos/<?=$banner->arquivo_mobile;?>">
					<img src="adm/arquivos/<?=$banner->arquivo;?>" alt="Flowers" style="width:auto;">
				</picture> 
			</div>
			<?php } ?>					
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main" class="parallax">
		<section class="row section fundo-black" >
			<div class="row-content buffer even clear-after"  style="padding-top:10%;padding-bottom:15%;">
				<div class="slogan animation" style="width:70%;" >
					<h2>YOUR BEAUTY GOT POWER</h2>	
					<p>S’ollér Brasil is a brazilian overseas cosmetic company present in over 40 countries and with distributors throughout the national territory.</p>
				</div><!-- slogan -->				
			</div>
		</section>	
		<div id="par">
			<section class="row section soller" style="padding-top:0;">
				<div class="row-content buffer even clear-after" style="padding-top:0;">
					<div class="section-title"><h2>The S'ollér</h2></div>
					<p class="centertxt">Through our incredible network of S'ollér partners, we have been able to reach professionals,<br>consumers and take our collections to the whole world</p>
					<div class="row" style="text-align:center;">
	    				<div class="column four" style="text-align:center;margin-left:4%;">
	        				<img src="img/13-anos.svg" height="70">
	        				<div class="alinha-soller">
	        					<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">20 years in the <br>cosmetics market</h4>
	        				</div>   
	    				</div>
	    				<div class="column three" style="text-align:center;">
	      					<div style="display: inline-block;">
	      						<img src="img/paises-alcancados.svg" height="70" >
	      					</div>
	      					<div class="alinha-soller">
	      						<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7"> 48 countries reached <br>by 2017</h4>
	      					</div>
	          				
	        			</div>
			            <div class="column four" style="text-align:center;">
			              <img src="img/icon-cruelty-free.svg"  height="70">
			              <div class="alinha-soller">
			              	<h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7"> X not test on<br> animals</h4>
			              </div>
			            </div>
					</div>
				</div>
			</section>

			<section class="row section">
				<div class="owl-carousel">
					<?php foreach ($col_imgs as $col_img) { ?>
						<?php if ($col_img->arquivo_home != '')  {?>


							<?php if ($col_img->link == '25#RadiancePlus')  {?>


							<div>
								<a href="colecoes-h.php?id=<?=$col_img->link?>"><img src="adm/arquivos/<?=$col_img->arquivo_home;?>" alt="<?=$col_img->nome;?>" class="sombra"></a>
							</div>	


							<?php } else { ?>



							<div>
								<a href="colecoes.php?id=<?=$col_img->link?>"><img src="adm/arquivos/<?=$col_img->arquivo_home;?>" alt="<?=$col_img->nome;?>" class="sombra"></a>
							</div>	



							<?php } ?>



						<?php } ?>
					<?php } ?>
				</div>
			</section>	

			<section class="row section section-volume">
				<div class="row-content buffer even clear-after">	
					<div class="column six">
						<h2>Volume Reduction</h2>
						<p>Our volume reductors realign hair without damage them, providing intense moisturizing. Each collection have actives which fits better to each kind of hair, performing the correct treatment.</p>
						<a class="button transparent aqua" href="colecoes.php?id=16">Full Collection</a>
					</div>
					<div class="side-mockup right-mockup animation">
							<figure>
								<div><img src="img/colecao-agi-max.png" alt="Volume Reduction" class="sombra"></div>
							</figure>
					</div>
				</div>	
			</section>	

			<section class="row section section-volume" style="padding-bottom:5%;">
				<div class="row-content buffer even clear-after">	
					<div class="column six push-six last-special">
						<h2>Treatments</h2>
						<p>Our treatments were developed to rescue hair from all day long damages. Our collections are focused on different damage levels at maximum efficiency to solve the problem.</p>
						<a class="button transparent aqua" href="colecoes.php?id=19">Full Collection</a>
					</div>							
					<div class="side-mockup left-mockup animation">
						<figure>
							<div><img src="img/colecao-treat-system.png" alt="Treatments" class="sombra"></div>
						</figure>
					</div>	
				</div>	
			</section>					

			<section class="row section section-finishing">
				<div class="row-content buffer even clear-after">	
					<div class="column six">
						<h2>Finishing</h2>
						<p>Our finishing collection is perfect for you set your creativity free and keep your hairstyle as long as you wish. Besides modelling, the products contain natural actives which treat your hair while using.</p>
						<a class="button transparent aqua" href="colecoes.php?id=22">Full Collection</a>
					</div>
					<div class="side-mockup right-mockup animation">
						<figure>
							<div><img src="img/colecao-australian.png" alt="Finishing" class="sombra" width="90%"></div>
						</figure>
					</div>
				</div>	
			</section>	

			<section class="row section">
				<div class="row-content buffer even clear-after">	
					<div class="column six push-six last-special">
						<h2>Casting & Bleaching</h2>
						<p><strong>Radiance Plus</strong> collection is considered one of the most complete casting and bleaching collections in the market. It was specially developed to color and bleach without damage hair, treating and providing shine and long last color stand.</p>
						<a class="button transparent aqua" href="colecoes.php?id=25">Full Collection</a>
					</div>							
					<div class="side-mockup left-mockup animation">
						<figure>
							<div><img src="img/colecao-radiance-plus.png" alt="Casting & Bleaching" class="sombra"></div>
						</figure>
					</div>					
				</div>	
			</section>

			<section class="row section call-to-action">
				<div class="row-content buffer even animation">
					<p>WANT TO BE OUR REPRESENTATIVE?</p>
					<a class="button red" href="reseller.php">Contact us</a>
				</div>
			</section>					
		</div>
	
	</div><!-- id-main -->
</main><!-- main -->
<?php require_once "footer.php" ?>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>	
<script src="js/plugins.js"></script>
<script src="js/beetle.js"></script>
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
<script type="text/javascript">
window.addEventListener("scroll", () => {
var value = window.scrollY;
var par = document.querySelector("#par");
par.style.top = value * -0.25 + "px";
});
</script>
</body>
</html>