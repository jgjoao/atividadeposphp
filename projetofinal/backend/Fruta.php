<?php

namespace Projeto;
class Fruta extends Produto 
{
    private $tipo_fruta;
    

    /**
     * Get the value of tipo_fruta
     */ 
    public function getTipo_fruta()
    {
        return $this->tipo_fruta;
    }

    /**
     * Set the value of tipo_fruta
     *
     * @return  self
     */ 
    public function setTipo_fruta($tipo_fruta)
    {
        $this->tipo_fruta = $tipo_fruta;

        return $this;
    }
}







?>