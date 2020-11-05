<?php

namespace Projeto;
Class Produto 
{
    protected $nome;
    protected $tipo;
    protected $preco;


    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }


    
}





















?>