<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $stmt = $pdo->query('SELECT * FROM students');
    
    $rows = $stmt->fetchAll();

    foreach($rows as $row){
        echo $row->StudentID . ': ' . $row->FirstName . " " . $row->LastName . " Age : " . $row->Age . " City : ". $row->City .'<br>';
    }

?>