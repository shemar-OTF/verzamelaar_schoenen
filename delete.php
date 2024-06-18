<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $bestelling_id = $_GET["id"];
    
    // Verwijder de bestelling uit de database
    $sql = "DELETE FROM bestellingen WHERE id = $bestelling_id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: adminpage.php"); // Terug naar de adminpagina na verwijderen
        exit();
    } else {
        echo "Fout bij het verwijderen van de bestelling: " . $conn->error;
    }
}

ß
?>
