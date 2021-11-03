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
	
	$i = 1;
    $nomevar = 'arquivo';
    
    if (isset($_FILES[$nomevar])) {
        $arquivo_teste = $_FILES[$nomevar]; 
        $arquivo_teste = $arquivo_teste["name"];
        
        $$nomevar = $arquivo_teste;
    }



	$diretorio = "arquivos/";
	

    $hora2 = $hora.$i;
	if($$nomevar != Null){
	   
		mysqli_select_db($soller, $database_soller);
		$query = "SELECT * FROM linha WHERE idlinha = $id";
		$rs_projeto = mysqli_query($soller, $query) or die(mysqli_error($soller));
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
        $novo = 'soller-brasil-'.$hora2.$ponto.$ext;
        $var = $diretorio.$$nomevar;
        $var_novo = $diretorio.$novo;

        rename($var, $var_novo);
    }

    $sql = "UPDATE linha SET arquivo = '$novo' WHERE idlinha=$id";
    $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));

    $sql = "UPDATE linha SET arquivo = '$novo' WHERE idlinha=$id-1";
    $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));
    $sql = "UPDATE linha SET arquivo = '$novo' WHERE idlinha=$id+1";

    $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));


header("Location: editar-imagens-linha.php?id=$id");