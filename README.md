install Apache by Rizky 

sudo apt update
sudo apt install apache2 -y

# Memastikan server aktif otomatis saat booting
sudo systemctl enable apache2

# Menjalankan server
sudo systemctl start apache2

# Memeriksa status server
sudo systemctl status apache2

Konfigurasi Firewall (Opsional)
Jika server tidak bisa diakses dari perangkat lain dalam satu WiFi, jalankan:

sudo ufw allow 80/tcp

Lokasi File & Direktori
Direktori Utama: /var/www/html/
File Default: index.html (Ganti isi file ini untuk mengubah tampilan web).
Log Error: /var/log/apache2/error.log

Menaruh File Website

sudo nano /var/www/html/index.html

 Cara Mengakses
Setelah instalasi selesai, kamu bisa mengakses server melalui browser:
Lokal (PC ini): http://localhost atau http://127.0.0.1
Perangkat Lain (WiFi yang sama): - Cek IP server dengan perintah: hostname -I
Akses via browser di HP/Laptop lain: http://[ALAMAT-IP-KAMU]
