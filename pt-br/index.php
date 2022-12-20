<!DOCTYPE html>
<?php 
require_once "../adm/conecta.php";
require_once "../adm/class.php";
require_once "../adm/function.php";
$banners = listaBannerHome($soller);
$col_imgs = listaColecaoImgHome($soller); ?>
<html lang="pt">
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
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

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
								<!--style="background-image:url(../adm/arquivos/<?=$banner->arquivo;?>);"  -->
                         <!-- 	<div class="intro-mockup-wrapper">		
							<div class="caption-mockup caption-right column six last-special">
								<a class="button white transparent" href="#">Know more</a>
							</div>					
						</div> -->
						<picture>
							<source media="(min-width:768px)" srcset="../adm/arquivos/<?=$banner->arquivo;?>">
							<source media="(min-width:320px)" srcset="../adm/arquivos/<?=$banner->arquivo_mobile;?>">
							<img src="../adm/arquivos/<?=$banner->arquivo;?>" alt="Flowers" style="width:auto;">
						</picture> 
					</div>
					<?php } ?>					
				</div><!-- intro -->
			</div><!-- intro-wrap -->
			<div id="main">
				<section class="row section text-light fundo-black">
				<div class="row-content buffer even clear-after"  style="padding-top:4%;">
						<div class="slogan animation" style="width:70%;" >
							<h2>SUA BELEZA GANHOU MAIS FORÇA</h2>	
							<p>A S'ollér Brasil é uma empresa de cosméticos multinacional brasileira presente em mais de 40 países e com distribuidores em todo o território Nacional.</p>
						</div><!-- slogan -->				
					</div>
				</section>	

				<section class="row section">
					<div class="row-content buffer even clear-after">
						<div class="section-title"><h2>A S'ollér</h2></div>
						<p class="centertxt">Por meio da nossa incrível rede de parceiros S’ollér, conseguimos alcançar profissionais, <br>consumidores e levar nossas coleções para o mundo todo</p>
						

						<div class="row" style="text-align:center;">
                <div class="column four" style="text-align:center;margin-left:4%;">
                    <img src="../img/13-anos.svg" height="100" style="margin:0 auto;">
										<h3><strong>20</strong></h3>
                    <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">anos no mercado<br> de cosméticos</h4>    
                </div>
            		<div class="column three" style="text-align:center;">
              		<img src="../img/paises-alcancados.svg" height="100" style="margin:0 auto">
									<h3><strong>48</strong></h3>
                  <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">países alcançados<br> até 2017</h4>
                </div>
                <div class="column four" style="text-align:center;">
                  <img src="../img/img/icon-cruelty-free.svg" height="100" style="margin:0 auto">
                  <h3><strong>X</strong></h3>
                  <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">não testamos em<br>animais</h4>
                </div>
            </div>
					</div>	
				</section>	
				<section class="row section">


				<div class="owl-carousel">
					<?php foreach ($col_imgs as $col_img) { ?>
						<?php if ($col_img->arquivo_home != '')  {?>
							<div><a href="#"><img src="../adm/arquivos/<?=$col_img->arquivo_home;?>" alt="<?=$col_img->nome;?>" class="sombra"></a></div>	
						<?php } ?>
					<?php } ?>
				</div>

				</section>	

				<section class="row section section-volume">
					<div class="row-content buffer even clear-after">	
						<div class="column six">
							<h2>Redução de Volume</h2>
							<p>Nossos redutores de volume realinham os fios, sem danificar os cabelos, promovendo hidratação intensa. Cada coleção possui ativos que melhor se adequam a cada tipo de cabelo, tratando os fios da maneira correta.</p>
							<a class="button transparent aqua" href="colecoes.php?id=17">Coleção Completa</a>
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
							<h2>Tratamentos</h2>
							<p>Nossos tratamentos foram desenvolvidos para resgatar os cabelos dos danos que sofrem ao longo do dia. Nossas coleções são focadas em níveis de danos diferentes, com a máxima eficiência para a resolução do problema. </p>
							<a class="button transparent aqua" href="colecoes.php?id=20">Coleção Completa</a>
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
							<p>Nossa coleção de finalizadores é perfeita para você soltar a sua criatividade e manter seu penteado pelo tempo que desejar. Além de modeladores, os produtos contêm ativos naturais que tratam seu cabelo durante o uso.</p>
							<a class="button transparent aqua" href="colecoes.php?id=23">Coleção Completa</a>
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
							<h2>Coloração & Descoloração</h2>
							<p>A coleção <strong>Radiance Plus</strong> é considerada uma das linhas de Coloração e Descoloração mais completas existentes no mercado. Foi desenvolvida especialmente para colorir e descolorir sem danificar os fios, tratando e proporcionando brilho e uma maior durabilidade da cor. </p>
							<a class="button transparent aqua" href="colecoes.php?id=26">Coleção Completa</a>
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
						<p>Quer se tornar nosso representante?</p>
						<a class="button red" href="reseller.php">Entre em contato</a>
					</div>
				</section>				

			</div><!-- id-main -->
			<?php require "alerta.php";?>
		</main><!-- main -->
		<?php require_once "footer.php" ?>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
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