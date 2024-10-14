# Pedir al usuario el peso en kg y la estatura en metros
peso = float(input("Introduzca su peso en kg: "))
estatura = float(input("Introduzca su estatura en metros: "))

# Calcular el índice de masa corporal (IMC)
imc = peso / (estatura ** 2)

# Mostrar el IMC redondeado a dos decimales
print(f"Tu índice de masa corporal es {imc:.2f}")
