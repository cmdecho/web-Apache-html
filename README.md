# Install Apache by Rizky

<pre><code>sudo apt update</pre>
 
<pre><code>sudo apt install apache2 -y</pre>

# phyton

<pre><code>sudo apt install libapache2-mod-wsgi-py3 -y</pre>
<pre><code>
sudo systemctl restart apache2</pre>

php

<pre><code>sudo apt install php libapache2-mod-php -y</pre>



# Memastikan server aktif otomatis saat booting
<pre><code>sudo systemctl enable apache2</pre>

# Menjalankan server
<pre><code>sudo systemctl start apache2</pre>

# Memeriksa status server
<pre><code>sudo systemctl status apache2</pre>

Konfigurasi Firewall (Opsional)
Jika server tidak bisa diakses dari perangkat lain dalam satu WiFi, jalankan:

<pre><code>sudo ufw allow 80/tcp</pre>

Lokasi File & Direktori
Direktori Utama: /var/www/html/
File Default: index.html (Ganti isi file ini untuk mengubah tampilan web).
Log Error: /var/log/apache2/error.log

Menaruh File Website

<pre><code>sudo nano /var/www/html/index.html</pre>

 Cara Mengakses
Setelah instalasi selesai, kamu bisa mengakses server melalui browser:
Lokal (PC ini): <pre><code>http://localhost atau http://127.0.0.1</pre>
Perangkat Lain (WiFi yang sama): - Cek IP server dengan perintah: hostname -I
Akses via browser di HP/Laptop lain: http://[ALAMAT-IP-KAMU]
