#Este código no se documenta para evitar distorción con 
#el tema pricipal. La programación orientada a objetos.
#Metodos de I N S T A N C I A

class Areas:
        
    def triangulo(self, base, altura):
        
        
        salida = 0
        salida = base * altura / 2        
        
        return salida
    
    def rectangulo(self, base, altura):
        
        salida = 0
        salida = base * altura
        
        return salida
    
#------------ ejecución -------------------------

objetoAreas = Areas() #El objeto solo se declara un avez.

print( objetoAreas.triangulo( 10, 20 ) )
#print( objetoAreas.rectangulo( 10, 20 ) )