<?php

namespace Projeto;


class Verdura extends Produto
{
    private $tipo_verdura;
    


    /**
     * Get the value of tipo_verdura
     */ 
    public function getTipo_verdura()
    {
        return $this->tipo_verdura;
    }

    /**
     * Set the value of tipo_verdura
     *
     * @return  self
     */ 
    public function setTipo_verdura($tipo_verdura)
    {
        $this->tipo_verdura = $tipo_verdura;

        return $this;
    }
}








?>