<?php
session_start();
require_once '_inc/functions.php';
require_once '_inc/functions_form.php';
//var_dump ($_SESSION);
?>


<!DOCTYPE html>
<html lang="fr">
<?php
    require_once '_inc/header.php';
?>
<body>
<?php
    require_once '_inc/navbar.php';
?>
    <H1>VIP Zone</H1>

    <?php
        if(isset($_SESSION['isConnected'])){
            if ($_SESSION['user']['isadmin'] === 1) {
                header('location: /admin/index.php');
                exit;
            }
            else {
                header('location: /profil/index.php');
                exit;
            };
        } else {
            echo '
                <p>
                    <a href="/register.php">S\'enregistrer</a>
                    <a href="/login.php">Se connecter</a>
                </p>';
        }
    ?>
</body>
</html>