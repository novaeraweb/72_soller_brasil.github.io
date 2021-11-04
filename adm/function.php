<?php 

// Queries Categorias
function listaCategoria ($soller) {
 	$query = "SELECT cat.*, i.ididioma
	 		  FROM categoria cat
			  INNER JOIN idioma i ON (i.ididioma = cat.ididioma_cat)
			  WHERE cat.ativo = 'Sim' and cat.ididioma_cat = '2'
			  ORDER BY nome ASC";
 	$resultado = mysqli_query($soller, $query);
 	$categorias = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$categoria = new Categoria();
 		$categoria->idcategoria = $array['idcategoria'];
 		$categoria->nome = $array['nome'];
		$categoria->descricao_breve = $array['descricao_breve'];
		$categoria->descricao_longa = $array['descricao_longa'];
		$categoria->arquivo = $array['arquivo'];
		$categoria->video = $array['video'];
		$categoria->ativo = $array['ativo'];
		$categoria->ididioma_cat = $array['ididioma_cat'];
		$categoria->data = $array['data'];
		$categoria->user = $array['user'];
		$categoria->hora = $array['hora'];

 		array_push($categorias, $categoria);
 	}
 	return $categorias;
}

function listaCategoriaEn ($soller) {
 	$query = "SELECT cat.*, i.ididioma
	 		  FROM categoria cat
			  INNER JOIN idioma i ON (i.ididioma = cat.ididioma_cat)
			  WHERE cat.ativo = 'Sim' and cat.ididioma_cat = '1'
			  ORDER BY nome ASC";
 	$resultado = mysqli_query($soller, $query);
 	$categorias = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$categoria = new Categoria();
 		$categoria->idcategoria = $array['idcategoria'];
 		$categoria->nome = $array['nome'];
		$categoria->descricao_breve = $array['descricao_breve'];
		$categoria->descricao_longa = $array['descricao_longa'];
		$categoria->arquivo = $array['arquivo'];
		$categoria->video = $array['video'];
		$categoria->ativo = $array['ativo'];
		$categoria->ididioma_cat = $array['ididioma_cat'];
		$categoria->data = $array['data'];
		$categoria->user = $array['user'];
		$categoria->hora = $array['hora'];

 		array_push($categorias, $categoria);
 	}
 	return $categorias;
}

function listaCategoriaId ($soller, $id) {
 	$query = "SELECT cat.*, i.ididioma
	 		  FROM categoria cat
			  INNER JOIN idioma i ON (i.ididioma = cat.ididioma_cat)
			  WHERE cat.ativo = 'Sim'AND cat.idcategoria=$id";
 	$resultado = mysqli_query($soller, $query);
 	$categorias = array();
 	while ($array = mysqli_fetch_assoc($resultado)) {
 		$categoria = new Categoria();
 		$categoria->idcategoria = $array['idcategoria'];
 		$categoria->nome = $array['nome'];
		$categoria->descricao_breve = $array['descricao_breve'];
		$categoria->descricao_longa = $array['descricao_longa'];
		$categoria->arquivo = $array['arquivo'];
		$categoria->video = $array['video'];
		$categoria->ativo = $array['ativo'];
		$categoria->ididioma_cat = $array['ididioma_cat'];
		$categoria->data = $array['data'];
		$categoria->user = $array['user'];
		$categoria->hora = $array['hora'];

 		array_push($categorias, $categoria);
 	}
 	return $categorias;
}


function listaCategoriaIdEn ($soller, $id) {
	$id = $id-1;
	$query = "SELECT cat.*, i.ididioma
			  FROM categoria cat
			 INNER JOIN idioma i ON (i.ididioma = cat.ididioma_cat)
			 WHERE cat.ativo = 'Sim'AND cat.idcategoria=$id" ;
	$resultado = mysqli_query($soller, $query);
	$categorias = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$categoria = new Categoria();
		$categoria->idcategoria = $array['idcategoria'];
		$categoria->nome = $array['nome'];
		$categoria->descricao_breve = $array['descricao_breve'];
		$categoria->descricao_longa = $array['descricao_longa'];
		$categoria->arquivo = $array['arquivo'];
		$categoria->video = $array['video'];
		$categoria->ativo = $array['ativo'];
		$categoria->ididioma_cat = $array['ididioma_cat'];
		$categoria->data = $array['data'];
		$categoria->user = $array['user'];
		$categoria->hora = $array['hora'];

		array_push($categorias, $categoria);
	}
	return $categorias;
}

