<?php

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$mysqli = new mysqli("127.0.0.1", "root", "denlilleiceman20", "security");

if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    echo "du har en luder email";
    die();
}

if() {

    $result = $mysqli->prepare("SELECT * FROM credentials where username = ?");
    $result = $mysqli->bind_param("s", $username);
    $result->execute();
    $result->bind_result($username);
    $resultSet = $result->fetch();

    while() {

    }

    $stmt = $mysqli->prepare("INSERT INTO webdagbogfraoestfronten (username, counter) values (?, ?)");
}

$mysqli->set_charset("utf8");

$stmt = $mysqli->prepare("INSERT INTO credentials (username, password) values (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();


$stmt->close();
$mysqli->close();