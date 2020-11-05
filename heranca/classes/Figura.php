<?php

namespace Classes;

abstract class Figura
{
    protected $x;
    protected $y;

    public function mostrarArea()
    {
        echo($this->x * $this-> y);
    }

}



?>