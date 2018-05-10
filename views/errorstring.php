<?php $title = 'errorstring'; ?>
<?php ob_start(); ?>

<script type="text/javascript">

 alert('erreur pas de caracteres speciaux ou de champs vides svp !');
 document.location.href="?action=home";
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>