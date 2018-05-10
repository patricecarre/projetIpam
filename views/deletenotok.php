<?php $title = 'deleteok'; ?>
<?php ob_start(); ?>

<script type="text/javascript">
 alert('item ne peut pas être supprimé car une commande client est en cours');
 document.location.href="?action=home";
</script>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>