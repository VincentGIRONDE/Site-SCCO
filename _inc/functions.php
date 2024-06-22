<?php


$mysqLErrorCodes=[
    23000 => 'Duplicate entry',
    '42S02' => 'Unknow table',
    4200 => 'Unknow database',
    1062 => 'Vous êtes déjà enregistré',
    1451 => 'Integrity constraint violation',
];

function dbConnection():PDO
{
    $mysqlErrorCodes =[
        1045 => 'Access denied',
        1049 => 'Unknow database',
        1064 => 'syntax error',
    ];
    try{
        $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=project',
        'root',
        'rootroot',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
        );
    return $pdo;
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getcode ()) ;
    //exit( $mysqlErrorCodes[ $e ->getCode() ] ?? "Error");
}
}

//fonction insertion utilisateur et création info adhérent
function insertUser(array $values):void
{
    $connection = dbConnection();
    $sql = '
        START TRANSACTION;

        INSERT INTO project.user
        VALUE(NULL, :name, :surname, :email, :password, 0);

        SET @id = LAST_INSERT_ID();

        INSERT INTO project.info
        VALUE(NULL, @id, NULL, NULL );

        COMMIT;

    ';
    $query = $connection->prepare($sql);
    try {
        $query->execute([
            'name' => $values['name'],
            'surname' => $values['surname'],
            'email' => $values['email'],
            'password' => password_hash($values['password'], PASSWORD_BCRYPT),
        ]);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
        //exit( $GLOBALS['mysqLErrorCodes'][ $e ->getCode() ] ?? 'Error');
    }
}


//vérification utilisateur par identifiant (e-mail)
function userByLoginIsExist(string $login):bool
{
    $connection = dbConnection();
    $sql='
        SELECT COUNT(user.id)
        FROM project.user
        WHERE user.email = :email;
';
$query = $connection->prepare($sql);
try {
    $query->execute([
        'email' => $login,
    ]);
    $result = $query->fetchColumn();
    return $result;
} catch (PDOException $e) {
exit($GLOBALS['mysqlErrorCodes'][$e->getCode()] ?? 'Error' );
}
}

//récupérer les données utilisteur par son identifiant
function getUserByLogin(string $login):array|bool
{
    $connection = dbConnection();
    $sql ='
        SELECT user.*
        FROM project.user
        WHERE user.email = :email
    ';
    $query=$connection->prepare($sql);
    try
    {
        $query->execute([
            'email' => $login,
        ]);
        $result = $query->fetch();
    return $result;
    } catch (PDOException $e) {
        exit($GLOBALS['mysqlErrorCodes'][$e->getcode()] ?? 'Error');
    }
}

function checkUser(array $values):bool
{
    if(!userByLoginIsExist($values['email'])) return false;
    $user = getUserByLogin($values['email']);
    if(!password_verify($values['password'], $user['password'])) return false;
    return true;
}

function adminIsConnected():void
{
    if($_SESSION['user']['isadmin'] !== 0){
        header('location: /');
    }
}

function userIsConnected():void
{
    if($_SESSION['user']['isadmin'] !== 1){
        header('location: /');
    }
}

function disconnected():void
{
    unset($_SESSION['isConnected']);
    header('location: /');
}

function getUserInfoById(int $id):array|bool
{
    $connection = dbConnection();

    $sql = '
        SELECT info.*, user.name, user.surname
        FROM project.info
        LEFT JOIN project.user
        ON info.user_id = user.id
        WHERE info.user_id = :id
    ';

    $query = $connection->prepare($sql);

    try {
        $query->execute([
            'id' => $id,
        ]);
        $_result = $query->fetch();
        return $_result ?? null;
    } catch (PDOException $e) {
        //throw new PDOException($e->getMessage(), $e->getcode ()) ;
        exit( $mysqlErrorCodes[ $e ->getCode() ] ?? "Error");
    }
}

function getAllUserInfo():array
{
    $connection = dbConnection();

    $sql = '
        SELECT user.*, info.license, info.medals
        FROM project.user
        LEFT JOIN project.info
        ON info.user_id = user.id
    ';

    $query = $connection->prepare($sql);

    try {
        $query->execute();
        $_result = $query->fetchAll();
        return $_result;
    } catch (PDOException $e) {
        //throw new PDOException($e->getMessage(), $e->getcode ()) ;
        exit( $mysqlErrorCodes[ $e ->getCode() ] ?? "Error");
    }
}

//fonction mise à jour des informations adhérents par l'administrateur
function updateInfoUser(array $values):void
{
    $connection = dbConnection();
    $sql = '
        UPDATE project.info
        SET license = :license, medals = :medals  
        WHERE info.user_id = :id     
    ';
    $query = $connection->prepare($sql);
    try {
        //$user = getUserInfoById($values[$id]);
        $query->execute([
            'id' => $_GET['id'],
            'license' => $values['license'],
            'medals' => $values['medals'],
        ]);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
        //exit( $GLOBALS['mysqLErrorCodes'][ $e ->getCode() ] ?? 'Error');
    }
}

//fonction mise à jour de nom et prénom de l'adhérent par l'administrateur
function updateUser(array $values):void
{
    $connection = dbConnection();
    $sql = '
        UPDATE project.user
        SET name = :name, surname = :surname
        WHERE user.id = :id     
    ';
    $query = $connection->prepare($sql);
    try {
        //$user = getUserInfoById($values[$id]);
        $query->execute([
            'id' => $_GET['id'],
            'name' => $values['name'],
            'surname' => $values['surname'],
        ]);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getCode());
        //exit( $GLOBALS['mysqLErrorCodes'][ $e ->getCode() ] ?? 'Error');
    }
}

//Effacer une adhérent
function removeUser(int $id):void
{
    $connection = dbConnection();

    $sql = '
        DELETE FROM project.info WHERE info.user_id = :id;

        DELETE FROM project.user WHERE user.id = :id;

    ';

    $query = $connection->prepare($sql);

    try {
        $query->execute([
            'id' => $id
        ]);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), $e->getcode ()) ;
        //exit( $mysqlErrorCodes[ $e ->getCode() ] ?? "Error");
    }
}

?>