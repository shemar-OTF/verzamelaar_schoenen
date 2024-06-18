<?php
// Database-instellingen
$servername = "localhost";
$username = "verzamelaar";
$password = "Shemar_18";
$dbname = "Port";
// Maak een databaseverbinding
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Controleer of de verbinding succesvol is
if (!$conn) {
    die("Databaseverbinding mislukt: " . mysqli_connect_error());
}

// Controleer of het formulier is ingediend
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controleer of de ingevoerde gebruikersnaam en wachtwoord overeenkomen met de verwachte waarden
    if ($username === 'Admin' && $password === '#1Geheim') {
        // Inloggen gelukt, doorstuur naar de beheerderspagina
        header('Location: ./adminpage.php');
        exit;
    } else {
        // Inloggen mislukt, toon een foutmelding
        $error_message = "Ongeldige gebruikersnaam of wachtwoord. Probeer opnieuw.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>admin_login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <?php
        // Toon een foutmelding als deze is ingesteld
        if (isset($error_message)) {
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
        <form action="#" method="post">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Inloggen">
        </form>
    </div>
</body>
</html>
