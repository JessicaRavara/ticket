<?php
$servername = "your_host";
$username = "your_user";
$password = "your_password";
$dbname = "your_database";

// Creo la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifico la connessione
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, title, description, date_opened, status  FROM tickets";
$result = $conn->query($sql);

// Controllo se ci sono risultati
if ($result->num_rows > 0) {
 // stampo una lista HTML
 echo "<ul>";

 // Loop ogni record e stampo
 while($row = $result->fetch_assoc()) {
    echo "<li>" . $row["id"]. " - " . $row["title"]. " - " . $row["description"]. " - " . $row["date_opened"]. " - " . $row["status"]."</li>";
 }


 echo "</ul>";
} else {
 echo "0 results";
}

$conn->close();
?>