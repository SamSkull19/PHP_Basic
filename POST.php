<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        echo "My name is $name, my age is $age and my Contact Email is $email";
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
    <div>
        <form method="POST" action="POST.php">
            <label>Name: </label>
            <input type="text" name="name"> <br/> <br/>

            <label>Email: </label>
            <input type="email" name="email"> <br/> <br/>

            <label>Age: </label>
            <input type="text" name="age"> <br/> <br/>

            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>