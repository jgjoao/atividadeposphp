<?php

namespace Projeto;

class Semente extends Produto
{
    private $tipo_semente;
    

    /**
     * Get the value of tipo_semente
     */ 
    public function getTipo_semente()
    {
        return $this->tipo_semente;
    }

    /**
     * Set the value of tipo_semente
     *
     * @return  self
     */ 
    public function setTipo_semente($tipo_semente)
    {
        $this->tipo_semente = $tipo_semente;

        return $this;
    }
}



?>