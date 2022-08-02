<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (array_key_exists('inserido', $_GET) && $_GET['inserido']=='true') { ?>
<!-- <div class="sucesso" id="autofade"></div> -->
    <div class="modal-dialog" id="autofade">
        <div class="modal-card">
            <div class="modal-card-img"> <img src="assets/img/icon-check.svg" alt=""></div>
            <div class="modal-card-title">
                <p>Successo!</p>
            </div>
            <div class="modal-card-text">
                <p>Conteúdo inserido!</p>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (array_key_exists('editado', $_GET) && $_GET['editado']=='true') { ?>
    <div class="modal-dialog" id="autofade">
        <div class="modal-card">
            <div class="modal-card-img"> <img src="assets/img/icon-check.svg" alt=""></div>
            <div class="modal-card-title">
                <p>Successo!</p>
            </div>
            <div class="modal-card-text">
                <p>Conteúdo editado!</p>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (array_key_exists('excluido', $_GET) && $_GET['excluido']=='true') { ?>
    <div class="modal-dialog" id="autofade">
        <div class="modal-card">
            <div class="modal-card-img"> <img src="assets/img/icon-check.svg" alt=""></div>
            <div class="modal-card-title">
                <p>Successo!</p>
            </div>
            <div class="modal-card-text">
                <p>Conteúdo excluído!</p>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (array_key_exists('alterado', $_GET) && $_GET['alterado']=='true') { ?>
<script type="text/javascript">
window.onload = function(){alertSenha();}</script>
<?php } ?>

<?php if (array_key_exists('alterado', $_GET) && $_GET['alterado']=='false') { ?>
<script type="text/javascript">
window.onload = function(){alertSenhaErro();}</script>
<?php } ?>



<script type="text/javascript">
	function alertSenha() {
     Swal.fire(
      'Senha alterada com sucesso!',
      ' ',
      'success'
    )
     return false;
}
</script>


<script type="text/javascript">
	function alertSenhaErro() {
     Swal.fire(
      'As senhas inseridas não são iguais!',
      'Tente novamente.',
      'error'
    )
     return false;
}
</script>

<script>
  setTimeout(function() {
$('#autofade').fadeOut('slow');}, 5000);
</script>