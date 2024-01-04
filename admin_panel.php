<?php

$server = "localhost";
$username = "ime";
$password = "pass";
$database = "database";


$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Povezivanje neuspješno: " . $conn->connect_error);
}

$sql = "SELECT * FROM rezervacije";
$result = $conn->query($sql);

echo "<div class='admin-table'>";
echo "<table>";
echo "<tr><<th>Ime</th><th>Datum rezervacije</th><th>Vrijeme</th><th>Broj stola</th><th>Kontakt</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ime"] . "</td>";

        if(isset($row["datum"]) && !empty($row["datum"])) {
            echo "<td>" . $row["datum"] . "</td>";
        } else {
            echo "<td> N/A </td>";
        }
        
        if(isset($row["vrijeme"]) && !empty($row["vrijeme"])) {
            echo "<td>" . $row["vrijeme"] . "</td>";
        } else {
            echo "<td> N/A </td>";
        }

        if(isset($row["broj_stola"]) && !empty($row["broj_stola"])) {
            echo "<td>" . $row["broj_stola"] . "</td>";
        } else {
            echo "<td> N/A </td>";
        }        

        if(isset($row["telefon"]) && !empty($row["telefon"])) {
            echo "<td>" . $row["telefon"] . "</td>";
        } else {
            echo "<td> N/A </td>";
        }
        

    }
} else {
    echo "<tr><td colspan='7'>Nema rezervacija.</td></tr>";
}

echo "</table>";
echo "</div>";

$conn->close();
?>
<style type='text/css'>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .admin-table {
        margin: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
    
</style>;