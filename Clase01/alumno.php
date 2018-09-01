<?php

Class Alumno
{
    public $legajo;
    public $nombre;
    
    function Saludar()
    {
        return $this->nombre. "  legajo: " . $this->legajo;
    }
}





//echo saludar;