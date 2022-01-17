<!DOCTYPE html>
<?php
require_once "../adm/conecta.php";
require_once "../adm/class.php";
require_once "../adm/function.php";

$categoria_get = $_GET['id'];

$query_categorias = "SELECT c.*, i.ididioma FROM categoria c LEFT JOIN idioma i ON (i.ididioma = c.ididioma_cat) WHERE c.idcategoria = '$categoria_get' AND c.ididioma_cat = '2'";
$resultado_categorias = mysqli_query($soller, $query_categorias);
$result = mysqli_fetch_assoc($resultado_categorias);


$colecoes = listaColecaoFrontPt($soller, $categoria_get);
$banners = listaBannerHome($soller);
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="S'ollér Brasil produce sus colecciones de cosméticos para ofrecer siempre productos diferenciados. Líneas para reducción de volumen, tratamientos, acabados, coloración y decoloración. ">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title><?=$result['nome'];?> | S'ollér Brasil</title>
		<link rel="stylesheet" href="../css/layers.min.css" media="screen">
		<link rel="stylesheet" href="../css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="../style.css" media="screen">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
    <!-- Favico -->
    <link rel="shortcut icon" href="../img/fav/favicon.ico" type="image/x-icon">
    <link rel="apple-icon" sizes="57x57" href="../img/fav/apple-icon-57x57.png">
    <link rel="apple-icon" sizes="72x72" href="../img/fav/apple-icon-72x72.png">
    <link rel="apple-icon" sizes="76x76" href="../img/fav/apple-icon-76x76.png">
    <link rel="apple-icon" sizes="114x114" href="../img/fav/apple-icon-114x114.png">
    <link rel="apple-icon" sizes="120x120" href="../img/fav/apple-icon-120x120.png">
    <link rel="apple-icon" sizes="144x144" href="../img/fav/apple-icon-144x144.png">
    <link rel="apple-icon" sizes="152x152" href="../img/fav/apple-icon-152x152.png">
    <link rel="apple-icon" sizes="180x180" href="../img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/fav/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Schema.org markup -->
    <meta itemprop="name" content="<?=$result['nome'];?> | S'ollér Brasil">
    <meta itemprop="url" content="https://www.sollerbrasil.com/es/colecoes.php?id=<?=$result['idcategoria'];?>"/>
    <meta itemprop="image" content="../img/soller_shared.jpg" >
    <meta itemprop="description" content="S'ollér Brasil produce sus colecciones de cosméticos para ofrecer siempre productos diferenciados. Líneas para reducción de volumen, tratamientos, acabados, coloración y decoloración. ">

    <!-- facebook -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="<?=$result['nome'];?> | S'ollér Brasil">
    <meta property="og:description" content="S'ollér Brasil produce sus colecciones de cosméticos para ofrecer siempre productos diferenciados. Líneas para reducción de volumen, tratamientos, acabados, coloración y decoloración. ">
    <meta property="og:site_name" content="<?=$result['nome'];?> | S'ollér Brasil">
    <meta property="og:url" content="https://www.sollerbrasil.com/es/colecoes.php?id=<?=$result['idcategoria'];?>">
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
    		<script src="../js/owl.carousel.min.js"></script>
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
					<!-- style="background-image:url(../img/black-back.jpg);" -->
					<div class="intro-item">
							<?php foreach ($banners as $banner) { ?>
								<picture>
									<source media="(max-width:640px)" srcset="../adm/arquivos/<?=$banner->arquivo_mobile;?>">
								</picture>
							<?php } ?>
							<div class="section-title">
								<h2><?=$result['nome'];?></h2>
								<div class="row-content buffer" style="padding-top: 0;">
								<?=mb_strtoupper($result['descricao_breve'], 'UTF-8');?>
							</div>
					</div>	
				</div>					
			
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main">
				
				<?php if (isset($result['descricao_longa'])) { ?>
				<section class="row section">
					<div class="row-content buffer even clear-after">
						<?=$result['descricao_longa'];?>
					</div>	
				</section>	
				<?php } ?>

				<?php foreach ($colecoes as $colecao) {?>	
				<?php $idcol = $colecao->idcolecao;?> 
				<section class="row section section-volume bg" id="<?=str_replace(' ', '', $colecao->nome);?>"
								 style="background: url(../adm/arquivos/<?=$colecao->arquivo;?>) no-repeat;
								 				background-size: 100%;"
				>
					
				</section>
				<section class="row section section-volume">
					<!-- <div class="row-content buffer even clear-after">	 -->
						<div class="text-center">
							<?=$colecao->descricao;?>
							<?php $id = $colecao->idcolecao;?>
							<?php 
			
$query_professional = "SELECT * FROM produto WHERE idcolecao_prod = '$id' AND idlinha_prod = '5' AND ativo = 'Sim' ";
$resultado_professional = mysqli_query($soller, $query_professional);
$result_professional = mysqli_fetch_assoc($resultado_professional);

							 ?>
							<?php if(isset($result_professional)) { ?>
						  	<h3>Professional Line</h3><br><br>
							<?php } ?>
							<?php // Carrega os produtos dinamicamente a partir das linhas (profissionais/manutenção)
										// A variável total verifica o nº de produtos de uma determinada coleção para decidir o tamanho da div
									$count = 1; $produtos = listaProdutoFrontPt($soller, $idcol); 
								  foreach ($produtos as $produto) {?>
										<?php if ($produto->idlinha_prod == '5'){?>
											<?php if ($GLOBALS['total'] == 3) {?>
												<div class="column third produto">
											<?php } else {?>
												<div class="column four produto">
											<?php } ?>
												<figure>
													<img src="../adm/arquivos/<?=$produto->arquivo;?>" alt="Produto <?=$produto->nome;?> | Coleção <?=$colecao->nome;?>" class="animation" style="margin:0 auto">
												</figure>
												<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong><?=$produto->nome;?></strong>, <?=$produto->descricao;?></p>
												<br>
												<div class="peso">
													<?php // Verifica se o produto possui uma entrada de peso ou diversas e produz o resultado adequado
													if ($produto->peso_unico == '') { ?>
														<ul>
															<?php if ($produto->peso_p_br || $produto->peso_p_en){?>
															<li><?=$produto->peso_p_br; echo "| "?>  <?=$produto->peso_p_en;?> </li>
															<?php }?>
															<?php if ($produto->peso_m_br || $produto->peso_m_en){?>
															<li><?=$produto->peso_m_br; echo "| "?>  <?=$produto->peso_m_en;?></li>
															<?php }?>
															<?php if ($produto->peso_g_br || $produto->peso_g_en){?>
															<li><?=$produto->peso_g_br; echo "| "?>  <?=$produto->peso_g_en;?></li>
															<?php }?>
														</ul>
													<?php } else {?>
														<ul>
															<li><?=$produto->peso_unico; echo "| " echo $produto->peso_unico_en; ?></li>
														</ul>
													<?php }?>
												</div>
											</div>
										<?php } else {?>
											<?php // Esse contador apenas permite a divisória com um hr e o título da linha de manutenção quando for == 1
												if ($count == 1) {?>
												<br>
												<div style="width: 90%; margin-left: 5%;">
													<hr>
												</div>
												<br>
												<h3>Linha Manutenção</h3>
												<br>
											<?php } $count++;?>
											<?php // Produz os resultados da linha manutenção quando existirem?>
											<div class="column third produto">
												<figure>
													<img src="../adm/arquivos/<?=$produto->arquivo;?>" alt="Produto <?=$produto->nome;?> | Coleção <?=$colecao->nome;?>" class="animation" style="margin:0 auto">
												</figure>
												<p class="mbr-content-title mbr-bold mbr-fonts-style display-7"><strong><?=$produto->nome;?></strong> <?=$produto->descricao;?></p>
												<br>
												<div class="peso">
													<?php if ($produto->peso_unico == '') { ?>
														<ul>
															<li><?=$produto->peso_p_br; echo "| "?> <?=$produto->peso_p_en;?> </li>
															<li><?=$produto->peso_m_br; echo "| "?> <?=$produto->peso_m_en;?></li>
															<li><?=$produto->peso_g_br; echo "| "?> <?=$produto->peso_g_en;?></li>
														</ul>
													<?php } else {?>
														<ul>
															<li><?=$produto->peso_unico;?></li>
														</ul>
													<?php }?>
												</div>
											</div>
										<?php }?>
								<?php }?>
						</div>
				</section>
			
				<?php } ?>
				
				<section class="row section call-to-action">
					<div class="row-content buffer even animation">
						<p>QUER SE TORNAR NOSSO REPRESENTANTE?</p>
						<a class="button red" href="contato.php">Entre em contato!</a>
					</div>
				</section>					

			</div><!-- id-main -->
		</main><!-- main -->
		<?php require_once "footer.php" ?>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="../js/plugins.js"></script>
		<script src="../js/beetle.js"></script>
	</body>
</html>