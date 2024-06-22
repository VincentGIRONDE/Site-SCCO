<?php
session_start();
require_once '../_inc/functions.php';
require_once '../_inc/functions_form.php';
userIsConnected();
//var_dump ($_SESSION);
$users = getAllUserInfo();
//var_dump($users);
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
    <H1>Administrer les infos</H1>

<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Licence</th>
        <th>Dernière médaille obtenue</th>
        <th>Action 1</th>
        <th>Action 2</th>
    </tr>
<?php
foreach ($users as $key => $value) {
    echo "
    <tr>
    <td>{$value['name']}</td>
    <td>{$value['surname']}</td>
    <td>{$value['license']}</td>
    <td>{$value['medals']}</td>
    <td>
    <a href='formuserinfo.php?id={$value['id']}'>Modifier</a>
    </td>
    <td>
    <a href='remove.php?id={$value['id']}'>Supprimer</a>
    </td>

    </tr>
    ";
};
?>
</table>
   
    <p>
        <a href="/logout.php">Déconnexion</a>
    </p>

</body>
</html>