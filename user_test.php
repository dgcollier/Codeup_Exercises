<?php 

require_once 'User.php';

$user = new User();
$user->last_name = 'Jenkins';
$user->first_name = 'Bobby';
$user->username = 'thehobbit1';
$user->email = 'bobbyj@email.com';
$user->cell = '210-555-6789';
$user->id = 3;

$user->save();

$users = User::all();

var_dump($users);