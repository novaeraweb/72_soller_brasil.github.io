<?php require_once "adm/conecta.php";
require_once "adm/class.php";
require_once "adm/function.php";
$categorias = listaCategoriaEn($soller);
$pgAtual = basename($_SERVER['SCRIPT_NAME']);
?>
<header role="banner" class="transparent light">
	<div class="row">
		<div class="nav-inner row-content buffer-left buffer-right even clear-after">
			<div id="brand">
				<h1 class="reset"><a href="index.php"><img src="img/soller-brasil-logo-branco.png" alt="logo S'ollér Brasil" width="80%"></a></h1>
			</div><!-- brand -->
			<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
			<nav>
				<ul class="reset" role="navigation">
					<li class="menu-item"><a href="index.php">Home</a></li>
					<li class="menu-item"><a href="company.php">S'ollér</a>
						<ul class="sub-menu">
							<li><a href="company.php">The company</a></li>
							<li><a href="comex.php">S'ollér International</a></li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="#">Collection</a>
						<ul class="sub-menu">
							<?php foreach ($categorias as $categoria) {?>
								<?php if ($categoria->idcategoria == 25 or $categoria->idcategoria ==26 or $categoria->idcategoria== 27) { ?>
									<li><a href="colecoes-h.php?id=<?=$categoria->idcategoria;?>"><?=$categoria->nome;?></a></li>
								<?php } else  { ?>
									<li><a href="colecoes.php?id=<?=$categoria->idcategoria;?>"><?=$categoria->nome;?></a></li>
								<?php } ?>

							<?php }?>
						</ul>
					</li>
					<li class="menu-item"><a href="contato.php">Contact us</a></li>
					<li class="menu-item revenda"><a href="reseller.php">Be a reseller</a></li>
					<li><a href="pt-br/index.php"><img src="img/icon-brazil.png"></a></li>
					<li><a href="#"> <img src="img/icon-usa.png"></a></li>
					<li><a href="es/index.php"> <img src="img/icon-spain.png"></a></li>
				</ul>
			</nav>
		</div><!-- row-content -->	
	</div><!-- row -->	
</header>
<?php
require "alerta.php";
?>