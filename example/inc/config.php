<?php
// display errors
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(-1);

// user
$users= [];

$admin = array('username'=>'admin', 'password'=>'1234', 'role'=>'admin', 'name'=>'Administrateur');

$user = array('username'=>'user', 'password'=>'4321', 'role'=>'user', 'name'=>'Simple User');

// add user to users
$users[] = $admin;
$users[] = $user;
