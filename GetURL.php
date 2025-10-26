<?php
    if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $email = $_GET['email'];

        echo "My name is $name, my age is $age and my Contact Email is $email in GET URL File <br>";
    }
?>