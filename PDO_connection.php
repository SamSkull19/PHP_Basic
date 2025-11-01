<!-- <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'student_dami';

    // Set DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$dbname";

    //create PDO
    $pdo = new PDO($dsn, $user, $password);

    $stmt = $pdo->query('SELECt * FROM students');

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['FirstName'] . " " . $row['LastName'] . '<br>';
    }

?> -->


<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "student_dami";

    // DSN
    $dsn = "mysql:host=$host;dbname=$dbname";

    // PDO 
    $pdo = new PDO($dsn, $user, $password);

    $stmt = $pdo->query('SELECT * FROM students');

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($rows as $row){
        echo $row['StudentID'] . ': ' . $row['FirstName'] . " " . $row['LastName'] . " Age : " . $row['Age'] . " City : ". $row['City'] .'<br>';
    }

?>