function listaCategoriaIdEs ($soller, $id) {
	$id = $id+1;
	$query = "SELECT cat.*, i.ididioma
			  FROM categoria cat
			 INNER JOIN idioma i ON (i.ididioma = cat.ididioma_cat)
			 WHERE cat.ativo = 'Sim'AND cat.idcategoria=$id" ;
	$resultado = mysqli_query($soller, $query);
	$categorias = array();
	while ($array = mysqli_fetch_assoc($resultado)) {
		$categoria = new Categoria();
		$categoria->idcategoria = $array['idcategoria'];
		$categoria->nome = $array['nome'];
	   $categoria->descricao_breve = $array['descricao_breve'];
	   $categoria->descricao_longa = $array['descricao_longa'];
	   $categoria->arquivo = $array['arquivo'];
	   $categoria->video = $array['video'];
	   $categoria->ativo = $array['ativo'];
	   $categoria->ididioma_cat = $array['ididioma_cat'];
	   $categoria->data = $array['data'];
	   $categoria->user = $array['user'];
	   $categoria->hora = $array['hora'];

		array_push($categorias, $categoria);
	}
	return $categorias;
}

// Queries Coleções
function listaColecao($soller){
	$query = "SELECT c.*, i.ididioma
			  FROM colecao c
			  INNER JOIN idioma i ON (i.ididioma = c.ididioma_col)
			  WHERE c.ativo='Sim' AND c.ididioma_col = '2'
			  ORDER BY c.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$colecoes = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$colecao = new Colecao();
		$colecao->idcolecao = $array['idcolecao'];
		$colecao->nome = $array['nome'];
		$colecao->descricao = $array['descricao'];
		$colecao->indicacao = $array['indicacao'];
		$colecao->acao = $array['acao'];
		$colecao->arquivo = $array['arquivo'];
		$colecao->video = $array['video'];
		$colecao->ativo = $array['ativo'];
		$colecao->idcategoria = $array['idcategoria'];
		$colecao->data = $array['data'];
		$colecao->user = $array['user'];
		$colecao->hora = $array['hora'];

		array_push($colecoes, $colecao);
	}
	return $colecoes;
}


function listaColecaoId($soller, $id){
	$query = "SELECT c.*, cat.idcategoria, i.ididioma
			  FROM colecao c
			  INNER JOIN categoria cat ON (cat.idcategoria = c.idcategoria)
			  INNER JOIN idioma i ON (i.ididioma = c.ididioma_col)
			  WHERE c.ativo='Sim' and c.idcolecao='$id'
			  ORDER BY c.nome ASC";

	$resultado = mysqli_query($soller, $query);
	$colecoes = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$colecao = new Colecao();
		$colecao->idcolecao = $array['idcolecao'];
		$colecao->nome = $array['nome'];
		$colecao->descricao = $array['descricao'];
		$colecao->indicacao = $array['indicacao'];
		$colecao->acao = $array['acao'];
		$colecao->arquivo = $array['arquivo'];
		$colecao->video = $array['video'];
		$colecao->ativo = $array['ativo'];
		$colecao->idcategoria = $array['idcategoria'];
		$colecao->ididioma_col = $array['ididioma_col'];
		$colecao->data = $array['data'];
		$colecao->user = $array['user'];
		$colecao->hora = $array['hora'];

		array_push($colecoes, $colecao);
	}
	return $colecoes;
}

function listaColecaoIdEn($soller, $id){
	$id = $id-1;
	$query = "SELECT c.*, cat.idcategoria, i.ididioma
			  FROM colecao c
			  INNER JOIN categoria cat ON (cat.idcategoria = c.idcategoria)
			  INNER JOIN idioma i ON (i.ididioma = c.ididioma_col)
			  WHERE c.ativo='Sim' and c.idcolecao='$id'
			  ORDER BY c.nome ASC";

	$resultado = mysqli_query($soller, $query);
	$colecoes = array();
	while ($array = mysqli_fetch_assoc($resultado)){	
		$colecao = new Colecao();
		$colecao->idcolecao = $array['idcolecao'];
		$colecao->nome = $array['nome'];
		$colecao->descricao = $array['descricao'];
		$colecao->indicacao = $array['indicacao'];
		$colecao->acao = $array['acao'];
		$colecao->arquivo = $array['arquivo'];
		$colecao->video = $array['video'];
		$colecao->ativo = $array['ativo'];
		$colecao->idcategoria = $array['idcategoria'];
		$colecao->ididioma_col = $array['ididioma_col'];
		$colecao->data = $array['data'];
		$colecao->user = $array['user'];
		$colecao->hora = $array['hora'];

		array_push($colecoes, $colecao);
	}
	return $colecoes;
}

