<?php
require 'Database.php';

$db = new Database();
$conn = $db->getConnection();


$query = $conn->query("SHOW TABLES LIKE 'users'");
$result = $query->fetch();

$query = $conn->query("SHOW TABLES LIKE 'tickets'");
$result2 = $query->fetch();


if ($result) {
    echo "Tabela 'users' ekziston!";
} else {
    echo "Tabela 'users' nuk u gjet në databazën 'ubt-projekti'.";
}
if ($result2) {
    echo "Tabela 'tickets' ekziston!";
} else {
    echo "Tabela 'tickets' nuk u gjet në databazën 'ubt-projekti'.";
}
?>
