<?php

class SuperHeroi
{
    private $id;
    private $nome;
    private $poderEspecial;
    private $energia;
    private $forca;
    private $origem;

    public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->poderEspecial = $poderEspecial;
        $this->energia = $energia;
        $this->forca = $forca;
        $this->origem = $origem;
    }

    public function setId($id = null)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setNome($nome = null)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setPoderEspecial($poderEspecial = null)
    {
        $this->poderEspecial = $poderEspecial;
    }
    public function getPoderEspecial()
    {
        return $this->poderEspecial;
    }
    public function setEnergia($energia = null)
    {
        $this->energia = $energia;
    }
    public function getEnergia()
    {
        return $this->energia;
    }
    public function setForca($forca = null)
    {
        $this->forca = $forca;
    }
    public function getForca()
    {
        return $this->forca;
    }
    public function setOrigem($origem = null)
    {
        $this->origem = $origem;
    }
    public function getOrigem()
    {
        return $this->origem;
    }
    public function aumentarEnergia($ra = 11815319)
    {
        return $this->energia * $ra;
    }
    public function calcularPoderMedio()
    {
        return ($this->energia + $this->forca) / 2;
    }
}
