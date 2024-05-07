<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'users';

$conn = new mysqli ($host,$user,$password,$db);
if($conn->connect_error) {
	echo 'Sikeres kapcsolódás adatbázishoz!'}
echo 'Sikeres db kapcsolódás!';
?>

<form method="POST">
	Felhasználó:<br>
	<input type="text" name="username"><br>
	Jelszó:<br>
	<input type="text" name=""<<br>
