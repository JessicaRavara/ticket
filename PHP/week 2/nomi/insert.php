<?php
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];

    $list = array();

    if (file_exists('names.txt')) {
        $list = unserialize(file_get_contents('names.txt'));
    }

    $list[] = array('nome' => $nome, 'cognome' => $cognome);

    file_put_contents('names.txt', serialize($list));

    header('Location: index.php');
?>