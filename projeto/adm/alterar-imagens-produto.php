<?php session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($soller, $database_soller);  

$hora = time();

    $id = $_POST['id'];
	    
    $nomevar = 'arquivo';

    $diretorio = "arquivos/";
    
    if (isset($_FILES[$nomevar]) && $_FILES[$nomevar]["error"] == 0) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste["name"];
        
        $$nomevar = $arquivo_teste;

        mysqli_select_db($soller, $database_soller);
		$query = "SELECT * FROM produto WHERE idproduto = $id";
		$rs_projeto = mysqli_query($soller, $query) or die(mysqli_error());
		$row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
		$rs_arquivo = $row_rs_projeto["arquivo"];
		if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
			unlink($diretorio.$rs_arquivo);
		}

		$nome_arquivo = $_FILES["arquivo"]["name"];
        $nome_arquivo = "arquivos/".$nome_arquivo;
		$arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
		move_uploaded_file($arquivo_temporario, $nome_arquivo);

        // Descobre a extensao:
        $ext = pathinfo($$nomevar, PATHINFO_EXTENSION);
        $ponto = ".";

        // Gera novo nome
        $novo = 'soller-brasil-'.rand().$ponto.$ext;
        $var = $diretorio.$$nomevar;
        $var_novo = $diretorio.$novo;

        rename($var, $var_novo);
    }

    $sql = "UPDATE produto SET arquivo = '$novo' WHERE idproduto=$id";
    $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));

    $sql = "UPDATE produto SET arquivo = '$novo' WHERE idproduto=$id-1";
    $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));

    $sql = "UPDATE produto SET arquivo = '$novo' WHERE idproduto=$id+1";
    $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));


header("Location: editar-imagens-produto.php?id=$id");