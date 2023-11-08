<?php

//Este código no se documenta para evitar distorción con 
//el tema pricipal. La programación orientada a objetos.
//Metodos de I N S T A N C I A

class Areas
 {
    function triangulo($base, $altura){

        $salida = 0;
        $salida = $base * $altura / 2;
        
        return $salida;
    }
    
    function rectangulo($base, $altura){

        $salida = 0;
        $salida = $base * $altura;
        
        return $salida;
    }
}

//------------ ejecución -------------------------

$objetoAreas = new Areas(); //El objeto solo se declara un avez.

echo $objetoAreas->triangulo( 10, 20 );
#echo $objetoAreas->rectangulo( 10, 20 );
