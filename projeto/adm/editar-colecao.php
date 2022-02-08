<!doctype html>
<html lang="pt_BR">
<?php session_start();
require_once "checkLogin.php";
require_once "conecta.php";
require_once "class.php";
require_once "function.php";
mysqli_select_db($soller,$database_soller);
$id = $_GET['id'];
$colecoes = listaColecaoId($soller, $id);
$colecoes_en = listaColecaoIdEn($soller, $id);
$colecoes_es = listaColecaoIdEs($soller, $id);
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
                                <h4 class="card-title">Editar Coleções</h4>
                            </div>
                        </div>
                        <div class="card-body">
                                Utilize o formulário abaixo para editar as Coleções submetidas:
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                    <form  class="col-md-12" method="POST" action="alterar-colecao.php">
                    <!-- Navegação das tabs -->
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
                    <!-- Corpo tabs -->
                    <div class="card-body bg-dark">
                      <div class="tab-content text-center">
                          <div class="tab-pane active" id="en">
                            <div class="col-md-12">
                              <br>
                              <?php foreach ($colecoes_en as $colecao_en){?>
                              <div class="form-group">
                                  <label for="nome">Nome da Coleção  <strong>(EN)</strong>:</label>
                                  <input type="text" class="form-control" name="nome_en" id="nome_en" placeholder="" required value="<?=$colecao_en->nome;?>"><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição <strong>(EN)</strong>:</label><br>
                                  <textarea class="form-control" name="descricao_en" id="descricao_en" rows="4"><?=$colecao_en->descricao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Indicação <strong>(EN)</strong>:</label><br>
                                  <textarea class="form-control" name="indicacao_en" id="indicacao_en" rows="4"><?=$colecao_en->indicacao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Ação <strong>(EN)</strong>:</label><br>
                                  <textarea class="form-control" name="acao_en" id="acao_en" rows="4"><?=$colecao_en->acao;?></textarea>
                              </div>
                              <?php }?>
                            </div>
                          </div>
                          <div class="tab-pane" id="pt">
                            <div class="col-md-8">
                              <br>
                              <?php foreach ($colecoes as $colecao){?>
                                <div class="form-group">
                                  <label for="nome">Nome da Coleção  <strong>(PT)</strong>:</label>
                                  <input type="text" class="form-control" name="nome_pt" id="nome_pt" placeholder="" required value="<?=$colecao->nome;?>"><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição <strong>(PT)</strong>:</label><br>
                                  <textarea class="form-control" name="descricao_pt" id="descricao_pt" rows="4"><?=$colecao->descricao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Indicação <strong>(PT)</strong>:</label><br>
                                  <textarea class="form-control" name="indicacao_pt" id="indicacao_pt" rows="4"><?=$colecao->indicacao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Ação <strong>(PT)</strong>:</label><br>
                                  <textarea class="form-control" name="acao_pt" id="acao_pt" rows="4"><?=$colecao->acao;?></textarea>
                              </div>
                              <?php }?>
                            </div>
                          </div>
                          <div class="tab-pane" id="es">
                            <div class="col-md-8">
                              <br>
                              <?php foreach ($colecoes_es as $colecao_es){?>
                                <div class="form-group">
                                  <label for="nome">Nome da Coleção  <strong>(ES)</strong>:</label>
                                  <input type="text" class="form-control" name="nome_es" id="nome_es" placeholder="" required value="<?=$colecao_es->nome;?>"><br>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Descrição <strong>(ES)</strong>:</label><br>
                                  <textarea class="form-control" name="descricao_es" id="descricao_es" rows="4"><?=$colecao_es->descricao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Indicação <strong>(ES)</strong>:</label><br>
                                  <textarea class="form-control" name="indicacao_es" id="indicacao_es" rows="4"><?=$colecao_es->indicacao;?></textarea>
                              </div>
                              <br>
                              <div class="form-group">
                                  <label for="descricao">Ação <strong>(ES)</strong>:</label><br>
                                  <textarea class="form-control" name="acao_es" id="acao_es" rows="4"><?=$colecao_es->acao;?></textarea>
                              </div>
                              <?php }?>
                              <br>
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- Fim corpo tabs -->
                      <br><br>
                        <?php foreach ($colecoes as $colecao){?>
                        <input type="hidden" name="id" id="id" value="<?=$colecao->idcolecao;?>">
                        <div class="form-group">
                          <label for="video"> <i class="material-icons" style="float: left;">play_circle_filled</i> Vídeo </label>
                          <input type="text" class="form-control" name="video" id="video" value="<?=$colecao->video;?>"> 
                        </div>                        
                        <div class="form-group">
                          <label for="ativo">A Coleção está ativa?</label>
                          <select class="form-control selectpicker" data-style="btn btn-link" name="ativo" id="ativo">
                          <option value="<?=$colecao->ativo;?>"><?=$colecao->ativo;?></option>
                          <?php if ($colecao->ativo == "Sim") {?>
                          <option value="Não">Não</option>
                          <?php } else {?>
                          <option value="Sim">Sim</option>
                          <?php }?>
                          </select>
                        </div>
                        <?php } ?>

                        <br><br>
                        <a href="listar-colecao.php"><button type="button" class="btn btn-danger float-left">Cancelar</button></a>
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
CKEDITOR.replace('descricao_en',{
  width: "700px",
  height: "200px"
});  

CKEDITOR.replace('indicacao_en',{

  width: "700px",
  height: "200px"

}); 

CKEDITOR.replace('acao_en',{

  width: "700px",
  height: "200px"

}); 

CKEDITOR.replace('descricao_pt',{
  width: "700px",
  height: "200px"
});  

CKEDITOR.replace('indicacao_pt',{

  width: "700px",
  height: "200px"

}); 

CKEDITOR.replace('acao_pt',{

  width: "700px",
  height: "200px"

}); 

CKEDITOR.replace('descricao_es',{
  width: "700px",
  height: "200px"
});  

CKEDITOR.replace('indicacao_es',{

  width: "700px",
  height: "200px"

}); 
CKEDITOR.replace('acao_es',{

  width: "700px",
  height: "200px"

}); 

</script>   
</body>

</html>