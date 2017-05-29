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
            h2{
                font-size: 50px;
                font-family: "verdana";
            }
            input[type="text"]{
                width : 50px;
                height: 50px;
                
                text-align: center;
                font-size: 30px;
            }
            input[type="submit"]{
                width: 85px;
                height: 50px;
            }
            input[type="button"]{
                width: 85px;
                height: 50px;
            }
        </style>
        
        <?php
            include_once 'Tablero.php';
            
            $miTablero = new Tablero();
            
        ?>
        
        <script>
            function llenarArreglo(){
                var $valor = document.getElementById("00").value;
                <?php$miTablero->setValue(00, valor);?>
                        
                var valor = document.getElementById("01").value;
                <?php $miTablero->setValue(01, valor);?>
                    
                var valor = document.getElementById("02").value;
                <?php $miTablero->setValue(02, valor);?>
                    
                var valor = document.getElementById("10").value;
                <?php $miTablero->setValue(10, valor);?>
                    
                var valor = document.getElementById("11").value;
                <?php $miTablero->setValue(11, valor);?>
                    
                var valor = document.getElementById("12").value;
                <?php $miTablero->setValue(12, valor);?>
                    
                var valor = document.getElementById("20").value;
                <?php $miTablero->setValue(20, valor);?>
                    
                var valor = document.getElementById("21").value;
                <?php $miTablero->setValue(21, valor);?>
                    
                var valor = document.getElementById("22").value;
                <?php $miTablero->setValue(22, valor);?>
            }
        </script>
        
        <h2>Triqui</h2>
        
        <form>
            <input type="text" value="" maxlength="1" id="00">
            <input type="text" value="" maxlength="1" id="01">
            <input type="text" value="" maxlength="1" id="02">
            <br>
            <input type="text" value="" maxlength="1" id="10">
            <input type="text" value="" maxlength="1" id="11">
            <input type="text" value="" maxlength="1" id="12">
            <br>
            <input type="text" value="" maxlength="1" id="20">
            <input type="text" value="" maxlength="1" id="21">
            <input type="text" value="" maxlength="1" id="22">
            <br>
            <br>
            <input type="button" value="Verificar" onclick="llenarArreglo()">
            <input type="button" value="Limpiar">
        </form>
        
        <?php $miTablero->printArreglo()?>
       
    </body>
</html>
