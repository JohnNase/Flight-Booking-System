<?php
$user = 'root'; 
$password = ''; 
$db = 'webproject'; 

$db = new mysqli('localhost', $user, $password, $db) or die("Unable to connect!"); 
echo "Great Work!"; 
?>