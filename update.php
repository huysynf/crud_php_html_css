<?php
require_once 'pdo.php';
$request = $_POST;
if (array_key_exists('update',$request))
{
   $user = [
       'name' => isset($request['name']) ? $request['name'] : '',
       'email' => isset($request['email']) ? $request['email'] : '',
       'address' => isset($request['address']) ? $request['address'] : '',
       'birthday' => $request['birthday'] ? $request['birthday'] : '2022-12-11',
       'gender' => isset($request['gender']) ? $request['gender'] : 1,
        'id' =>$request['id']

   ];
   updateUser($user);
   redirectHome();

}