#Este código no se documenta para evitar distorción con 
#el tema pricipal. La programación orientada a objetos.
#Metodos S T A T I C

class Areas:
        
    def triangulo(base, altura):
        
        
        salida = 0
        salida = base * altura / 2        
        
        return salida
    
    def rectangulo(base, altura):
        
        salida = 0
        salida = base * altura
        
        return salida
    
#------------ ejecución -------------------------

print( Areas.triangulo( 10, 20 ) )
#print( Areas.rectangulo( 10, 20 ) )

