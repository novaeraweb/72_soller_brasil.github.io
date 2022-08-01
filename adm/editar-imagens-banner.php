<!doctype html>
<html lang="pt_BR">
<?php session_start(); ?>
<?php require_once "checkLogin.php";
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
  <script>
    $(document).ready(function() {
      $('form').submit(function(){
        $('#aguarde, #blanket').css('display','block');
      });
    });
</script>
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
            <div class="row"><?php require_once "alerta.php"?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-info">
                            <div class="card-text">
                                <h4 class="card-title">Editar imagens</h4>
                            </div>
                        </div>
                        <?php foreach($banners as $banner) {  ?>
                        <div class="card-body">
                                Utilize o formulário abaixo para editar a imagem do banner:
                                <hr>
                                <label for="nome">Banner: </label><strong> <?=$banner->nome;?></strong><br>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-12" style="padding-top: 20px;">
                    <form  class="col-md-12" method="POST" enctype="multipart/form-data" action="alterar-imagens-banner.php" style="padding-bottom: 15px;">
                        <div class="form-group">
                        <?php foreach($banners as $banner) {  ?>                        
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>Imagem Atual</th>
                                    <th>Imagem Atual Mobile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><?php if ($banner->arquivo == Null) {  ?>
                                    <img src="arquivos/sem-imagem.png" alt="" width="100" height="100" />             
                                    <?php } else { ?>
                                    <img src="arquivos/<?=$banner->arquivo;?>" alt="" height="160"/> 
                                    <?php } ?>
                                    <br><br><br>
                                    <label for="arquivo">Selecione a nova imagem (Desktop): <br><strong>(2000px X 1270px)</strong>
                                    </label>
                                    <br>
                                    <button type="button" class="btn btn-warning">
                                      <label for="arquivo" style="padding: 0; margin: 0; color: #fff">Nova Imagem Desktop</label>
                                      <input type="file" name="arquivo" id="arquivo">
                                    </button>
                                    </td>
                                    <td>
                                  <?php if ($banner->arquivo_mobile == Null) {  ?>
                                    <img src="arquivos/sem-imagem.png" alt="" width="100" height="100" />             
                                    <?php } else { ?>
                                    <img src="arquivos/<?=$banner->arquivo_mobile;?>" alt="" width="240" height="auto"/> 
                                    <?php } ?>
                                    <br><br><br>
                                    <label for="arquivo_mobile">Selecione a nova imagem (Mobile): <br><strong>(500px X 420px)</strong></label>
                                    <br>
                                    <button type="button" class="btn btn-warning">
                                      <label for="arquivo" style="padding: 0; margin: 0; color: #fff">Nova Imagem Mobile</label>
                                      <input type="file" name="arquivo_mobile" id="arquivo_mobile">
                                    </button>
                                    </td>
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php }?>
                        </div>
                        <br>
                        <div id="dvFile">
                        </div>
                        <input type="hidden" name="id" id="id" value="<?=$banner->idbanner;?>">
                        <input type="hidden" name="data" id="data" value="<?php echo date('d/m/Y'); ?>">
                        <input type="hidden" name="user" id="user" value=<?php echo $_SESSION["usuario_logado"];?>>
                        <input type="hidden" name="hora" id="hora" value="<?php echo date('G:i:s'); ?>">
                        <br>
                        <div class="form-group">
                        </div>
                        <button id="submit" type="submit" class="btn btn-info float-right">Salvar</button>
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

    <!-- <script>
    $(document).ready(function() {
        $("#submit").click(function() {
          $(this).prop("disabled", true);
          $(this).html(
            `<span class="spinner-border spinner-border-sm text-warning" role="status" aria-hidden="true"></span>Enviando...`
          );
        });
    });
    </script> -->
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>


</body>

</html>
