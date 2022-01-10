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

    $nomevar_mobile = 'arquivo_mobile';
    
    if (isset($_FILES[$nomevar_mobile])) {
        $arquivo_teste = $_FILES[$nomevar_mobile]; 
        $arquivo_teste = $arquivo_teste["name"];
        
        $$nomevar_mobile = $arquivo_teste;
    }

	$diretorio = "arquivos/";
	

    $hora2 = $hora.$i;
	if($$nomevar != Null && !empty($_FILES[$nomevar])){
	   
		mysqli_select_db($soller, $database_soller);
		$query = "SELECT * FROM banner WHERE idbanner = $id";
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

	if($$nomevar_mobile != Null && !empty($_FILES[$nomevar_mobile])){
	   
		mysqli_select_db($soller, $database_soller);
		$query = "SELECT * FROM banner WHERE idbanner = $id";
		$rs_projeto = mysqli_query($soller, $query) or die(mysqli_error($soller));
		$row_rs_projeto = mysqli_fetch_assoc($rs_projeto);
		$rs_arquivo = $row_rs_projeto["arquivo_mobile"];
		if ($rs_arquivo != "sem-imagem.png" AND file_exists($rs_arquivo)) {
			unlink($diretorio.$rs_arquivo);
		}

		$nome_arquivo = $_FILES["arquivo_mobile"]["name"];
        $nome_arquivo = "arquivos/".$nome_arquivo;
		$arquivo_temporario = $_FILES["arquivo_mobile"]["tmp_name"];
		move_uploaded_file($arquivo_temporario, $nome_arquivo);

        // Descobre a extensao:
        $ext = pathinfo($$nomevar_mobile, PATHINFO_EXTENSION);
        $ponto = ".";

        // Gera novo nome
        $novo_mobile = 'soller-brasil-mobile-'.$hora2.$ponto.$ext;
        $var_mobile = $diretorio.$$nomevar_mobile;
        $var_novo_mobile = $diretorio.$novo_mobile;

        rename($var_mobile, $var_novo_mobile);
    }

    

    if (($_FILES[$nomevar]['error'] == 0 ) && ($_FILES[$nomevar_mobile]['error'] == 0)){
        $sql = "UPDATE banner SET arquivo = '$novo', arquivo_mobile = '$novo_mobile' WHERE idbanner=$id";
        $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));
    } else if (($_FILES[$nomevar]['error'] == 0)) {
        $sql = "UPDATE banner SET arquivo = '$novo' WHERE idbanner=$id";
        $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));
    } else {
        $sql = "UPDATE banner SET arquivo_mobile = '$novo_mobile' WHERE idbanner=$id";
        $Result = mysqli_query($soller, $sql) or die(mysqli_error($soller));
    }
    


header("Location: editar-imagens-banner.php?alterado=true&id=$id");