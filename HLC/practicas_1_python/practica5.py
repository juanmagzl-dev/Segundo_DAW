import random

# Generar dos números aleatorios entre 2 y 10
num1 = random.randint(2, 10)
num2 = random.randint(2, 10)

# Calcular el resultado correcto de la multiplicación
resultado_correcto = num1 * num2

# Bucle para asegurarse de que la entrada es un número
while True:
    try:
        # Preguntar al usuario por el resultado
        respuesta_usuario = int(input(f"¿Cuánto es {num1} x {num2}? "))
        break
    except ValueError:
        print("Por favor, introduce un número válido.")

# Verificar si la respuesta es correcta
if respuesta_usuario == resultado_correcto:
    print("¡Respuesta correcta!")
else:
    print(f"No es correcta. El resultado correcto es {resultado_correcto}.")
