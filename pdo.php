<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "crud";
$USER_NAME = "root";
$USER_PASSWORD = "";

$connection =  new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// set mode for fetch
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(!$connection)
{
    die('error');
}

function prepareSql($sql)
{
    global $connection;
   return  $connection->prepare($sql);
}
function selectUser()
{
    $sql = "SELECT * FROM users";
    $stmt = prepareSql($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
}

function findUser($id)
{
    $sql = "SELECT * FROM users where id=:id";
    $stmt = prepareSql($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    return $stmt->fetch();
}

function deleteUser($id)
{
    $sql = "DELETE  FROM users where id=:id";
    $stmt = prepareSql($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    return $stmt->fetch();
}

function redirectHome()
{
    header('Location:./index.php');
    exit;
}

function createUser($data)
{
    $sql = "INSERT INTO users (name, email, address,birthday,gender) values (:name, :email,:address,:birthday,:gender) ";
    $stmt = prepareSql($sql);
    $stmt->execute($data);
    $results = $stmt->fetchAll();
}

function updateUser($dataUpdate)
{
        $sql = "UPDATE users SET name=:name, email=:email, address=:address, birthday=:birthday, gender=:gender WHERE id =:id";
        $stmt = prepareSql($sql);
        $stmt->execute($dataUpdate);
    $results = $stmt->fetchAll();
    return $stmt;
}
