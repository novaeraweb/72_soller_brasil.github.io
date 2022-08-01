<?php
if(!$_SESSION['logado']){
header('Location: index.php');
} else {
 $now = time();

 if($now > $_SESSION['expirar']){
  session_destroy();
  header('Location: index.php');
 }
}