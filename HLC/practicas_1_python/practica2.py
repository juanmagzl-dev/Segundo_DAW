# Pedir el nombre al usuario
nombre = input("Por favor, introduzca su nombre: ")

# Mostrar el nombre en mayúsculas
nombre_mayus = nombre.upper()
print(f"Nombre en mayúsculas: {nombre_mayus}")

# Mostrar el número de caracteres del nombre
num_caracteres = len(nombre)
print(f"Número de caracteres: {num_caracteres}")

# Escribir el nombre tantas veces como letras tiene, en líneas distintas
for i in range(num_caracteres):
    print(nombre)
