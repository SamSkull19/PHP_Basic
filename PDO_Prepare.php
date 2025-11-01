<?php
    $host = "localhost";
    $dbname = "student_dami";
    $user = "root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $age = 22;

    //  Positional Params
    $sql = 'SELECT * FROM students WHERE age = ?';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$age]);

    $rows = $stmt->fetchAll();

    foreach($rows as $row){
        echo $row->StudentID . ': ' . $row->FirstName . " " . $row->LastName . " Age : " . $row->Age . " City : ". $row->City .'<br>';
    }

    var_dump($rows);

    echo "<pre>";
    print_r($rows);
    echo "</pre>";


    $age2 = 23;
    $city = 'San Antonio';

    // Named Params
    $sql2 = 'SELECT * FROM students WHERE age = :age';

    $stmt2 = $pdo->prepare($sql2);

    $stmt2->execute(['age' => $age2]);

    $posts = $stmt2->fetchAll();

    echo "<pre>";
    print_r($posts);
    echo "</pre>";

    foreach($posts as $post){
        echo $post->StudentID . ': ' . $post->FirstName . " " . $post->LastName . " Age : " . $post->Age . " City : ". $post->City .'<br>';
    }
    
    $sql3 = 'SELECT * FROM students WHERE age = :age || city = :city';

    $stmt3 = $pdo->prepare($sql3);

    $stmt3->execute(['age' => $age2, 'city' => $city]);

    $posts = $stmt3->fetchAll();

    echo "<pre>";
    print_r($posts);
    echo "</pre>";

    foreach($posts as $post){
        echo $post->StudentID . ': ' . $post->FirstName . " " . $post->LastName . " Age : " . $post->Age . " City : ". $post->City .'<br>';
    }

?>