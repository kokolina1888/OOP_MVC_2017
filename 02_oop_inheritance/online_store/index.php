<?php 

include 'User.php';
include 'Profile.php';


$user = new User();
$user->register('Peshun');

var_dump($user->profile);

$user->profile->create_profile('Pesho', 'Address');
var_dump($user->profile);

echo $user->profile->name;
