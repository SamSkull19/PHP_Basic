<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";

    $search = "%ch%";

    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);

    $sql = "SELECT * FROM students WHERE FirstName LIKE :search";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "search" => $search
    ]);

    $results = $stmt->fetchAll(PDO::FETCH_OBJ);

    if ($results){
        foreach ($results as $row){
            echo "ID: {$row->StudentID} - Name: {$row->FirstName}<br>";
        }
    } 
    else{
        echo "No students found.";
    }
?>
