<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";
    
    $StudentID = 11;
    
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    
    $sql = "DELETE FROM students WHERE StudentID = :StudentID";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([
        "StudentID" => $StudentID
    ]);
    
    echo "Student record deleted successfully.";
?>
