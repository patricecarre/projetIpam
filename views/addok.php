<?php $title = 'addok'; ?>
<?php ob_start(); ?>

<script type="text/javascript">
var msg='<?PHP echo " Article ".$_POST['itemname']." ajouté";?>';
 alert(msg);
 document.location.href="?action=home";
</script>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>