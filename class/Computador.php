<?php

class Computador
{
    public $referencia;
    public $nombre;
    public $procesador;
    public $ram;
    public $almacenamiento;
    public $fabricante;  
    public $color;
    public $vram;
    public $monitor;
    public $lugar;
    public $grafica;
    public $mouse;
    public $teclado;
    public $ano;
    public $precio;
    public $descripcion;
    public function __construct($referencia, $nombre, $procesador, $ram, $almacenamiento, $fabricante, $color, $vram, 
    $monitor, $lugar, $grafica, $mouse , $teclado, $ano, $precio, $descripcion)
    {
        $this->referencia = $referencia;
        $this->nombre = $nombre;
        $this->procesador = $procesador;
        $this->ram = $ram;
        $this->almacenamiento = $almacenamiento;
        $this->fabricante = $fabricante;
        $this->color = $color;
        $this->vram = $vram;
        $this->monitor = $monitor;
        $this->lugar = $lugar;
        $this->grafica = $grafica;
        $this->mouse = $mouse;
        $this->teclado = $teclado;
        $this->ano = $ano;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
    }
    public function __destruct()
    {
        echo 'Objeto destruido';
    }
    public function saludar()
    {
       return   $this->referencia .
       $this->nombre .
       $this->procesador .
       $this->ram .
       $this->almacenamiento .
       $this->fabricante .
       $this->color .
       $this->vram .
       $this->monitor .
       $this->lugar .
       $this->grafica .
       $this->mouse .
       $this->teclado .
       $this->ano .
       $this->precio .
       $this->descripcion 
       ;
    }

}

?>