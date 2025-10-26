<?php
    $arr = array("name" => "Samin", "age" => 24, "dept" => "CSE", "university" => "SEC");
    $sz = count($arr);

    foreach($arr as $key => $value){
        echo $key . " : " . $value . "<br/>";
    }

    echo "<br/>";

    $keys = array_keys($arr);
    for ($i = 0; $i < count($keys); $i++) {
        echo $keys[$i] . " : " . $arr[$keys[$i]] . "<br/>";
    }

    echo "<br/>";
?>