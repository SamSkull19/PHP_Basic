<?php
for($i = 1; $i <= 10; $i++){
    echo "Number: " . $i . "<br/>";
}

echo "<br/>";

// Printing even numbers
for($n = 2; $n <= 20; $n += 2){
    echo $n . " is even<br/>";
}

echo "<br/>";

// Countdown example
for($x = 5; $x >= 1; $x--){
    echo "Countdown: " . $x . "<br/>";
}

echo "<br/>";

// Nested for loop
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br/>";
    }
    echo "<br/>";
}
?>
