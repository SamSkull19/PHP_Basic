<?php
$age = 22;
$gender = "male";

if($age >= 18){
    echo "You are an adult.<br>";
} 
else{
    echo "You are a minor.<br>";
}


if($age < 13){
    echo "You are a child.<br>";
} 
elseif($age >= 13 && $age < 20){
    echo "You are a teenager.<br>";
} 
elseif($age >= 20 && $age < 60){
    echo "You are an adult.<br>";
} 
else{
    echo "You are a senior.<br>";
}


if($age >= 18){
    if($gender == "male"){
        echo "Adult Male<br>";
    } 
    else{
        echo "Adult Female<br>";
    }
} 
else {
    if($gender == "male"){
        echo "Young Male<br>";
    }
    else {
        echo "Young Female<br>";
    }
}

?>
