<?php $title = 'deleteok'; ?>
<?php ob_start(); ?>

<script type="text/javascript">
var msg='<?PHP echo " Article ".$_SESSION['itemname']." supprimé";?>';
 alert(msg);
 document.location.href="?action=home";
</script>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>