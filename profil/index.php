<?php
session_start();
require_once '../_inc/functions.php';
require_once '../_inc/functions_form.php';
adminIsConnected();
//var_dump ($_SESSION);
$user = getUserInfoById($_SESSION['user']['id']);
//var_dump($user);
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
    <H1>Adhérent</H1>

    <p>
        licence :
        <?= $user['license'] ?? 'Inconnue'
         ?>
    </p>
    <p>
        Dernière médaille obtenue :
        <?= $user['medals'] ?? 'Inconnue'
         ?>
    </p>
   
    <p>
        <a href="/logout.php">Déconnexion</a>
    </p>

</body>
</html>