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
        
        $_SESSION["user_id"] = $user;
        $_SESSION["user_senha"] = $senha;
        header('location:home.php');

      } else {
        header('location:index.php?erro=true');
      }
  
      die();