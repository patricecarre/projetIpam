<?php $title = 'welcome'; ?>
<?php ob_start(); ?>


<script type="text/javascript">
var msg='<?PHP echo " Bienvenue ".$_SESSION['userforename']." !";?>';
 alert(msg);
 document.location.href="?action=home";
</script>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>