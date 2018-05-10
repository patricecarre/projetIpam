<?php $title = 'baduser'; ?>
<?php ob_start(); ?>

<script type="text/javascript">

 alert('Utilisateur inconnu');
 document.location.href="?action=home";
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>