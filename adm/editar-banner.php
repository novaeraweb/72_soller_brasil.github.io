<!doctype html>
<html lang="pt_BR">
<?php session_start();
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($soller,$database_soller);
$id = $_GET['id'];
$banners = listaBannerId($soller, $id);
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
  <link href="assets/css/alerta.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <?php require_once "sidebar.php"?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php require_once "dashboard.php"?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">Editar Banner</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                Utilize o formulário abaixo para editar os Banners da Home:
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                    <form  class="col-md-12" method="POST" action="alterar-banner.php">
                    <!-- Navegação das tabs -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">

                        </div>
                    </div>
                    <!-- Corpo tabs -->
                    <div class="card-body bg-dark">
                      <div class="tab-content text-center">
                          <div class="tab-pane active" id="en">
                            <div class="col-md-12">
                              <br>
                              <?php foreach ($banners as $banner){?>
                              <div class="form-group">
                                  <label for="nome">Nome</label>
                                  <input type="text" class="form-control" name="nome" id="nome" placeholder="" required value="<?=$banner->nome;?>"><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição</label><br>
                                  <textarea class="form-control" name="descricao" id="descricao" rows="4"><?=$banner->descricao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Local:</label><br>
                                   <input type="text" class="form-control" name="local" id="local" value="<?=$banner->local;?>">
                              </div>
                              <?php }?>
                            </div>
                          </div>

                      </div>
                    </div>
                    <!-- Fim corpo tabs -->
                      <br><br>
                        <?php foreach ($banners as $banner){?>
                        <input type="hidden" name="id" id="id" value="<?=$banner->idbanner;?>">                    
                        <div class="form-group">
                          <label for="ativo">Banner ativo?</label>
                          <select class="form-control selectpicker" data-style="btn btn-link" name="ativo" id="ativo">
                          <option value="<?=$banner->ativo;?>"><?=$banner->ativo;?></option>
                          <?php if ($banner->ativo == "Sim") {?>
                          <option value="Não">Não</option>
                          <?php } else {?>
                          <option value="Sim">Sim</option>
                          <?php }?>
                          </select>
                        </div>
                        <?php } ?>

                        <br><br>
                        <a href="listar-banner.php"><button type="button" class="btn btn-danger float-left">Cancelar</button></a>
                        <button type="submit" class="btn btn-primary float-right">Enviar</button>
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
  
  <!-- CKEditor -->
  <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
 
  <script type="text/javascript">

// Initialize CKEditor
CKEDITOR.replace('descricao',{
  width: "700px",
  height: "200px"
});  
</script>   
</body>
</html>