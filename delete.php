<?php
require_once 'pdo.php';
$id = $_POST['id'];
$user = findUser($id);

if (!$id || !$user)
{
    redirectHome();
}

deleteUser($id);
redirectHome();
