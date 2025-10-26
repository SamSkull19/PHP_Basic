<?php

// Numeric constant
define('PI', 3.1416);
echo PI;
echo '<br>';

// String constant
define('NAME', 'Samin');
echo NAME;
echo '<br>';

// Boolean constant
define('IS_STUDENT', true);
echo IS_STUDENT ? "Yes" : "No";
echo '<br>';

// Using constant inside a calculation
define('RADIUS', 5);
$area = PI * RADIUS * RADIUS;
echo "Area of circle: " . $area;
echo '<br>';

// Combining constants in a string
define('GREETING', 'Hello');
echo GREETING . ", " . NAME . "! Welcome to PHP Constants.";

?>
