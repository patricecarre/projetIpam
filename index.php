<!DOCTYPE html>
<?php 
$status = session_status();
if($status == PHP_SESSION_NONE){
    session_start();
	}
	?>
<?php $title = 'home'; ?>
<?php ob_start(); ?>

					<?php 
					require('controllers/controller.php');
					if (isset($_GET['action'])) {
						if ($_GET['action'] == 'login') {
							login();
							}
						elseif ($_GET['action'] == 'viewshop') {
							viewshop();
							}
						elseif ($_GET['action'] == 'logon') {
							logon();
							}
						elseif ($_GET['action'] == 'additem') {
							additem();
							}
						elseif ($_GET['action'] == 'validadd') {
							validadd();
							}
						elseif ($_GET['action'] == 'validadduser') {
							validadduser();
							}
						elseif ($_GET['action'] == 'listToEdit') {
							listToEdit();
							}
						elseif ($_GET['action'] == 'edititem') {
							edititem();
							}
						elseif ($_GET['action'] == 'validedit') {
							validedit();
							}
						elseif ($_GET['action'] == 'listToDelete') {
							listToDelete();
							}
						elseif ($_GET['action'] == 'delitem') {
							delitem();
							}
						elseif ($_GET['action'] == 'validdelete') {
							validdelete();
							}
						elseif ($_GET['action'] == 'adduser') {
							adduser();
							}
						elseif ($_GET['action'] == 'detailitem') {
							detailitem();
							}
						elseif ($_GET['action'] == 'disconnect') {
							disconnect();
							}
						else {
							home();
						}
						}
					else {
						home();
						}
					?>

<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>