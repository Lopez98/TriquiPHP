<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
            input{
                width : 50px;
                height: 50px;
            }
        </style>
        
        <?php
            include_once 'Tablero.php';
            
            $miTablero = new Tablero();
            
            echo $miTablero->getValue(0);
        ?>
        
        <form>
            <input type="button" value="<?php $miTablero->getValue(0); ?>" name="0">
            <input type="button" value="" name="1">
            <input type="button" value="" name="2">
            <br>
            <input type="button" value="" name="3">
            <input type="button" value="" name="4">
            <input type="button" value="" name="5">
            <br>
            <input type="button" value="" name="6">
            <input type="button" value="" name="7">
            <input type="button" value="" name="8">
        </form>

       
    </body>
</html>
