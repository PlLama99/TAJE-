<?php
$dsn = "mysql:host=localhost;dbname=4td;charset=utf8";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id_mieszkania, metraz, ulica FROM adres WHERE metraz > 100 AND ulica LIKE 'K%' 
");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Mieszkanie nr " . $row['id_mieszkania'] . " na ulicy " . $row['ulica'] . " .<br>";
    }

} catch (PDOException $e) {
    echo "Blad bazy danych: " . $e->getMessage();
}
?>
    