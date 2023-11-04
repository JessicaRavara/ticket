<?php

// Stabilisco una connessione al database

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";


// Creo la connessione

$conn = new mysqli($servername, $username, $password, $dbname);


// Verifico la connessione

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ricevo i dati del form e li memorizzo in variabili

    $title = htmlspecialchars($_REQUEST['title']);
    $description = htmlspecialchars($_REQUEST['description']);
    $message = htmlspecialchars($_REQUEST['date_opened']);
    $status = htmlspecialchars($_REQUEST['status']);


    // Converto i dati del form in un elenco PHP

    $form_data = array(
        'title' => $title,
        'description' => $description,
        'date_opened' => $date,
        'status' => $status
    );


// Inserire i dati nel database

$sql = "INSERT INTO ticket (title, description, date_opened, status) VALUES ('$title', '$description', '$date', $status)";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
};

?>