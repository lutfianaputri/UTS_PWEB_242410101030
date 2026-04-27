# Readify - Aplikasi Web Pengelolaan Ulasan Buku
Readify adalah project aplikasi web sederhana yang dibangun untuk memenuhi tugas Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web. Aplikasi ini menggunakan framework Laravel dengan antarmuka yang dibangun menggunakan Tailwind CSS.

## Daftar Fitur Utama
* Login Sederhana: Menangkap input username pengguna.
* Dashboard Buku: Menampilkan grid rekomendasi buku yang tersedia.
* Form Ulasan: Memungkinkan pengguna untuk menulis ulasan baru atau mengedit ulasan sebelumnya (lengkap dengan data rating bawaan).
* Daftar Ulasan Pribadi: Halaman pengelolaan untuk melihat daftar ulasan yang telah dibuat.
* Profil Pengguna: Halaman profil yang otomatis men-generate alamat email kampus (@student.unej.ac.id) berdasarkan username.

## Penjelasan Teknis & Batasan UTS
Project ini dirancang khusus untuk mematuhi regulasi UTS, yaitu aplikasi harus berjalan tanpa menggunakan koneksi database (stateless). Beberapa implementasi teknis yang dilakukan meliputi:
1. Penggunaan Array sebagai Database: 
Data koleksi buku dan ulasan tidak disimpan di dalam MySQL, melainkan disimulasikan menggunakan array multidimensi di dalam file PageController.
2. Pengiriman Data via URL: 
Karena tidak ada database atau session yang menyimpan data secara permanen, perpindahan data antar halaman (seperti username, judul buku, isi ulasan, dan rating) dilakukan sepenuhnya menggunakan parameter URL (HTTP GET).
3. Manipulasi Data Dinamis: 
Pada fitur edit ulasan, proses penggantian data lama dengan data baru dikerjakan menggunakan fungsi bawaan PHP seperti array_filter dan array_unshift untuk memanipulasi array di dalam Controller secara langsung.

## Screenshot
**Halaman Login**
<img width="1920" height="1080" alt="Screenshot (344)" src="https://github.com/user-attachments/assets/fba2bd6b-0196-466a-8301-e6f31f323d9b" />

**Dashboard**
<img width="1794" height="1700" alt="Screenshot_27-4-2026_21158_127 0 0 1" src="https://github.com/user-attachments/assets/8315067e-34ff-4591-8cc7-997153d284ca" />

**Profile**
<img width="1920" height="1080" alt="Screenshot (346)" src="https://github.com/user-attachments/assets/3842a0af-3f5d-4187-8311-c72f67193187" />

**Review**
<img width="1920" height="1080" alt="Screenshot (345)" src="https://github.com/user-attachments/assets/4d886ce9-f6ae-4152-a9fe-5ef7176b94fc" />

UTS PWEB B
