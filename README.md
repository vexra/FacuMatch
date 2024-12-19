# Sistem Pakar Pemilihan Fakultas

Sistem pakar ini digunakan untuk memberikan rekomendasi fakultas berdasarkan minat, nilai, keahlian, dan kepribadian pengguna. Backend aplikasi ini dibangun menggunakan **Python** dan **Flask**. API Flask menerima data dalam format JSON dan mengembalikan rekomendasi fakultas berdasarkan aturan yang telah ditentukan.

## Fitur
- Rekomendasi fakultas berdasarkan minat.
- Mempertimbangkan nilai akhir, keahlian, dan kepribadian dalam menentukan fakultas yang sesuai.

---

## **Prasyarat**
Sebelum mulai, pastikan Anda telah menginstal:
- Python 3.6 atau lebih baru
- `pip` untuk mengelola paket Python

---

## **Instalasi**

### 1. **Clone Repository**

Clone repository ini ke komputer Anda:

```bash
git clone https://github.com/vexra/facumatch.git
cd facumatch/backend
```

### 2. **Membuat Virtual Environment**

Untuk menjaga agar dependensi tetap terisolasi, buat virtual environment di dalam folder `backend`:

#### Di Linux/MacOS:
```bash
python3 -m venv .venv
source .venv/bin/activate
```

#### Di Windows:
```bash
python -m venv .venv
.venv\Scripts\activate
```

### 3. **Instalasi Dependensi**

Setelah virtual environment aktif, instal semua dependensi yang dibutuhkan dengan menjalankan:

```bash
pip install -r requirements.txt
```

### 4. **Menjalankan Aplikasi Flask**

Setelah semua dependensi terinstal, Anda dapat menjalankan aplikasi Flask.

#### Di Linux/MacOS:
```bash
python run.py
```

#### Di Windows:
```bash
python run.py
```

Jika berhasil, aplikasi akan berjalan pada `http://localhost:5000` dan Anda akan melihat pesan seperti berikut:

```
 * Running on http://0.0.0.0:5000/ (Press CTRL+C to quit)
```

---

## **Menggunakan API**

API Flask menerima request POST dengan data JSON dan memberikan rekomendasi fakultas.

### 1. **Mengirimkan Data JSON dengan `curl`**

Untuk menguji API, Anda dapat menggunakan `curl` untuk mengirimkan data JSON ke server Flask.

#### Contoh request menggunakan `curl`:

```bash
curl -X POST http://localhost:5000/rekomendasi \
-H "Content-Type: application/json" \
-d '{
  "minat": "teknik",
  "nilai": 80,
  "skill": ["matematika", "fisika"],
  "kepribadian": ["analitis", "problem solving"]
}'
```

#### Penjelasan:
- `-X POST`: Menggunakan metode POST.
- `http://localhost:5000/rekomendasi`: Alamat API yang ingin diakses.
- `-H "Content-Type: application/json"`: Header untuk memberitahukan bahwa data yang dikirimkan adalah dalam format JSON.
- `-d '{...}'`: Data JSON yang dikirim ke server.

#### Contoh Response:
Jika data memenuhi kriteria, responsnya akan seperti ini:

```json
{
  "fakultas": "Fakultas Teknik"
}
```

Jika ada error (misalnya nilai atau keahlian tidak sesuai), responsnya bisa seperti ini:

```json
{
  "error": "Keahlian Anda tidak sesuai dengan fakultas ini."
}
```

---

## **Menjalankan Aplikasi dengan Mode Debug**

Jika Anda ingin menjalankan Flask dalam mode debug (untuk pengembangan), Anda bisa mengatur variabel lingkungan `FLASK_ENV` ke `development`:

#### Di Linux/MacOS:
```bash
export FLASK_ENV=development
python run.py
```

#### Di Windows:
```bash
set FLASK_ENV=development
python run.py
```

Dengan mode debug aktif, aplikasi akan otomatis memuat ulang jika ada perubahan pada kode dan memberikan informasi lebih detail jika terjadi error.

---

## **Menjalankan Flask dengan Port Lain (Opsional)**

Jika Anda ingin menjalankan Flask di port selain port default `5000`, Anda dapat mengubahnya di `run.py`:

```python
app.run(host="0.0.0.0", port=8080, debug=True)
```

Setelah itu, Anda bisa mengakses aplikasi di `http://localhost:8080`.

---

## **Kontribusi**

Jika Anda ingin mengembangkan lebih lanjut sistem ini, silakan fork repo ini dan kirim pull request. Semua kontribusi sangat dihargai!

---

## **Lisensi**

Proyek ini dilisensikan di bawah lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail.
