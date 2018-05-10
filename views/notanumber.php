<?php $title = 'notanumber'; ?>
<?php ob_start(); ?>

<script type="text/javascript">

 alert('le nombre introduit est incorrect');
 document.location.href="?action=home";
</script>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>