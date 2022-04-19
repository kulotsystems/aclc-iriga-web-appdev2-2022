<?php

    class Fruit {
        // Properties
        public $name;
        public $color;

        // Constructor
        function __construct($c, $n)
        {
            $this->color = $c;
            $this->name  = $n;
        }

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }

?>