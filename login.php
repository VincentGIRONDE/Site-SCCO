<?php
session_start();
require_once '_inc/functions.php';
require_once '_inc/functions_form.php';
processLoginForm();

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
    <H1>Login</H1>

    <form method="post">
    <p>
        <label>Email :</label>
        <input type="email" name="email" value="<?= getValues()['email'] ?? null ?>">
    </p>
    <p>
        <label>Password :</label>
        <input type="password" name="password" value="<?= getValues()['password'] ?? null ?>">
    <p>
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
