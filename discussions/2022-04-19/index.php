<?php

    // import the class
    require_once 'Fruit.php';

    // create an instance of the class
    $apple = new Fruit();
    $apple->color = "RED";
    $apple->name  = "MANSANAS";

    $fruit2 = new Fruit();
    $fruit2->color = "YELLOW";
    $fruit2->name  = "BATAG";

    // display some object properties
    echo $apple->color . " " . $apple->name;

    echo '<br>';

    echo $fruit2->color . " " . $fruit2->name;
?>
