# Pedir al usuario que introduzca un número
limite = int(input("Introduzca un número: "))

# Mostrar los números pares desde 2 hasta el número introducido
print("Números pares desde 2 hasta", limite, ":")
for num in range(2, limite + 1, 2):
    print(num)
