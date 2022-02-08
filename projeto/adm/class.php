<?php 
class Categoria{
	public $idcategoria;
	public $nome;
	public $descricao_breve;
	public $descricao_longa;
	public $arquivo;
	public $video;
	public $ativo;
	public $user;
	public $hora;
}

class Colecao{
	public $idcolecao;
	public $nome;
	public $descricao;
	public $indicacao;
	public $acao;
	public $arquivo;
	public $video;
	public $ativo;
	public $user;
	public $hora;
}

class Produto{
	public $idproduto;
	public $nome;
	public $descricao;
	public $peso_g_br;
	public $peso_m_br;
	public $peso_p_br;
	public $peso_g_en;
	public $peso_m_en;
	public $peso_p_en;
	public $peso_unico;
	public $arquivo;
	public $video;
	public $ativo;
	public $user;
	public $hora;
}

class Linha{
	public $idlinha;
	public $nome;
	public $descricao;
	public $arquivo;
	public $video;
	public $ativo;
	public $user;
	public $hora;
}

class Banner{
	public $idbanner;
	public $nome;
	public $descricao;
	public $local;
	public $arquivo;
	public $ativo;
	public $user;
	public $hora;
}


class User{
	public $idusuario;
	public $user;
	public $senha;
	public $descricao;
	public $tipo;
	public $ativo;
	public $arquivo;
}

class Geral{
	public $nome;
	public $data;
	public $arquivo;
	public $user;
	public $hora;
}