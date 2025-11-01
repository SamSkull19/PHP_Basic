<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $user, $password);

    $age = 22;

    // GET ROW COUNT
    $stmt = $pdo->prepare('SELECT * FROM students WHERE age = ?');
    $stmt->execute([$age]);
    $postCount = $stmt->rowCount();

    echo $postCount;
?>  