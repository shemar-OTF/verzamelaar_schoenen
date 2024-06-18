<?php
$servername = "localhost";
$username = "verzamelaar";
$password = "Shemar_18";
$dbname = "Port";

// Maak een databaseconnectie
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer of de connectie succesvol is
if ($conn->connect_error) {
    die("Fout bij de databaseconnectie: " . $conn->connect_error);
}
?>