function listaColecaoFrontEn($soller, $idcategoria){
	$query = "SELECT c.*, cat.idcategoria
			  FROM colecao c
			  INNER JOIN categoria cat ON (cat.idcategoria = c.idcategoria)
			  WHERE c.ativo='Sim' AND c.idcategoria = '$idcategoria'
			  ORDER BY c.nome ASC";

	$resultado = mysqli_query($soller, $query);
	$colecoes = array();
	while ($array = mysqli_fetch_assoc($resultado)){	
		$colecao = new Colecao();
		$colecao->idcolecao = $array['idcolecao'];
		$colecao->nome = $array['nome'];
		$colecao->descricao = $array['descricao'];
		$colecao->indicacao = $array['indicacao'];
		$colecao->acao = $array['acao'];
		$colecao->arquivo = $array['arquivo'];
		$colecao->video = $array['video'];
		$colecao->ativo = $array['ativo'];
		$colecao->idcategoria = $array['idcategoria'];
		$colecao->ididioma_col = $array['ididioma_col'];
		$colecao->data = $array['data'];
		$colecao->user = $array['user'];
		$colecao->hora = $array['hora'];

		array_push($colecoes, $colecao);
	}
	return $colecoes;
}

function listaColecaoIdEs($soller, $id){
	$id = $id+1;
	$query = "SELECT c.*, cat.idcategoria, i.ididioma
			  FROM colecao c
			  INNER JOIN categoria cat ON (cat.idcategoria = c.idcategoria)
			  INNER JOIN idioma i ON (i.ididioma = c.ididioma_col)
			  WHERE c.ativo='Sim' and c.idcolecao='$id'
			  ORDER BY c.nome ASC";

	$resultado = mysqli_query($soller, $query);
	$colecoes = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$colecao = new Colecao();
		$colecao->idcolecao = $array['idcolecao'];
		$colecao->nome = $array['nome'];
		$colecao->descricao = $array['descricao'];
		$colecao->indicacao = $array['indicacao'];
		$colecao->acao = $array['acao'];
		$colecao->arquivo = $array['arquivo'];
		$colecao->video = $array['video'];
		$colecao->ativo = $array['ativo'];
		$colecao->idcategoria = $array['idcategoria'];
		$colecao->ididioma_col = $array['ididioma_col'];
		$colecao->data = $array['data'];
		$colecao->user = $array['user'];
		$colecao->hora = $array['hora'];

		array_push($colecoes, $colecao);
	}
	return $colecoes;
}


// Queries Linhas
function listaLinha($soller){
	$query = "SELECT l.*, i.ididioma
			  FROM linha l
			  INNER JOIN idioma i ON (i.ididioma = l.ididioma_li)
			  WHERE l.ativo='Sim' and l.ididioma_li = '2'
			  ORDER BY l.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$linhas = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$linha = new Linha();
		$linha->idlinha = $array['idlinha'];
		$linha->nome = $array['nome'];
		$linha->descricao = $array['descricao'];
		$linha->arquivo = $array['arquivo'];
		$linha->video = $array['video'];
		$linha->ativo = $array['ativo'];
		$linha->ididioma_li = $array['ididioma_li'];
		$linha->user = $array['user'];
		$linha->hora = $array['hora'];

		array_push($linhas, $linha);
	}
	return $linhas;
}

function listaLinhaId($soller, $id){
	$query = "SELECT l.*, i.ididioma
			  FROM linha l
			  INNER JOIN idioma i on (i.ididioma = l.ididioma_li)
			  WHERE l.ativo='Sim' and l.idlinha='$id'
			  ORDER BY l.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$linhas = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$linha = new Linha();
		$linha->idlinha = $array['idlinha'];
		$linha->nome = $array['nome'];
		$linha->descricao = $array['descricao'];
		$linha->arquivo = $array['arquivo'];
		$linha->video = $array['video'];
		$linha->ativo = $array['ativo'];
		$linha->ididioma_li = $array['ididioma_li'];
		$linha->user = $array['user'];
		$linha->hora = $array['hora'];

		array_push($linhas, $linha);
	}
	return $linhas;
}

