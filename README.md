# UAS-PemWeb

# Nama Proyek
Gudang Penyimpanan Kita

## Deskripsi Proyek
Jelaskan secara detail mengenai proyek Anda, termasuk:
- Tujuan proyek.
  Proyek ini bertujuan untuk membuat sebuah aplikasi penyimpanan yang bisa digunakan untuk gudang
- Masalah yang ingin diselesaikan.
  aplikasi gudang yang kebanyakan ribet dan susah diakses
- Fitur utama yang disediakan.
  fitur utama yang kami sediakan adalah menambah,menghapus,mengubah dan juga untuk mencetak data data yang sudah diimput pada gudang

## Cara Instalasi dan Penggunaan
Berikan langkah-langkah untuk menginstal dan menjalankan proyek Anda.  
Contoh:
1. **Persyaratan Sistem**:
   - PHP >= 8.0
   - MySQL >= 5.7
   - XAMPP

2. **Langkah Instalasi**:
   - Download proyek kami dari github ini
   - Masuk ke folder xampp
      D:\Xampp\htdocs\
   - Buat Folder inventaris dan pastekan semua file pada github ini
   - Create database inventari lalu import
      inventaris.sql yang kami sediakan
   - Jalankan aplikasi dengan membuka Xampp dan tinggal membuka
      http://localhost/inventaris

## Sturktur File Proyek
/inventaris/
├── cetak_pdf.php            # Skrip untuk mencetak laporan inventaris dalam format PDF
├── edit_barang.php          # Halaman untuk mengedit informasi barang
├── index.php                # Halaman utama aplikasi
├── inventori.php            # Halaman untuk menampilkan daftar inventaris
├── koneksi.php              # Skrip untuk menghubungkan ke database
├── login.php                # Halaman untuk login pengguna
├── logout.php               # Skrip untuk logout pengguna
├── lib/                     # Folder untuk library eksternal
│   └── fpdf.php             # Library untuk menghasilkan file PDF
│   └── font/                # Folder untuk font yang digunakan dalam PDF
│       └── courier.php      # Font Courier
│       └── helvetica.php    # Font Helvetica
│       └── helveticab.php   # Font Helvetica Bold
│       └── helveticai.php   # Font Helvetica Italic
├── assets/                  # Folder untuk aset statis
│   ├── css/                 # Folder untuk file CSS
│   │   └── inventori.css    # Gaya untuk halaman inventaris
│   │   └── edit_barang.css  # Gaya untuk halaman edit barang
│   │   └── fpdf.css         # Gaya untuk halaman PDF
│   │   └── index.css        # Gaya untuk halaman utama
│   │   └── login2.css       # Gaya untuk halaman login
│   └── js/                  # Folder untuk file JavaScript
│       └── script.js        # Skrip JavaScript untuk interaktivitas
│   └── images/              # Folder untuk gambar
│       └── background.jpg   # Gambar latar belakang
│       └── home.jpg         # Gambar untuk halaman utama
