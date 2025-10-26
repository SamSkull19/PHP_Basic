<?php
    date_default_timezone_set('Asia/Dhaka');
    echo date_default_timezone_get();

    echo '<br>';

    date_default_timezone_set('Asia/Dubai');
    echo date_default_timezone_get();

    echo "<br>";

    echo date('H');
    echo "<br>";
    
    echo date('i');
    echo "<br>";
    
    echo date('s');
    echo "<br>";

    echo date('h : i : s a');
    echo "<br>";

    echo date('H : i : s a');
    echo "<br>";
    
    echo date('Y - m - d - l | h : i : s a');
    echo "<br>";
?>