function listaLinhaIdEn($soller, $id){
	$id = $id-1;
	$query = "SELECT l.*, i.ididioma
			  FROM linha l
			  INNER JOIN idioma i on (l.ididioma_li = i.ididioma)
			  WHERE l.ativo='Sim' and idlinha='$id'
			  ORDER BY l.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$linhas = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$linha = new Linha();
		$linha->idlinha = $array['idlinha'];
		$linha->nome = $array['nome'];
		$linha->descricao = $array['descricao'];
		$linha->arquivo = $array['arquivo'];
		$linha->video = $array['video'];
		$linha->ativo = $array['ativo'];
		$linha->ididioma_li = $array['ididioma_li'];
		$linha->user = $array['user'];
		$linha->hora = $array['hora'];

		array_push($linhas, $linha);
	}
	return $linhas;
}

function listaLinhaIdEs($soller, $id){
	$id = $id+1;
	$query = "SELECT l.*, i.ididioma
			  FROM linha l
			  INNER JOIN idioma i on (l.ididioma_li = i.ididioma)
			  WHERE l.ativo='Sim' and idlinha='$id'
			  ORDER BY l.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$linhas = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$linha = new Linha();
		$linha->idlinha = $array['idlinha'];
		$linha->nome = $array['nome'];
		$linha->descricao = $array['descricao'];
		$linha->arquivo = $array['arquivo'];
		$linha->video = $array['video'];
		$linha->ativo = $array['ativo'];
		$linha->ididioma_li = $array['ididioma_li'];
		$linha->user = $array['user'];
		$linha->hora = $array['hora'];

		array_push($linhas, $linha);
	}
	return $linhas;
}

// Queries Produtos

function listaProduto($soller){
	$query = "SELECT p.*, l.idlinha, c.idcolecao, i.ididioma
			FROM produto p
			INNER JOIN linha l ON (l.idlinha = p.idlinha_prod)
			INNER JOIN colecao c ON (c.idcolecao = p.idcolecao_prod)
			INNER JOIN idioma i ON (i.ididioma = p.ididioma_prod)
			WHERE p.ativo='Sim' AND p.ididioma_prod = '2'
			ORDER BY p.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$produtos = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$produto = new Produto();
		$produto->idproduto = $array['idproduto'];
		$produto->nome = $array['nome'];
		$produto->descricao = $array['descricao'];
		$produto->peso_g_br = $array['peso_g_br'];
		$produto->peso_m_br = $array['peso_m_br'];
		$produto->peso_p_br = $array['peso_p_br'];
		$produto->peso_g_en = $array['peso_g_en'];
		$produto->peso_m_en = $array['peso_m_en'];
		$produto->peso_p_en = $array['peso_p_en'];
		$produto->peso_unico = $array['peso_unico'];
		$produto->arquivo = $array['arquivo'];
		$produto->video = $array['video'];
		$produto->ativo = $array['ativo'];
		$produto->idlinha_prod = $array['idlinha_prod'];
		$produto->idcolecao_prod = $array['idcolecao_prod'];
		$produto->user = $array['user'];
		$produto->hora = $array['hora'];

		array_push($produtos, $produto);
	}
	return $produtos;
}

function listaProdutoFront($soller, $colecao){
	$query = "SELECT p.*, l.idlinha, c.idcolecao, i.ididioma
			FROM produto p
			INNER JOIN linha l ON (l.idlinha = p.idlinha_prod)
			INNER JOIN colecao c ON (c.idcolecao = p.idcolecao_prod)
			INNER JOIN idioma i ON (i.ididioma = p.ididioma_prod)
			WHERE p.ididioma_prod=1 AND p.idcolecao_prod = '$colecao'
			ORDER BY p.idproduto ASC";
	$resultado = mysqli_query($soller, $query);
	$produtos = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$produto = new Produto();
		$produto->idproduto = $array['idproduto'];
		$produto->nome = $array['nome'];
		$produto->descricao = $array['descricao'];
		$produto->peso_g_br = $array['peso_g_br'];
		$produto->peso_m_br = $array['peso_m_br'];
		$produto->peso_p_br = $array['peso_p_br'];
		$produto->peso_g_en = $array['peso_g_en'];
		$produto->peso_m_en = $array['peso_m_en'];
		$produto->peso_p_en = $array['peso_p_en'];
		$produto->peso_unico = $array['peso_unico'];
		$produto->arquivo = $array['arquivo'];
		$produto->video = $array['video'];
		$produto->ativo = $array['ativo'];
		$produto->idlinha_prod = $array['idlinha_prod'];
		$produto->idcolecao_prod = $array['idcolecao_prod'];
		$produto->ididioma_prod = $array['ididioma_prod'];
		$produto->user = $array['user'];
		$produto->hora = $array['hora'];

		array_push($produtos, $produto);
	}

	$query_tt = "SELECT p.*, l.idlinha, c.idcolecao, i.ididioma
						FROM produto p
						INNER JOIN linha l ON (l.idlinha = p.idlinha_prod)
						INNER JOIN colecao c ON (c.idcolecao = p.idcolecao_prod)
						INNER JOIN idioma i ON (i.ididioma = p.ididioma_prod)
						WHERE p.ididioma_prod=1 AND p.idcolecao_prod = '$colecao' AND p.idlinha_prod = '4'
						ORDER BY p.idproduto ASC";
	$resultado_tt = mysqli_query($soller, $query_tt);
	$GLOBALS['total'] = mysqli_num_rows($resultado_tt);

	return $produtos;
}

