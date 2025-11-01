<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $user, $password);

    $stmt = $pdo->query('SELECT * FROM students');

    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($rows as $row){
        echo $row->StudentID . ': ' . $row->FirstName . " " . $row->LastName . " Age : " . $row->Age . " City : ". $row->City .'<br>';
    }

?>