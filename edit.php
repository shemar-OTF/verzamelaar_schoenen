<!DOCTYPE html>
<html>
<head>
    <title>Bewerk Bestelling</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Bewerk Bestelling</h1>

    <?php
    include("config.php");

    // Controleren of een bestelling ID is meegegeven in de URL
    if (isset($_GET["id"])) {
        $bestelling_id = $_GET["id"];

        // Haal de bestelling op uit de database
        $sql = "SELECT * FROM bestellingen WHERE id = $bestelling_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Toon een bewerkingsformulier met de huidige gegevens
            ?>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                Klantnaam: <input type="text" name="klantnaam" value="<?php echo $row["klantnaam"]; ?>"><br>
                Schoenmerk: <input type="text" name="schoenmerk" value="<?php echo $row["schoenmerk"]; ?>"><br>
                Schoenmodel: <input type="text" name="schoenmodel" value="<?php echo $row["schoenmodel"]; ?>"><br>
                Maat: <input type="text" name="maat" value="<?php echo $row["maat"]; ?>"><br>
                Geslacht: <input type="text" name="geslacht" value="<?php echo $row["geslacht"]; ?>"><br>
                Hoeveelheid: <input type="text" name="hoeveelheid" value="<?php echo $row["hoeveelheid"]; ?>"><br>
                Prijs per Eenheid: <input type="text" name="prijs_per_eenheid" value="<?php echo $row["prijs_per_eenheid"]; ?>"><br>
                Totale Prijs: <input type="text" name="totale_prijs" value="<?php echo $row["totale_prijs"]; ?>"><br>
                Besteldatum: <input type="text" name="besteldatum" value="<?php echo $row["besteldatum"]; ?>"><br>
                <input type="submit" value="Bijwerken">
            </form>
            <?php
        } else {
            echo "Bestelling niet gevonden.";
        }
    } else {
        echo "Geen bestellings-ID opgegeven.";
    }

    $conn->close();
    ?>

</body>
</html>
