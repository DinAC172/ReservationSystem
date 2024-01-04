<?php
$servername = "localhost";
$username = "ime";
$password = "pass";
$dbname = "database";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Pogreška veze: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = mysqli_real_escape_string($conn, $_POST['ime']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefon = mysqli_real_escape_string($conn, $_POST['telefon']);
    $datum = mysqli_real_escape_string($conn, $_POST['datum']);
    $vrijeme = mysqli_real_escape_string($conn, $_POST['vrijeme']); 
    $broj_stola = intval($_POST['broj_stola']);


    $sql = "INSERT INTO rezervacije (ime, email, telefon, datum, vrijeme, broj_stola) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $ime, $email, $telefon, $datum, $vrijeme, $broj_stola);

    if ($stmt->execute() === TRUE) {
        echo "Rezervacija uspješno dodana!";
    } else {
        echo "Greška: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>