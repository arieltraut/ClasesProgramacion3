<?php 

Abstract Class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;
    
    public FiguraGeometrica()
    {
    	
    }	


    function Saludar()
    {
        return $this->nombre. "  legajo: " . $this->legajo;
    }
}



 ?>