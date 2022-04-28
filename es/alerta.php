<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (array_key_exists('enviado', $_GET) && $_GET['enviado']=='true') { ?>
<script type="text/javascript">
window.onload = function(){alert();}</script>
<?php } ?>

<?php if (array_key_exists('enviado', $_GET) && $_GET['enviado']=='false') { ?>
<script type="text/javascript">
window.onload = function(){alertErro();}</script>
<?php } ?>

<script type="text/javascript">
	function alert() {
     Swal.fire(
      'Mensaje enviado correctamente!',
      ' ',
      'success'
    )
     return false;
}
</script>

<script type="text/javascript">
	function alertErro() {
     Swal.fire(
      'Tu mensaje no puede ser enviado',
      'Inténtalo de nuevo.',
      'error'
    )
     return false;
}
</script>