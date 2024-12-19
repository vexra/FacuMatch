from app import create_app

# Membuat instance aplikasi Flask
app = create_app()

if __name__ == "__main__":
    # Menjalankan aplikasi pada port 5000
    app.run(host="0.0.0.0", port=5000, debug=True)
