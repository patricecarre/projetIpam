<?php $title = 'userencoded'; ?>
<?php ob_start(); ?>

<script type="text/javascript">
 alert('utilisateur déja encodé');
 document.location.href="?action=home";
</script>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>