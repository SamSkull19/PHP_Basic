<?php
echo "Hello, World!";

echo "This ", "is ", "PHP ", "echo.";

echo "<h2>Welcome to PHP Programming</h2>";
echo "<p>This is a paragraph printed by PHP.</p>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Dynamic Page Title"; ?></title>
</head>
<body>
    <h1><?php echo "Hello from PHP inside HTML!"; ?></h1>

    <p>
        <?php
            $language = "PHP";
            echo "This paragraph is written using $language.";
        ?>
    </p>

    <div>
        <?php
            echo "<strong>Name:</strong> Sifat Samin <br>";
            echo "<strong>Age:</strong> 22";
        ?>
    </div>

</body>
</html>
