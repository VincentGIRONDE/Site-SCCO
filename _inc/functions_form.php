<?php
require_once 'functions.php';

function registerForm():void
{
    if(isSubmitted() && isValid()){
        insertUser(getValues());
       header('location: ../login.php');
    }
}

function processLoginForm():void
{
    if(isSubmitted() && isValidLogin())
    {
        if(checkUser(getValues())){
            $_SESSION['isConnected'] = true;
            $_SESSION['user'] = getUserByLogin(getValues()['email']);
            if ($_SESSION['user']['isadmin'] === 1) {
                header('location: /admin/index.php');
                exit;
            }
            else {
                header('location: /profil/index.php');
                exit;
            }
        }
        else {
            $_SESSION['nonvalide'] = "L'adresse mail ou le mot de passe n'est pas enregistré dans notre base de donnée";
        header('location: ../user.php');
        }
    }
}

function validFormUserInfo():void
{
    if(isSubmitted() && isValidFormUserInfo()){
        updateInfoUser(getValues());
        updateUser(getValues());
       header('location: userinfo.php');
    }
}

function isSubmitted():bool{
    return isset($_POST['submit']);
}

function getValues():array
{
    return $_POST;
}

function isValid():bool
{
   
    $contraint =[
        'name' => [
            'isValidate' => isNotBlank( getvalues()['name'] ),
            'message' => 'Remplir le nom'
        ],
        'surname' => [
            'isValidate' => isNotBlank( getvalues()['surname'] ),
            'message' => 'Remplir le prénom'
        ],
        'email' => [
            'isValidate' => isEmail( getvalues()['email'] ),
            'message' => "l'adresse mail est incorrecte"
        ],
        'password' => [
            'isValidate' => isPassword( getvalues()['password'] ),
            'message' => 'Votre mot de passe ne contient pas au minimum 8 caractères dont un chiffre et une lettre'
        ],
        'agree' => [
            'isValidate' => isset(getValues()['agree']) && isNotBlank(getValues()['agree']),
            'message' => 'Veuillez cocher la case'
        ],
    ];

    return checkContraint($contraint);
}

function isValidLogin():bool
{

    $contraint =[
        'email' => [
            'isValidate' => isEmail( getvalues()['email'] ),
            'message' => "l'adresse mail est incorrecte"
        ],
        'password' => [
            'isValidate' => isPassword( getvalues()['password'] ),
            'message' => 'Votre mot de passe ne contient pas au minimum 8 caractères dont un chiffre et une lettre'
        ],
    ];
    return checkContraint($contraint);
}

function checkContraint(array $contraint):bool
{
    $validation = true;

    $GLOBALS['errors'] = [];
    foreach($contraint as $name => $field){
        if(!$field['isValidate']){
            array_push($GLOBALS['errors'], $field['message']);
            $validation = false;
        }
    }
    return $validation;
}

function getErrors():array|null
{
    return $GLOBALS['errors'] ?? null;
}

function isEmail(string|null $value):bool
{
    return filter_var($value, FILTER_VALIDATE_EMAIL);
}

function isPassword(string|int|null $value):bool
{
    return preg_match("#^(?=.*\d)(?=.*[A-Za-z])([^\s]){8,16}$#", $value);
}

function isNotBlank(string|null $field):bool
{
    return !empty($field);
}

function isValidFormUserInfo():bool
{
   
    $contraint =[
        'name' => [
            'isValidate' => isNotBlank( getvalues()['name'] ),
            'message' => 'Remplir le nom'
        ],
        'surname' => [
            'isValidate' => isNotBlank( getvalues()['surname'] ),
            'message' => 'Remplir le prénom'
        ],
        'license' => [
            'isValidate' => isNotBlank( getvalues()['license'] ),
            'message' => 'Remplir la licence'
        ],
        'medals' => [
            'isValidate' => isNotBlank( getvalues()['medals'] ),
            'message' => 'Remplir la médaille obtenue'
        ],
    ];

    return checkContraint($contraint);
}
?>