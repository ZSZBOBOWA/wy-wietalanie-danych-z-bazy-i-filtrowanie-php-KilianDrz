<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkola";

// Tworzenie połączenia
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}
?>
</body>
</html>