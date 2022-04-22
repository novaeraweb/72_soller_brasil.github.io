<?php require_once('conecta.php');
  $id = $_GET['id'];
  $id2 = $id+1;
  $id3 = $id-1;



  $query = "SELECT * FROM colecao WHERE idcolecao = $id";
  $resQuery = mysqli_query($soller, $query) or die (mysqli_error($soller));

  $resultQuery = mysqli_fetch_assoc($soller, $resQuery);
  unlink('arquivos/'.$resultQuery['arquivo']);

  $deleteSQL = "DELETE FROM produto WHERE idcolecao_prod='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));

  $deleteSQL = "DELETE FROM produto WHERE idcolecao_prod='$id2'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));

  $deleteSQL = "DELETE FROM produto WHERE idcolecao_prod='$id3'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));


  $deleteSQL = "DELETE FROM colecao WHERE idcolecao='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));
  $deleteSQL = "DELETE FROM colecao WHERE idcolecao='$id2'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));
  $deleteSQL = "DELETE FROM colecao WHERE idcolecao='$id3'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));

  header("Location: listar-colecao.php?excluido=true");

