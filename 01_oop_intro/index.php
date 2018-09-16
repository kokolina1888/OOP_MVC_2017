<?php 

include 'User.php';

$pesho = new User('admin');

echo '<p>Pesho`s role is -' . $pesho->role . '</p>';

echo '<p>Pesho`s username is - ' . $pesho->username . '</p>';

$pesho->set_username('Peshun');

echo '<p>Pesho`s username is - ' . $pesho->username . '</p>';

// echo '<p>Pesho`s count is -' . $pesho->count . '</p>';

// $gosho = new User();

// echo '<p>Gosho`s role is -' . $gosho->role . '</p>';
