<?php
    $servername = "localhost";
    $username = "jugarte18";
    $password = "";
    $dbname = "jugarte18";
/*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chats";*/

    $conn = new mysqli($servername, $username, $password, $dbname);

    $id_user = $_GET['id_user'];
    $text_message = $_GET['text_message'];

    if (isset($_GET['id_user']) && isset($_GET['text_message'])) {
        $sql = "INSERT INTO messages (id_user, text_message) VALUES ('".$id_user."', '".$text_message."')";
        $result = $conn->query($sql);
        echo 'Enviado';
    } else {
        echo 'Error';
    }
    
?>