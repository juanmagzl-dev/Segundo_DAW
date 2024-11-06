import qrcode

# URL de la carta
url_carta = "https://asador-los-olivos.vercel.app/components/menu.html"  # Cambia esto por la URL real de tu carta

# Generar el QR
qr = qrcode.QRCode(
    version=1,  # Tamaño del QR
    error_correction=qrcode.constants.ERROR_CORRECT_L,
    box_size=10,
    border=4,
)

qr.add_data(url_carta)
qr.make(fit=True)

# Crear imagen del QR
img = qr.make_image(fill_color="black", back_color="white")

# Guardar imagen
img.save("menu_qr.png")
