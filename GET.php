<?php
    if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $email = $_GET['email'];

        echo "My name is $name, my age is $age and my Contact Email is $email in GET File <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="GET.php?name=Samin&age=29&email=sifatsamin@gmail.com">GET INFO</a> <br><br>
    <a href="GetURL.php?name=Samin&age=29&email=sifatsamin@gmail.com">GET URL INFO</a>
</body>
</html>