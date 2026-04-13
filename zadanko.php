<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "4td";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Blad polaczenia: " . $conn->connect_error);
}

$sql = "SELECT id_mieszkania, ulica, metraz 
        FROM adres 
        WHERE metraz > 100 AND ulica LIKE 'K%' 
        ORDER BY metraz DESC";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Ulica: {$row['ulica']} | Metraz: {$row['metraz']} m2 <br>";
    }
} else {
    echo "Nie znaleziono mieszkan spelniajacych kryteria.";
}

$conn->close();
?>