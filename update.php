<?php
require_once 'pdo.php';
$request = $_POST;
if (array_key_exists('update',$request))
{
   $user = [
       'id' =>$request['id'],
       'name' =>$request['name'],
       'email' =>$request['email'],
       'address' =>$request['address'],
       'birthday' =>$request['birthday'],
       'gender' =>$request['gender']
   ];
   updateUser($user);

}