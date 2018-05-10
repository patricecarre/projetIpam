<?php $title = 'badpassword'; ?>
<?php ob_start(); ?>

<script type="text/javascript">
 alert('MOT DE PASSE INCORRECT');
 document.location.href="?action=home";
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>