function listaProdutoId($soller, $id){
	$query = "SELECT p.*, l.idlinha, c.idcolecao, i.ididioma
			  FROM produto p
			  INNER JOIN linha l ON (l.idlinha = p.idlinha_prod)
			  INNER JOIN colecao c ON (c.idcolecao = p.idcolecao_prod)
			  INNER JOIN idioma i ON (i.ididioma = p.ididioma_prod)
			  WHERE p.ativo='Sim' AND p.idproduto = '$id'
			  ORDER BY p.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$produtos = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$produto = new Produto();
		$produto->idproduto = $array['idproduto'];
		$produto->nome = $array['nome'];
		$produto->descricao = $array['descricao'];
		$produto->peso_g_br = $array['peso_g_br'];
		$produto->peso_m_br = $array['peso_m_br'];
		$produto->peso_p_br = $array['peso_p_br'];
		$produto->peso_g_en = $array['peso_g_en'];
		$produto->peso_m_en = $array['peso_m_en'];
		$produto->peso_p_en = $array['peso_p_en'];
		$produto->peso_unico = $array['peso_unico'];
		$produto->arquivo = $array['arquivo'];
		$produto->video = $array['video'];
		$produto->ativo = $array['ativo'];
		$produto->idlinha_prod = $array['idlinha_prod'];
		$produto->idcolecao_prod = $array['idcolecao_prod'];
		$produto->user = $array['user'];
		$produto->hora = $array['hora'];

		array_push($produtos, $produto);
	}
	return $produtos;
}

function listaProdutoIdEn($soller, $id){
	$id = $id-1;
	$query = "SELECT p.*, l.idlinha, c.idcolecao, i.ididioma
				FROM produto p
				INNER JOIN linha l ON (l.idlinha = p.idlinha_prod)
				INNER JOIN colecao c ON (c.idcolecao = p.idcolecao_prod)
				INNER JOIN idioma i ON (i.ididioma = p.ididioma_prod)
				WHERE p.ativo='Sim' AND p.idproduto = '$id'
				ORDER BY p.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$produtos = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$produto = new Produto();
		$produto->idproduto = $array['idproduto'];
		$produto->nome = $array['nome'];
		$produto->descricao = $array['descricao'];
		$produto->peso_g_br = $array['peso_g_br'];
		$produto->peso_m_br = $array['peso_m_br'];
		$produto->peso_p_br = $array['peso_p_br'];
		$produto->peso_g_en = $array['peso_g_en'];
		$produto->peso_m_en = $array['peso_m_en'];
		$produto->peso_p_en = $array['peso_p_en'];
		$produto->peso_unico = $array['peso_unico'];
		$produto->arquivo = $array['arquivo'];
		$produto->video = $array['video'];
		$produto->ativo = $array['ativo'];
		$produto->idlinha = $array['idlinha'];
		$produto->idcolecao = $array['idcolecao'];
		$produto->user = $array['user'];
		$produto->hora = $array['hora'];

		array_push($produtos, $produto);
	}
	return $produtos;
}

