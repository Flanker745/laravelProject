<?php 

use Illuminate\Support\Facades\Hash;

$password = '111';
$hashedPassword = Hash::make($password);

echo $hashedPassword;
?>