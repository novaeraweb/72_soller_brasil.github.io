<?php require_once "../adm/conecta.php";
require_once "../adm/class.php";
require_once "../adm/function.php";
$categorias = listaCategoriaEs($soller);
$pgAtual = basename($_SERVER['SCRIPT_NAME']);
?>
<header role="banner" class="transparent light">
	<div class="row">
		<div class="nav-inner row-content buffer-left buffer-right even clear-after">
			<div id="brand">
				<h1 class="reset"><a href="index.php"><img src="../img/soller-brasil-logo-branco.png" alt="logo S'ollér Brasil" width="80%"></a></h1>
			</div><!-- brand -->
			<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
			<nav>
				<ul class="reset" role="navigation">
					<li class="menu-item"><a href="index.php">Home</a></li>
					<li class="menu-item"><a href="company.php">S'ollér</a>
						<ul class="sub-menu">
							<li><a href="company.php">La Empresa</a></li>
							<li><a href="comex.php">S'ollér Internacional</a></li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="#">Colecciones</a>
						<ul class="sub-menu">
							<?php foreach ($categorias as $categoria) {?>
								<li><a href="colecoes.php?id=<?=$categoria->idcategoria;?>"><?=$categoria->nome;?></a></li>
							<?php }?>
						</ul>
					</li>
					<li class="menu-item"><a href="contato.php">Contacto</a></li>
					<li class="menu-item revenda"><a href="reseller.php">Ser un revendedor</a></li>
					<li><a href="../pt-br/<?php if ($pgAtual = 'colecoes.php'){echo 'index.php';} else {echo $pgAtual;}?>"> <img src="../img/icon-brazil.png"></a></li>
					<li><a href="../<?php if ($pgAtual = 'colecoes.php'){echo 'index.php';} else {echo $pgAtual;}?>"> <img src="../img/icon-usa.png"></a></li>
					<li><a href="#"> <img src="../img/icon-spain.png"></a></li>
				</ul>
			</nav>
		</div><!-- row-content -->	
	</div><!-- row -->	
</header>