function listaProdutoIdEs($soller, $id){
	$id = $id+1;
	$query = "SELECT p.*, l.idlinha, c.idcolecao, i.ididioma
				FROM produto p
				INNER JOIN linha l ON (l.idlinha = p.idlinha_prod)
				INNER JOIN colecao c ON (c.idcolecao = p.idcolecao_prod)
				INNER JOIN idioma i ON (i.ididioma = p.ididioma_prod)
				WHERE p.ativo='Sim' AND p.idproduto = '$id'
				ORDER BY p.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$produtos = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$produto = new Produto();
		$produto->idproduto = $array['idproduto'];
		$produto->nome = $array['nome'];
		$produto->descricao = $array['descricao'];
		$produto->peso_g_br = $array['peso_g_br'];
		$produto->peso_m_br = $array['peso_m_br'];
		$produto->peso_p_br = $array['peso_p_br'];
		$produto->peso_g_en = $array['peso_g_en'];
		$produto->peso_m_en = $array['peso_m_en'];
		$produto->peso_p_en = $array['peso_p_en'];
		$produto->peso_unico = $array['peso_unico'];
		$produto->arquivo = $array['arquivo'];
		$produto->video = $array['video'];
		$produto->ativo = $array['ativo'];
		$produto->idlinha = $array['idlinha'];
		$produto->idcolecao = $array['idcolecao'];
		$produto->user = $array['user'];
		$produto->hora = $array['hora'];

		array_push($produtos, $produto);
	}
	return $produtos;
}

function listaBanner($soller){
	$query = "SELECT b.*
			  FROM banner b
			  WHERE b.ativo='Sim'
			  ORDER BY b.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$banners = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$banner = new Banner();
		$banner->idbanner = $array['idbanner'];
		$banner->nome = $array['nome'];
		$banner->arquivo = $array['arquivo'];
		$banner->descricao = $array['descricao'];
		$banner->local = $array['local'];
		$banner->user = $array['user'];
		$banner->arquivo_mobile = $array['arquivo_mobile'];
		$banner->hora = $array['hora'];

		array_push($banners, $banner);
	}
	return $banners;
}

function listaBannerId($soller, $id){
	$query = "SELECT b.*
			  FROM banner b
			  WHERE b.ativo='Sim' AND b.idbanner='$id'
			  ORDER BY b.nome ASC";
	$resultado = mysqli_query($soller, $query);
	$banners = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$banner = new Banner();
		$banner->idbanner = $array['idbanner'];
		$banner->nome = $array['nome'];
		$banner->arquivo = $array['arquivo'];
		$banner->descricao = $array['descricao'];
		$banner->local = $array['local'];
		$banner->user = $array['user'];
		$banner->arquivo_mobile = $array['arquivo_mobile'];
		$banner->hora = $array['hora'];

		array_push($banners, $banner);
	}
	return $banners;
}

function listaGeral($soller){
	$query = "SELECT p.nome, p.data, p.arquivo, p.user, p.hora
			  FROM produto p WHERE idproduto >= '1'
			  UNION ALL

			  SELECT cat.nome, cat.data, cat.arquivo, cat.user, cat.hora
			  FROM categoria cat WHERE idcategoria >= '1'
			  UNION ALL

			  SELECT col.nome, col.data, col.arquivo, col.user, col.hora 
			  FROM colecao col WHERE idcolecao >= '1'
			  UNION ALL

			  SELECT l.nome, l.data, l.arquivo, l.user, l.hora 
			  FROM linha l WHERE idlinha >='1'
			  UNION ALL

			  SELECT b.nome, b.data, b.arquivo, b.user, b.hora 
			  FROM banner b 

			  ORDER BY data DESC";
			  
	$resultado = mysqli_query($soller, $query);
	$gerais = array();
	while ($array = mysqli_fetch_assoc($resultado)){
		$geral = new Geral();
		$geral->nome = $array['nome'];
		$geral->data = $array['data'];
		$geral->arquivo = $array['arquivo'];
		$geral->user = $array['user'];
		$geral->hora = $array['hora'];
		
		array_push($gerais, $geral);
	}

	return $gerais;
}

// Query para total de categorias
$query_categorias = "SELECT * FROM categoria WHERE ativo = 'Sim' AND ididioma_cat = '2'";
$resultado_categorias = mysqli_query($soller, $query_categorias);
$total_categorias = mysqli_num_rows($resultado_categorias);

// Query para números de coleções
$query_colecoes = "SELECT * FROM colecao WHERE ativo = 'Sim' AND ididioma_col = '2'";
$resultado_colecoes = mysqli_query($soller, $query_colecoes);
$total_colecoes = mysqli_num_rows($resultado_colecoes);

// Query para números de linhas
$query_linhas = "SELECT * FROM linha WHERE ativo = 'Sim' AND ididioma_li = '2'";
$resultado_linhas = mysqli_query($soller, $query_linhas);
$total_linhas = mysqli_num_rows($resultado_linhas);