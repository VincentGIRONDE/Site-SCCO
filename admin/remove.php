<?php
session_start();
require_once '../_inc/functions.php';
require_once '../_inc/functions_form.php';
userIsConnected();
$id = $_GET['id'];
removeUser($id);
?>


<!DOCTYPE html>
<html lang="fr">
<?php
    require_once '../_inc/header.php';
?>
<body>
<?php
    require_once '../_inc/navbar.php';
?>
    <H1>L'adhérent a été supprimé !</H1>

    <a class="nav-link active" aria-current="page" href="userinfo.php">Revenir à la page d'administration</a>




