<?php
session_start();
require_once '../_inc/functions.php';
require_once '../_inc/functions_form.php';
userIsConnected();
//var_dump ($_SESSION);
$user_id = $_GET['id'];
$user = getUserInfoById($user_id);
//var_dump($user);
validFormUserInfo()
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

<H1>Modifier données adhérents</H1>

<form method="post">
<p>
    <label>Name :</label>
    <input type="text" name="name" value="<?= $user['name'], getValues()['name'] ?? null ?>">
</p>
<p>
    <label>Surname :</label>
    <input type="text" name="surname" value="<?= $user['surname'], getValues()['surname'] ?? null ?>">
</p>
<p>
    <label>Licence :</label>
    <input type="text" name="license" value="<?= $user['license'], getValues()['license'] ?? null ?>">
<p>
<p>
    <label>Dernière médaille obtenue :</label>
    <input type="text" name="medals" value="<?= $user['medals'], getValues()['medals'] ?? null ?>">
</p> 
    <input type="submit" name="submit">
</p>

<?php
    if( getErrors() && count(getErrors()) !== 0){
        foreach(getErrors() as $key => $value){
            echo "<p>$value</p>";
        }
    }
?>

</form>
</body>
