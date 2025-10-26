<?php
$i = 1;
while ($i <= 10){
    echo "Number is " . $i . " incremented from " . ($i - 1);
    echo "<br/>";
    $i++;
}

echo "<br/>";

// Even numbers between 1 and 20
$num = 2;
while ($num <= 20){
    echo $num . " is even<br/>";
    $num += 2;
}

echo "<br/>";

// Countdown example
$count = 5;
while ($count >= 1){
    echo "Countdown: " . $count . "<br/>";
    $count--;
}

echo "<br/>";


// While loop with condition inside
$x = 1;
while ($x <= 5){
    if ($x % 2 == 0){
        echo $x . " is even<br/>";
    } 
    else{
        echo $x . " is odd<br/>";
    }
    $x++;
}
?>
