<?php
require_once "class.php";
require_once "function.php";
require_once "conecta.php";
mysqli_select_db($soller, "sollerbrasil");
?>
<div class="sidebar" data-color="white" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="https://www.sollerbrasil.com/" class="simple-text logo-normal" target="_blank" rel="noopener" rel="noreferrer">
          <img src="assets/img/logo-soller-branco-5586x1593.png" alt="Logo S'ollér Brasil" width="250">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="home.php">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          
        </ul>
        
        <ul class="nav">
          <li class="nav-item active" data-toggle="tooltip" data-placement="top" title="As categorias são os tipos de coleções que estarão presentes no menu superior do site, p. ex: Tratamento, Redução de Volumes, etc.">
            <a class="nav-link" data-toggle="collapse" href="#menu-conteudo" aria-expanded="false" aria-controls="menu-conteudo" >
              <i class="material-icons">view_list</i>
              <p>Categoria <i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-conteudo">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-categoria.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-categoria.php"><i class="material-icons">search</i> Visualizar</a>
            </li> 
            <br>           
          </ul>
          </div>
        </ul>
        <ul class="nav">
          <li class="nav-item active"  data-toggle="tooltip" data-placement="top" title="Linhas dos produtos cadastrados, como Profissional e Manutenção.">
            <a class="nav-link" data-toggle="collapse" href="#menu-linha" aria-expanded="false" aria-controls="menu-colecao">
              <i class="material-icons">view_list</i>
              <p>Linha <i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-linha">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-linha.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-linha.php"><i class="material-icons">search</i> Visualizar</a>
            </li>   
            <br>         
          </ul>
          </div>
        </ul>
        <ul class="nav">
          <li class="nav-item active"  data-toggle="tooltip" data-placement="top" title="Coleções de produtos que estarão disponíveis para visualização no site, como Agi Max, Nutrimax, entre outras.">
            <a class="nav-link" data-toggle="collapse" href="#menu-colecao" aria-expanded="false" aria-controls="menu-colecao">
              <i class="material-icons">view_list</i>
              <p>Coleção <i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-colecao">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-colecao.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-colecao.php"><i class="material-icons">search</i> Visualizar</a>
            </li>   
            <br>         
          </ul>
          </div>
        </ul>

        <ul class="nav">
          <li class="nav-item active"  data-toggle="tooltip" data-placement="top" title="Produtos individuais das coleções cadastradas">
            <a class="nav-link" data-toggle="collapse" href="#menu-produto" aria-expanded="false" aria-controls="menu-colecao">
              <i class="material-icons">view_list</i>
              <p>Produto <i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-produto">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-produto.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-produto.php"><i class="material-icons">search</i> Visualizar</a>
            </li>   
            <br>         
          </ul>
          </div>
        </ul>

        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" data-toggle="collapse" href="#menu-banner" aria-expanded="false" aria-controls="menu-banner">
              <i class="material-icons">view_list</i>
              <p>Banner <i class="material-icons" style="float: right;">keyboard_arrow_down </i></p>
            </a>
          </li>
          <!-- your sidebar here -->
          <div class="collapse" id="menu-banner">
          <ul class="nav flex-column">
            <li class="nav-item" style="height:25px;">  
                <a class="nav-link active" href="inserir-banner.php"><i class="material-icons">add</i> Inserir</a>
            </li>
            <li class="nav-item" style="height: 25px;">
                <a class="nav-link active" href="listar-banner.php"><i class="material-icons">search</i> Visualizar</a>
            </li>            
          </ul>
          </div>
        </ul>

        
     

        
      </div>