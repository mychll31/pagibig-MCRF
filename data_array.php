<?php
    include 'dbconn.php';

    $sql = $conn->prepare("SELECT * FROM contribution WHERE status=1");
    $sql->execute();
    $data = $sql->fetchAll();

    $sql1 = $conn->prepare("SELECT * FROM employer_profile");
    $sql1->execute();
    $profile = $sql1->fetchAll();
?>