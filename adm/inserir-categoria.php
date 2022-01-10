<!doctype html>
<html lang="pt_BR">
<?php session_start(); ?>
<?php require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";

mysqli_select_db($soller, "sollerbrasil");
?>
<head>
  <title>Administração S'ollér Brasil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <?php require_once "sidebar.php" ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require_once "dashboard.php"?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
            <div class="row"><?php require_once "alerta.php"?>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title" style="width:100%;height:100%;">Cadastrar Categoria</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                Utilize o formulário abaixo para cadastrar novas Categorias de conteúdo:
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                    <form  class="col-md-12" method="POST" enctype="multipart/form-data" action="adicionar-categoria.php">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs bg-dark" style="text-align: center;" data-tabs="tabs">
                                <li class="nav-item col-md-4">
                                    <a class="nav-link active" href="#en" data-toggle="tab">Inglês <img src="assets/img/icon-usa.png" style="float: right;"alt=""></a>
                                </li>
                                <li class="nav-item col-md-4">
                                    <a class="nav-link" href="#pt" data-toggle="tab">Português <img src="assets/img/icon-brazil.png" style="float: right;" alt=""></a>
                                </li>
                                <li class="nav-item col-md-4">
                                    <a class="nav-link" href="#es" data-toggle="tab">Espanhol <img src="assets/img/icon-spain.png" style="float: right;"alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body bg-dark">
                      <div class="tab-content text-center">
                          <div class="tab-pane active" id="en">
                            <div class="col-md-12">
                              <br>
                              <div class="form-group">
                                  <label for="nome">Nome da Categoria</label>
                                  <input type="text" class="form-control" name="nome_en" id="nome_en" placeholder="" required><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição breve</label><br>
                                  <textarea class="form-control" name="descricao_breve_en" id="descricao_breve_en" rows="4"></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição longa</label><br>
                                  <textarea class="form-control" name="descricao_longa_en" id="descricao_longa_en" rows="4"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="pt">
                            <div class="col-md-8">
                              <br>
                              <div class="form-group">
                                  <label for="nome">Nome da Categoria</label>
                                  <input type="text" class="form-control" name="nome_pt" id="nome_pt" placeholder="" required><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição breve</label><br>
                                  <textarea class="form-control" name="descricao_breve_pt" id="descricao_breve_pt" rows="4"></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição longa</label><br>
                                  <textarea class="form-control" name="descricao_longa_pt" id="descricao_longa_pt" rows="4"></textarea>
                              </div>
                              <br>
                            </div>
                          </div>
                          <div class="tab-pane" id="es">
                            <div class="col-md-8">
                              <br>
                              <div class="form-group">
                                  <label for="nome">Nome da Categoria</label>
                                  <input type="text" class="form-control" name="nome_es" id="nome_es" placeholder="" required><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição breve</label><br>
                                  <textarea class="form-control" name="descricao_breve_es" id="descricao_breve_es" rows="4"></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição longa</label><br>
                                  <textarea class="form-control" name="descricao_longa_es" id="descricao_longa_es" rows="4"></textarea>
                              </div>
                              <br>
                            </div>
                          </div>
                      </div>
                  </div>
                        <br>
<!--                         <div id="dvFile">
                          <label for="arquivo" style="width: 100%; margin-top: 15px;">Imagem da Categoria <strong>(200px | 200px)</strong></label>
                          <input type="file" name="arquivo" id="arquivo">
                        </div>
                        <br> -->
<!--                         <div class="form-group">
                          <label for="video">Vídeo</label>
                          <input type="text" class="form-control" name="video" id="video" data-toggle="tooltip" data-placement="top" title="Links para vídeos do YouTube/Vimeo/etc">
                        </div> -->
                        <br>  
                        <input type="hidden" name="data" id="data" value="<?php echo date('d/m/Y'); ?>">
                        <input type="hidden" name="user" id="user" value=<?php echo $_SESSION["usuario_logado"];?>>
                        <input type="hidden" name="hora" id="hora" value="<?php echo date('G:i:s'); ?>">
                        <button id="submit" type="submit" class="btn btn-info float-right">Enviar</button>
                    </form> 
                </div>
            </div>
          </div> 
        </div>
      </div>
      <?php require_once "footer.php"?>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/material-dashboard.js" type="text/javascript"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>

  <!-- Editor de texto -->
  <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  <script type="text/javascript">

    // Initialize CKEditor
    CKEDITOR.replace('descricao_breve_en',{
      width: "700px",
      height: "200px"
    });  

    CKEDITOR.replace('descricao_longa_en',{

      width: "700px",
      height: "200px"

    }); 

    CKEDITOR.replace('descricao_breve_pt',{
      width: "700px",
      height: "200px"
    });  

    CKEDITOR.replace('descricao_longa_pt',{

      width: "700px",
      height: "200px"

    }); 

    CKEDITOR.replace('descricao_breve_es',{
      width: "700px",
      height: "200px"
    });  

    CKEDITOR.replace('descricao_longa_es',{

      width: "700px",
      height: "200px"

    }); 

  </script>   

</body>

</html>