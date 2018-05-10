<?php $title = 'qtnotinteger'; ?>
<?php ob_start(); ?>

<script type="text/javascript">

 alert('quantité erronée !');
 document.location.href="?action=home";
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>