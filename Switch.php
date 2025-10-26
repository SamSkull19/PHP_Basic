<?php
$day = 3;
switch ($day) {
    case 1:
        echo "Monday<br>";
        break;

    case 2:
        echo "Tuesday<br>";
        break;

    case 3:
        echo "Wednesday<br>";
        break;

    case 4:
        echo "Thursday<br>";
        break;

    case 5:
        echo "Friday<br>";
        break;

    case 6:
        echo "Saturday<br>";
        break;

    case 7:
        echo "Sunday<br>";
        break;

    default:
        echo "Invalid day<br>";
}

// Switch with multiple cases
$fruit = "apple";
switch ($fruit) {
    case "apple":
    case "banana":
    case "orange":
        echo "This is a common fruit<br>";
        break;

    case "mango":
    case "pineapple":
        echo "This is a tropical fruit<br>";
        break;

    default:
        echo "Unknown fruit<br>";
}

// Switch without break (fall-through example)
$level = 2;
switch ($level) {
    case 1:
        echo "Beginner<br>";

    case 2:
        echo "Intermediate<br>";

    case 3:
        echo "Advanced<br>";
        break;
        
    default:
        echo "Unknown level<br>";
}
?>
