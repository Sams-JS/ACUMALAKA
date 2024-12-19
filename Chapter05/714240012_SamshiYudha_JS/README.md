![image](https://github.com/kerjabhakti/PWA231/assets/15622730/d031d1c5-4ffe-466c-8761-54bce790bb19)
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/25a084df-12b2-4d67-8350-5b5e968915da)

# Mempelajari TAILWIND CSS
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/0cb84ef7-b035-4015-8a54-96fd93b9ed31)

## Instalasi CLI
Install tailwindcss via npm, and create your tailwind.config.js file.
```
npm install -D tailwindcss
npx tailwindcss init
```
# Langkah Membuat Halaman Website Sederhana menggunakan HTML dan Tailwind CSS
1. Buat File HTML standar
2. Buat File Style.css
3. Siapkan dokumen asetnya (File Gambar) Bebas
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/d958bc2a-df67-468f-922d-0ed7648c9dd8)

```
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membuat Website dengan Tailwind</title>
    <!-- Jangan lupa tambahkan koneksi HTML ke CSS/Tailwind  -->
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
```
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/4ff52287-f051-4bda-b00d-9d53dba3a56b)

## Instal Extension Tailwind
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/f040db65-9847-4159-9952-fd70734b4020)

## Background Position
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/926cb138-760f-423e-84e6-693ce88d4c22)

## Kodingan membuat class container
```
 <!-- Membuat class container dan ukurannya disini -->
    <!-- Menambahkan background Images -->
    <!-- Menambah posisi gambar agar ketengah -->
    <!-- Mengatur posisi ukurannya -->
    <div
      class="container min-h-screen bg-[url('images/image.png')] bg-center bg-cover px-28 py-5 relative"
    >
      <!-- membuat class name flex pada nav-->
      <nav class="flex items-center">
        <img
          src="images/logo.png"
          alt="logonyaini"
          class="w-40 cursor-pointer"
        />
```

## Margin dan Padding
![image](https://github.com/kerjabhakti/PWA231/assets/15622730/7c41e8ca-1fd9-4895-afe0-dc6dd7a6c51b)

## Atur Posisi Logo
```
      <ul class="flex-1 text-center">
```
## Atur margin setelah inline-block dan padding setelah text-white
```
        <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white px-2">Home</a>
          </li>
          <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white px-2">About</a>
          </li>
          <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white px-2">Features</a>
          </li>
          <li class="list-none inline-block px-5">
            <a href="#" class="no-underline text-white px-2">Contact</a>
          </li>
        </ul>
        <img src="images/cart.png" alt="keranjang" class="w-8 cursor-pointer" />
      </nav>
```
## Membuat text dan jarak
```
<div class="text-white mt-48">
        <h1 class="text-6xl font-semibold leading-normal">
          Belajar Ngoding Cepat<br>
           <span class="font-light">Tailwindcss 20 Menit</span>
        </h1>
        <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam recusandae deleniti, <br>necessitatibus quisquam accusantium voluptas maxime, incidunt voluptatibus architecto <br>excepturi placeat numquam. Consequuntur sed assumenda eum. Culpa, esse minima,<br> eum dicta ea non officia dignissimos neque fugiat quaerat voluptatibus autem!
        </p>
```
## Hover
```
<div class="mt-10">
          <a
            href="#"
            class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-yellow-300 hover:text-white duration-300 hover:border border border-transparent"
            >Mari Belajar</a
          >
          <a href="#">Download Modulnya <span class="text-lg inline-block rotate-90">&#10148</span></a>
        </div>
     
```
## Tambah Gambar
```</div>
      <img src="images/programmer.png" class="w-full xl:w-1/2 xl:absolute bottom-0 right-20 alt="">
    </div>

    Tugas Praktikum
# Web Interaktif dengan Tailwind CSS dan JavaScript

Proyek ini adalah sebuah aplikasi web interaktif yang dibangun menggunakan **HTML**, **Tailwind CSS**, dan **JavaScript**. Aplikasi ini menyediakan beberapa fitur interaktif seperti kalkulator, pergantian gambar, perubahan teks, dan alert box. Aplikasi ini bertujuan untuk menunjukkan bagaimana menggabungkan elemen-elemen desain dan fungsionalitas interaktif dalam pengembangan web.

---

## 📋 Fitur Utama

### 1. **Navigasi Gambar Interaktif**
   - **Deskripsi**: Terdapat dua tombol yang dapat mengubah gambar yang tampil di halaman web.
   - **Tombol**:
     - `Cilukkk`: Menampilkan gambar `Ciluk.jpg`.
     - `BAAAAA`: Menampilkan gambar `Baaa.jpg`.

### 2. **Kalkulator Sederhana**
   - **Deskripsi**: Kalkulator dengan operasi dasar: penjumlahan, pengurangan, perkalian, dan pembagian.
   - **Fitur**:
     - Tombol angka (`0` hingga `9`).
     - Tombol operasi (`+`, `-`, `×`, `÷`).
     - Tombol `=` untuk menghitung hasil.
     - Tombol `C` untuk menghapus layar kalkulator.

### 3. **Pengubahan Teks Dinamis**
   - **Deskripsi**: Pengguna dapat mengklik tombol untuk mengubah teks pada elemen paragraf.
   - **Tombol**:
     - Tombol `Ayo Tekan`: Mengubah teks menjadi "Samshi Ganteng".

### 4. **Pergantian Paragraf Dinamis**
   - **Deskripsi**: Pengguna dapat mengklik tombol untuk mengubah paragraf yang menjelaskan tentang **Tailwind CSS** dan manfaatnya.
   - **Tombol**:
     - `Tailwind`: Menampilkan deskripsi tentang **Tailwind CSS**.
     - `Fungsi`: Menampilkan manfaat dari **Tailwind CSS**.

### 5. **Generator Pesan Pengguna**
   - **Deskripsi**: Pengguna dapat memasukkan nama mereka dan mendapatkan pesan personalisasi.
   - **Tombol**:
     - `Tampilkan Pesan`: Menampilkan pesan seperti "Halo, [nama]! Semoga harimu menyenankan." atau meminta pengguna untuk memasukkan nama.

### 6. **Alert Box**
   - **Deskripsi**: Tombol untuk menampilkan pesan alert.
   - **Tombol**:
     - `Tampilkan Alert`: Menampilkan pesan sederhana menggunakan JavaScript alert.

---

## 🛠️ Teknologi yang Digunakan

- **HTML5**: Struktur dasar dari halaman web.
- **Tailwind CSS**: Framework CSS yang digunakan untuk desain responsif dan tampilan yang modern.
- **JavaScript**: Digunakan untuk menambah interaktivitas, seperti kalkulator, pergantian gambar, perubahan teks, dan menampilkan pesan alert.

---

## 📂 Struktur Folder

