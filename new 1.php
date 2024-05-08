<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = '';

$conn = new mysqli ($host,$user,$password,$db);
if($conn->connect_error) {
	echo 'Sikeres kapcsolódás adatbázishoz!';}
echo 'Sikeres db kapcsolódás!';

?>
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<br>

<?php
$_SESSION["color"] = "brown";
$_SESSION["kutyatip"] = "dog";
echo "Bevan állítva a változó";
print_r($_SESSION);
?>
<form id = login method = "POST" action = "">
	<input id = "unname" name = "uname" type = "text" > 
	<input id = "pwd" name = "pwd" type = "password" >
	<input id = "ok" name = "okBtn" type = "submit" >
</form>

</body>
</html>
