<!DOCTYPE html>
<html>
<head>
    <title>Elenco nomi e cognomi</title>
</head>
<body>

<h1>Elenco nomi e cognomi</h1>

<?php
    if (file_exists('names.txt')) {
        $list = unserialize(file_get_contents('names.txt'));

        foreach ($list as $person) {
            echo $person['nome'] . ' ' . $person['cognome'] . '<br>';
        }
    } else {
        echo 'Non ci sono nomi e cognomi da visualizzare.';
    }
?>

</body>
</html>