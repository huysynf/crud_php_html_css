<?php
require_once 'pdo.php';
$request = $_POST;
if (array_key_exists('update',$request))
{
   $user = [
       'id' =>$request['id'],
       'name' => isset($request['name']) ? $request['name'] : '',
       'email' => isset($request['email']) ? $request['email'] : '',
       'address' => isset($request['address']) ? $request['address'] : '',
       'birthday' => isset($request['birthday']) ? $request['birthday'] : '',
       'gender' => isset($request['gender']) ? $request['gender'] : 1
   ];
   updateUser($user);

}