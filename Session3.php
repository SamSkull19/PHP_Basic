<?php
    session_start();
    $_SESSION['name'] = 'Sifat Samin';
    $_SESSION['email'] = 'sifatsamin111@gmail.com';
    $_SESSION['age'] = 25;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>My New Name : <?php echo $_SESSION['name']; ?></h2>
    <h2>My New Email : <?php echo $_SESSION['email']; ?></h2>
    <h2>My New Age : <?php echo $_SESSION['age']; ?></h2>
</body>
</html>