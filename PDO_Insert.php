<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";

    $StudentID = 11;
    $FirstName = "Arif";
    $LastName = "Rahman";
    $Age = 23;
    $City = "Dhaka";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $user, $password);

    $sql = "INSERT INTO students(StudentID, FirstName, LastName, Age, City) VALUES (:StudentID, :FirstName, :LastName, :Age, :City)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "StudentID" => $StudentID,
        "FirstName" => $FirstName,
        "LastName" => $LastName,
        "Age" => $Age,
        "City" => $City
    ]);

    echo "Student Details Added";
?>  