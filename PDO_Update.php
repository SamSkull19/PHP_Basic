<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";
    
    $StudentID = 11;
    $FirstName = "Arifuzzaman";
    $LastName = "Rahman";
    $Age = 24;
    $City = "Chittagong";
    
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    
    $sql = "UPDATE students 
            SET FirstName = :FirstName, LastName = :LastName, Age = :Age, City = :City 
            WHERE StudentID = :StudentID";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([
        "StudentID" => $StudentID,
        "FirstName" => $FirstName,
        "LastName" => $LastName,
        "Age" => $Age,
        "City" => $City
    ]);
    
    echo "Student details updated successfully.";
?>
