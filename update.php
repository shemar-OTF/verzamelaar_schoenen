<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bestelling_id = $_POST["id"];
    $klantnaam = $_POST["klantnaam"];
    $schoenmerk = $_POST["schoenmerk"];
    $schoenmodel = $_POST["schoenmodel"];
    $maat = $_POST["maat"];
    $geslacht = $_POST["geslacht"];
    $hoeveelheid = $_POST["hoeveelheid"];
    $prijs_per_eenheid = $_POST["prijs_per_eenheid"];
    $besteldatum = $_POST["besteldatum"];

    // Bereken de totale prijs op basis van hoeveelheid en prijs per eenheid
    $totale_prijs = $hoeveelheid * $prijs_per_eenheid;

    // Voer de update-query uit om de gegevens bij te werken
    $sql = "UPDATE bestellingen SET
            klantnaam = '$klantnaam',
            schoenmerk = '$schoenmerk',
            schoenmodel = '$schoenmodel',
            maat = '$maat',
            geslacht = '$geslacht',
            hoeveelheid = '$hoeveelheid',
            prijs_per_eenheid = '$prijs_per_eenheid',
            totale_prijs = '$totale_prijs',
            besteldatum = '$besteldatum'
            WHERE id = $bestelling_id";

    if ($conn->query($sql) === TRUE) {
        echo "Bestelling is bijgewerkt.";
    } else {
        echo "Fout bij het bijwerken van de bestelling: " . $conn->error;
    }
}

$conn->close();
?>
