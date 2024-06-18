<?php
include("config.php"); // Inclusief de databaseconnectie

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klantnaam = $_POST["klantnaam"];
    $schoenmerk = $_POST["schoenmerk"];
    $schoenmodel = $_POST["schoenmodel"];
    $maat = $_POST["maat"];
    $geslacht = $_POST["geslacht"];
    $hoeveelheid = $_POST["hoeveelheid"];
    
    // Bereken de totale prijs (stel de prijs per eenheid in)
    $prijs_per_eenheid = 224.99; // Vervang dit met de daadwerkelijke prijs per eenheid
    $totale_prijs = $hoeveelheid * $prijs_per_eenheid;
    
    // Voeg de bestelling toe aan de database, inclusief de klantnaam en totale prijs
    $sql = "INSERT INTO bestellingen (klantnaam, schoenmerk, schoenmodel, maat, geslacht, hoeveelheid, prijs_per_eenheid, totale_prijs) VALUES ('$klantnaam', '$schoenmerk', '$schoenmodel', '$maat', '$geslacht', $hoeveelheid, $prijs_per_eenheid, $totale_prijs)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Bestelling geplaatst!";
    } else {
        echo "Fout bij het plaatsen van de bestelling: " . $conn->error;
    }
    
    $conn->close(); // Sluit de databaseconnectie
}
?>
