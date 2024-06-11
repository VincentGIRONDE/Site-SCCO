<?php
session_start();
require_once '_inc/functions.php';
require_once '_inc/functions_form.php';
registerForm();
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
    <H1>Register</H1>

    <form method="post">
    <p>
        <label>Name :</label>
        <input type="text" name="name" value="<?= getValues()['name'] ?? null ?>">
    </p>
    <p>
        <label>Surname :</label>
        <input type="text" name="surname" value="<?= getValues()['surname'] ?? null ?>">
    </p>
    <p>
        <label>Email :</label>
        <input type="email" name="email" value="<?= getValues()['email'] ?? null ?>">
    </p>
    <p>
        <label>Password :</label>
        <input type="password" name="password" value="<?= getValues()['password'] ?? null ?>">
    </p>
        <input type="radio" name="agree" value="yes" <?= isset(getValues()['agree']) && getValues()['agree'] === 'yes' ? 'checked' : null ; ?>
        >
        <label >En créant un compte, je comprends et j'accepte l'<strong>Avis de confidentialité</strong> et les <strong>Conditions d'utilisations</strong>.</label>
    </p>
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
</html>