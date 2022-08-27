<?php
$valor1=$_GET["valor_uno"];
$valor2=$_GET["valor_dos"];
$operacion=$_GET["operacion"];

if($operacion=="suma"){
suma($valor1,$valor2);
}

if($operacion=="resta"){
    resta($valor1,$valor2);
    }

if($operacion=="division"){
    division($valor1,$valor2);
        }

if($operacion=="multiplicacion"){
    multiplicacion($valor1,$valor2);
                }        
//----------------------------------
function suma($valor1, $valor2){
    $resultado=$valor1+$valor2;
    echo "La suma es igual a: ".$resultado;
    }

function resta($valor1, $valor2){
        $resultado=$valor1-$valor2;
        echo "La resta es igual a: ".$resultado;
        }       

function division($valor1, $valor2){
                $resultado=$valor1/$valor2;
                echo "La division es igual a: ".$resultado;
                }                 
 
 function multiplicacion($valor1, $valor2){
                    $resultado=$valor1*$valor2;
                    echo "La multiplicacion es igual a: ".$resultado;
                    }                 