<?php
    $dbtype		= "mysql";
    $dbhost             = "localhost";
    $dbname		= "pagibig";
    $dbuser		= "root";
    $dbpass		= "asdfasdf";
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
?>
