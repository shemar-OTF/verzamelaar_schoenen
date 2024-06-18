<!DOCTYPE html>
<html>
<head>
    <title>Admin Pagina</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Bestellingen Beheer</h1>

    <?php
    include("config.php");

    // Haal bestellingen op uit de database
    $sql = "SELECT * FROM bestellingen";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Klantnaam</th><th>Schoenmerk</th><th>Schoenmodel</th><th>Maat</th><th>Geslacht</th><th>Hoeveelheid</th><th>Prijs per Eenheid</th><th>Totale Prijs</th><th>Besteldatum</th><th>Acties</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["klantnaam"] . "</td>";
            echo "<td>" . $row["schoenmerk"] . "</td>";
            echo "<td>" . $row["schoenmodel"] . "</td>";
            echo "<td>" . $row["maat"] . "</td>";
            echo "<td>" . $row["geslacht"] . "</td>";
            echo "<td>" . $row["hoeveelheid"] . "</td>";
            echo "<td>" . $row["prijs_per_eenheid"] . "</td>";
            echo "<td>" . $row["totale_prijs"] . "</td>";
            echo "<td>" . $row["besteldatum"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'>Bewerk</a> </td>";
            echo "<td><a href='delete.php?id=" . $row["id"] . "'>Verwijder</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Er zijn geen bestellingen.";
    }

    $conn->close();
    ?>

</body>
</html>
