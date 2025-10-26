<?php
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br/>";
    }
    
    echo "<br/>";
    
    
    $students = [
        ["Samin", 22, "CSE"],
        ["Rahim", 21, "EEE"],
        ["Karim", 23, "BBA"]
    ];
    
    for ($i = 0; $i < count($students); $i++) {
        echo "Name: " . $students[$i][0] . " | Age: " . $students[$i][1] . " | Dept: " . $students[$i][2];
        echo "<br/>";
    }
?>
