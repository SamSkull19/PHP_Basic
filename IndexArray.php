<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7);
    $sz = count($arr);

    for($i=0; $i<$sz; $i++){
        echo $arr[$i] . "<br/>";
    }

    echo "<br/>";

    $names = ['samin', 'rahim', 'karim', 'murad', 'fahim', 'jabir'];
    $cnt = count($names);

    for($i=0; $i<$cnt; $i++){
        echo $names[$i] . "<br/>";
    }

    echo "<br/>";
    
    $numbers = [5, 10, 15, 20];
    $total = 0;

    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    echo "Sum of numbers: " . $total . "<br/>";
?>