<?php $title = 'addorderok'; ?>
<?php ob_start(); ?>

<script type="text/javascript">
 alert('votre commande a bien été passée');
 document.location.href="?action=home";
</script>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>