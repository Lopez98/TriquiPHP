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
        array('0','0','0'),
        array('0','0','0'),
        array('0','0','0'),
    );
    
    function getValue($pos){
        foreach($this->fichas as $i=>$v ){
            if ($i==$pos){
                return $v;
            }
        }
    }
    
    function ingresar($pos, $value){
        $this->fichas[$pos] = $value; 
    }
    
    
}
