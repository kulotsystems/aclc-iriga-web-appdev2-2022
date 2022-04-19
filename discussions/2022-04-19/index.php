<?php

    // import the class
    require_once 'Fruit.php';
    require_once 'Citrus.php';

    // create an instance of the class
    $apple = new Fruit("RED", "MANSANAS");
    $apple->set_color("GREEN");
    echo $apple->get_color() . " " . $apple->get_name();
    echo "<br>";
    echo $apple::POINT_OF_ORIGIN;
    echo "<br>";


    echo "<hr>";

    $fruit2 = new Fruit("YELLOW", "BATAG");
    echo $fruit2->get_color() . " " . $fruit2->get_name();
    echo "<br>";
    echo $fruit2::POINT_OF_ORIGIN;

    echo "<hr>";

    $fruit3 = new Citrus("GREEN", "ORANGE");

    $fruit3->set_color("GREEN");
    $fruit3->set_name("LIMONSITO");
    $fruit3->set_shape("SPHERE");

    echo $fruit3->get_color()
        . " " .
        $fruit3->get_name()
        . " " .
        $fruit3->get_shape()
        ;

    echo "<br>";
    echo Fruit::POINT_OF_ORIGIN;




?>
