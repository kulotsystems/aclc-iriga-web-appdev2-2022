<?php

    class Fruit {
        // Properties
        private $name;
        private $color;
        protected $shape;

        const POINT_OF_ORIGIN = 'CHINA';

        // Constructor
        public function __construct($c, $n)
        {
            $this->color = $c;
            $this->name  = $n;
        }

        // Methods
        public function set_name($n)
        {
            $this->name = $n;
        }
        public function set_color($c)
        {
            $this->color = $c;
        }
        public function set_shape($s)
        {
            $this->shape = $s;
        }


        public function get_name()
        {
            return $this->name;
        }
        public function get_color()
        {
            return $this->color;
        }
        public function get_shape()
        {
            return $this->shape;
        }
    }

?>