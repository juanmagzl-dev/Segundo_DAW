import tkinter
import tkintermapview
import phonenumbers
from opencage.geocoder import OpenCageGeocode

from key import key  # Asegúrate de que este archivo contiene tu clave API de OpenCage

from phonenumbers import geocoder
from phonenumbers import carrier

from tkinter import *
from tkinter import messagebox

# Configuración de la ventana principal
root = tkinter.Tk()
root.geometry("500x700")
root.title("Phone Number Tracker")

label1 = Label(root, text="Phone Number Tracker", font=("Arial", 16, "bold"))
label1.pack(pady=10)

def getResult():
    try:
        # Obtener número de teléfono del campo de entrada
        num = number.get("1.0", END).strip()
        
        # Validar el número
        if not num:
            messagebox.showerror("Error", "Por favor, ingrese un número de teléfono.")
            return
        
        num1 = phonenumbers.parse(num)

        # Obtener ubicación y operador del número
        location = geocoder.description_for_number(num1, "en")
        service_provider = carrier.name_for_number(num1, "en")

        # Consultar coordenadas con OpenCage
        ocg = OpenCageGeocode(key)
        query = str(location)
        results = ocg.geocode(query)

        if not results:
            messagebox.showerror("Error", "No se pudo obtener información de ubicación para este número.")
            return

        lat = results[0]['geometry']['lat']
        lng = results[0]['geometry']['lng']

        # Mostrar mapa con ubicación
        my_label = Label(root)
        my_label.pack(pady=20)

        map_widget = tkintermapview.TkinterMapView(my_label, width=400, height=300, corner_radius=0)
        map_widget.set_position(lat, lng)
        map_widget.set_marker(lat, lng, text="Phone location")
        map_widget.set_zoom(10)
        map_widget.pack()

        # Convertir coordenadas a dirección
        address_details = results[0]['components']
        formatted_address = results[0].get('formatted', "Unknown Address")
        postal_code = address_details.get('postcode', "Unknown")
        city = address_details.get('city', address_details.get('town', "Unknown"))
        street = address_details.get('road', "Unknown")

        # Mostrar resultados en el campo de texto
        result.delete("1.0", END)  # Limpiar resultados previos
        result.insert(END, f"Country: {location}\n")
        result.insert(END, f"Service Provider: {service_provider}\n")
        result.insert(END, f"Latitude: {lat}\n")
        result.insert(END, f"Longitude: {lng}\n")
        result.insert(END, f"Address: {formatted_address}\n")
        result.insert(END, f"Street: {street}\n")
        result.insert(END, f"City: {city}\n")
        result.insert(END, f"Postal Code: {postal_code}\n")

    except phonenumbers.NumberParseException:
        messagebox.showerror("Error", "El número ingresado no es válido.")
    except Exception as e:
        messagebox.showerror("Error", f"Ha ocurrido un error: {e}")

# Campo para ingresar número de teléfono
number = Text(root, height=1, font=("Arial", 14))
number.pack(pady=10)

# Botón de búsqueda
button = Button(root, text="Search", command=getResult, bg="blue", fg="white", font=("Arial", 12))
button.pack(pady=10)

# Campo para mostrar resultados
result = Text(root, height=10, font=("Arial", 12), state=NORMAL)
result.pack(pady=10)

root.mainloop()
