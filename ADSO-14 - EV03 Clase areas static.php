<?php

//Este código no se documenta para evitar distorción con 
//el tema pricipal. La programación orientada a objetos.
//Metodos S T A T I C

class Areas{

    static function triangulo($base, $altura){

        $salida = 0;
        $salida = $base * $altura / 2;
        
        return $salida;
    }

    static function rectangulo($base, $altura){

        $salida = 0;
        $salida = $base * $altura;
        
        return $salida;
    }
}
    
#------------ ejecución -------------------------

echo Areas::triangulo( 10, 20 );
//echo Areas::rectangulo( 10, 20 );

