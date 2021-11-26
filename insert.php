<?php
$port = 1433;
$serverName = "all-02.database.windows.net," . $port;
$database = "trance";
$userName = "estudiante";
$password = "Pa55w.rd1";

try {
    $conn = new PDO("sqlsrv:server = $serverName,$port; Database = $database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql .= "INSERT INTO Music (nombre, artista, fecha, productora) VALUES ('Bla Bla Bla', 'Armin Van Buuren', '2018','Armada Music')";
    $sql .= "INSERT INTO Music (nombre, artista, fecha, productora) VALUES ('Sem Voce', 'Mandragora', '2018','Mechanics Music')";
    $sql .= "INSERT INTO Music (nombre, artista, fecha, productora) VALUES ('Interlude', 'Blazy', '2017','Alien Records')";
    $sql .= "INSERT INTO Music (nombre, artista, fecha, productora) VALUES ('Oracle', 'Timmy Trumpet', '2016','Spinnin Records')";
    $sql .= "INSERT INTO Music (nombre, artista, fecha, productora) VALUES ('Mantra', 'TroyBoi', '2017','Dot Music')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
