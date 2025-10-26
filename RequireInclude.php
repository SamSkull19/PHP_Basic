<?php
    // This line prints a message from the Home Page
    echo "This is from Home Page <br>";

    // The 'require' statement includes and runs the specified file (Require.php)
    // If the file is not found, PHP will throw a **fatal error** and stop execution
    require "Require.php";

    echo "<br>";

    // Prints another message to separate sections
    echo "This is from Home Page Mid <br>";

    // The 'include' statement includes and runs the specified file (Require.php)
    // If the file is not found, PHP will throw a **warning** but continue execution
    include "Require.php";

    // Trying to include another file named 'Require22.php'
    // If this file does not exist, PHP will show a **warning** but continue executing the rest of the code
    include "Require22.php";

    echo "<br>";

    // Prints the final message from the Home Page
    echo "This is from Home Page End <br>";
?>
