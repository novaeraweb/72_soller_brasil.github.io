<?php session_start();
      ini_set('display_errors',1);
      ini_set('display_startup_erros',1);
      error_reporting(E_ALL);
      require_once 'conecta.php'; 
      require_once 'banco-login.php';

      $user = strip_tags(trim(addslashes($_POST["user"])));
      $senha = strip_tags(trim(addslashes($_POST["senha"])));


      if (validaUsuario($soller, $user, $senha)) {
        $_SESSION["logado"] = time();
        $_SESSION["usuario_logado"] = $user;

        $_SESSION['expirar'] = $_SESSION["logado"] + (60*30);
        
        mysqli_select_db($soller, $database_soller);
        $query = "SELECT * FROM usuario WHERE user = '$user'";
        $rs_id = mysqli_query($soller, $query) or die(mysqli_error($soller));
        $row_rs = mysqli_fetch_assoc($rs_id);
        $_SESSION["user_id"] = $row_rs['idusuario'];
        $_SESSION["user_senha"] = $row_rs['senha'];
        header('location:home.php');

      } else {
        header('location:index.php?erro=true');
      }
  
      die();