<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ingresar
 *
 * @author Estudiantes
 */
class Tablero {
    
    var $fichas = array(
        array(''=>00,''=>01,''=>02),
        array(''=>10,''=>11,''=>12),
        array(''=>20,''=>21,''=>22),
    );
    
    function getValue($pos){
        return $this->fichas[$pos];
    }
    
    function setValue($pos, $value){
        $this->fichas[$pos] = $value; 
    }
    
    function printArreglo(){
        foreach($this->fichas as $i => $value){
            echo $value;
        }
    }
}
