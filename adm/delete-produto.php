<?php require_once('conecta.php');
  $id = $_GET['id'];
  $id2 = $id+1;
  $id3 = $id-1;

  $query = "SELECT * FROM produto WHERE idproduto = $id";
  $resQuery = mysqli_query($soller, $query) or die (mysqli_error($soller));
  $resultQuery = mysqli_fetch_assoc($soller, $resQuery);
  unlink('arquivos/'.$resultQuery['arquivo']);

  $deleteSQL = "DELETE FROM produto WHERE idproduto='$id'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));
  $deleteSQL = "DELETE FROM produto WHERE idproduto='$id2'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));
  $deleteSQL = "DELETE FROM produto WHERE idproduto='$id3'";
  $Result = mysqli_query($soller, $deleteSQL) or die(mysqli_error($soller));


  header("Location: listar-produto.php?excluido=true");